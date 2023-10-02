<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;

class HomeController extends Controller
{
    public static function getCheapProducts()
    {
        $cheapProducts = Product::orderBy('productPrice', 'ASC')->take(10)->get();

        foreach ($cheapProducts as $cheapProduct) {
            $cheapProduct->images = ProductImage::where("product_id", $cheapProduct->id)->get();
        }

        return $cheapProducts;
    }

    public static function getNewProducts()
    {
        $newProducts = Product::orderBy('created_at', 'DESC')->take(3)->get();

        foreach ($newProducts as $newProduct) {
            $newProduct->images = ProductImage::where("product_id", $newProduct->id)->get();
        }

        return $newProducts;
    }

    public static function getAllProducts()
    {
        $allProducts = Product::get();

        foreach ($allProducts as $allProduct) {
            $allProduct->images = ProductImage::where("product_id", $allProduct->id)->get();
        }

        return $allProducts;
    }
    public static function getHome()
    {
        $categories = Category::get();

        return view("home", ["categories"=>$categories,"cheapProducts" => self::getCheapProducts(),"newProducts" => self::getNewProducts(),"allProducts" => self::getAllProducts()]);
    }
}
