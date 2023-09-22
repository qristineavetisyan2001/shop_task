<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogOutController extends Controller
{
    public function logout()
    {
        session()->forget("loggedUser");

        return redirect()->route("loginPage");
    }
}
