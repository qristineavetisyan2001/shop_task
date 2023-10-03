<?php

namespace App\Http\Controllers;

use App\Models\CreditCard;
use App\Models\Product;
use Illuminate\Http\Request;

class BuyPageController extends Controller
{
    public  static  function getBuyPage($id){
        $buyProduct = Product::with('images')->where('id', $id)->get()->first();
        $creditCard=null;
        if(session('loggedUser')) {
            $creditCard = CreditCard::where('user_id', session('loggedUser')['id'])->get()->first();
        }

        return view('creditCardPage', ['buyProduct' => $buyProduct, 'creditCard'=>$creditCard]);
    }

}
