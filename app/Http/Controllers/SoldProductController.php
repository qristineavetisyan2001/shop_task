<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\SoldProduct;
use Illuminate\Http\Request;

class SoldProductController extends Controller
{
    public static function sold($id,Request $request){

        $soldProduct = new SoldProduct;

        $soldProduct->user_id = session('loggedUser')['id'];
        $soldProduct->product_id = $id;
        $soldProduct->soldProductCount = $request->soldProductCount;

        $soldProduct->save();

        $product = Product::where('id', $id)->get()->first();

        $product->productCount = $product->productCount-$request->soldProductCount;

        $product->save();

        return redirect('getBasketProducts');
    }
}
