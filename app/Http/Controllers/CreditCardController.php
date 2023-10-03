<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreditCardRequest;
use App\Models\CreditCard;
use Illuminate\Http\Request;

class CreditCardController extends Controller
{
    public function addCreditCard(Request $request)
    {
        $newCreditCard = new CreditCard();

        $newCreditCard->cartNumber = $request->cartNumber;
        $newCreditCard->CVC = md5($request->CVC);
        $newCreditCard->month = $request->month;
        $newCreditCard->year = $request->year;
        $newCreditCard->user_id = session('loggedUser')['id'];

        if(CreditCard::where('user_id', session('loggedUser')['id'])->get()){
            CreditCard::where('user_id', session('loggedUser')['id'])->delete();
        }

        $newCreditCard->save();

        return back();
    }
}
