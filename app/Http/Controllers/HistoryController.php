<?php

namespace App\Http\Controllers;

use App\Models\SoldProduct;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function getHistory()
    {
        $soldProducts = SoldProduct::join("products", "products.id", "=", "sold_products.product_id")
            ->join("product_images", "products.id", "=", "product_images.product_id")
            ->where('user_id', session('loggedUser')['id'])
            ->get();

        return view("historyPage", ['soldProducts' => $soldProducts]);
    }
}
