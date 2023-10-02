<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreditCardRequest;
use App\Models\CreditCard;
use Illuminate\Http\Request;

class CreditCardController extends Controller
{
    public function addCreditCard(CreditCardRequest $request)
    {
        $newCreditCard = new CreditCard();

        $newCreditCard->cartNumber = $request->cartNumber;
        $newCreditCard->CVC = $request->CVC;
        $newCreditCard->dataTime = $request->dataTime;

        $newCreditCard->save();
    }
}
