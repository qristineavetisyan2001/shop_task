<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ContentController extends Controller
{
    public function getContent($id)
    {
        $product = Product::where("id", $id)->where('productCount','>','0')->with('images')->get()->first();
        $inBasket = [];
        if(session('loggedUser')){
            $inBasket = BasketController::checkBasket($id);
        }
        return view("content", ["product"=>$product, "inBasket"=>$inBasket]);
    }
}
