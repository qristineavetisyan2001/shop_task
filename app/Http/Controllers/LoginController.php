<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $user = User::where("email", $request->email)->get()->first();
        if ($user && password_verify($request->password, $user->password)) {
            session(['loggedUser' => $user]);
            return view("userPage");
        } else {
            return view("login");
        }
    }
}
