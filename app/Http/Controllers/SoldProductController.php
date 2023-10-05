<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\SoldProduct;
use Illuminate\Http\Request;

class SoldProductController extends Controller
{
    public static function sold($id,Request $request){

        $product = Product::where('id', $id)->get()->first();

        if($request->soldProductCount > $product->productCount){
            return redirect()->back()->withErrors('product max count '.$product->productCount);
        }

        $soldProduct = new SoldProduct;

        $soldProduct->user_id = session('loggedUser')['id'];
        $soldProduct->product_id = $id;
        $soldProduct->soldProductCount = $request->soldProductCount;

        $soldProduct->save();

        $product->productCount = $product->productCount-$request->soldProductCount;

        $product->save();

        return redirect('getBasketProducts');
    }
}
