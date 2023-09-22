<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function getContent($id)
    {
        $product = Product::where("id", $id)->with('images')->get()->first();

        return view("content", ["product"=>$product]);
    }
}
