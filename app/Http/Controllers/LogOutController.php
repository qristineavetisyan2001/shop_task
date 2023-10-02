<?php

namespace App\Http\Controllers;


class LogOutController extends Controller
{
    public function logout()
    {
        session()->forget("loggedUser");

        return redirect()->route("loginPage");
    }
}
