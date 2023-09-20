<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function getCatalog()
    {

        $products = Product::get();
        foreach ($products as $product) {
            $product->images = ProductImage::where("product_id", $product->id)->get()->toArray();
        }

        return view("catalog",["products"=>$products]);
    }
}
