<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use function Laravel\Prompts\password;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $user = User::where("email", $request->email)->get()->first();

        if ($user && password_verify($request->password, $user->password)) {
            session(['loggedUser' => $user]);
            return view("registration");
        } else {
            return view("login");
        }
    }
}
