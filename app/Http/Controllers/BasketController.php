<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use App\Models\ProductImage;

class BasketController extends Controller
{
    public function addBasket($id)
    {

        $newBasketProduct = new Basket;

        $currentUser = session("loggedUser");

        $newBasketProduct->product_id = $id;
        $newBasketProduct->user_id = $currentUser["id"];

        $newBasketProduct->save();
        return redirect()->route("content", $id);
    }

    public static function getBasketProducts()
    {
        $currentUser = session("loggedUser");

        $getBasketProducts = Basket::join("products", "products.id", "=", "basket_products.product_id")
            ->where("basket_products.user_id", $currentUser['id'])
            ->get();

        foreach ($getBasketProducts as $basketProduct){
            $basketProduct->images = ProductImage::where("product_id", $basketProduct->id)->get();
        }
        return view("basketPage", ["basketProducts" => $getBasketProducts]);
    }

    public static function deleteBasketProduct($id)
    {
        $currentUser = session("loggedUser");

        Basket::where("product_id", $id)->where("user_id",$currentUser["id"])->delete();

        return self::getBasketProducts();
    }

    public static  function  checkBasket($productId){
        return Basket::where("product_id", $productId)->where('user_id', session('loggedUser')['id'])->get();
    }
}
