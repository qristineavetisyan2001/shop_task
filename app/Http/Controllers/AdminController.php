<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public static function login(Request $request){
        $admin = Admin::where("login", $request->login)->where("password", $request->password)->get()->first();
        if($admin){
            session(['admin' => $admin]);
            return view("Admin.admin");
        }
        else{
            return view("Admin.adminLogin");

        }
    }
}
