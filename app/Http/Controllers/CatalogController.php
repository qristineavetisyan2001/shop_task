<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function getCatalog()
    {

        $products = Product::with('images')->get();
        $categories = Category::get();

        return view("catalog", ["products" => $products, "categories" => $categories]);
    }

    public static function search(Request $request)
    {
        $products = Product::with('images')->where('productName', 'like', '%' . $request->searchText . '%')->get();

        return view("catalog", ["products" => $products]);
    }

    public function filter(Request $request)
    {

       dd($request);



    }
}
