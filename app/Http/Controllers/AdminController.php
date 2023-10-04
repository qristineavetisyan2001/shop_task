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
            $categories = Category::all();
            return view("Admin.admin", ['categories'=>$categories]);
        }
        else{
            return view("Admin.adminLogin");
        }
    }

    public static function logOut(){
        session()->forget("admin");

        return redirect()->route("admin");
    }

    public static function getAdminPage(){
        if (session("admin")){
            $categories = Category::all();
            return view("Admin.admin", ['categories'=>$categories]);
        }
        else{
            return view('Admin.adminLogin');
        }
    }
}
