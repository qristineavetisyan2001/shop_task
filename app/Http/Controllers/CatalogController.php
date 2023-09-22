<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function getCatalog()
    {

        $products = Product::with('images')->get();

        return view("catalog",["products" => $products]);
    }
}
