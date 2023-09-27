<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Category;
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

    public static function getAdminPage(){
        $categories = Category::get();
        if (session("admin")){
            return view("Admin.admin", ['categories'=>$categories]);
        }
        else{
            return view('Admin.adminLogin');
        }
    }
}
