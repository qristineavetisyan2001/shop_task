<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function getCatalog()
    {

        $products = Product::with('images')->where('productCount','>','0')->get();
        $categories = Category::get();

        return view("catalog", ["products" => $products, "categories" => $categories]);
    }

    public static function search(Request $request)
    {
        $products = Product::with('images')->where('productName', 'like', '%' . $request->searchText . '%')->where('productCount','>','0')->get();
        $categories = Category::get();
        return view("catalog", ["products" => $products, "categories" => $categories]);
    }

    public static function filter(Request $request)
    {
        $categories = Category::get();

        $query = Product::query();

        if($request->categories){
            $query->whereIn('category_id',$request->categories);
        }
        if($request->minPrice){
            $query->where('productPrice', '>=', $request->minPrice);
        }
        if($request->maxPrice){
            $query->where('productPrice', '<=', $request->maxPrice);
        }
        if ($request->sort_price){
            $query->orderBy('productPrice', $request->sort_price);
        }

        $result = $query->where('productCount','>','0')->get();


        return view("catalog", ["products" => $result, "categories" => $categories]);

    }
}
