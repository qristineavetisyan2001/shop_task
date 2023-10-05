<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public static function login(Request $request)
    {
        $admin = Admin::where("login", $request->login)->where("password", $request->password)->get()->first();
        if ($admin) {
            session(['admin' => $admin]);
            $categories = Category::all();
            return view("adminInsert", ['categories' => $categories]);
        } else {
            return view("adminLogin");
        }
    }

    public static function logOut()
    {
        session()->forget("admin");

        return redirect()->route("admin");
    }

    public static function getAdminPage()
    {
        if (session("admin")) {
            $categories = Category::all();
            return view("adminInsert", ['categories' => $categories]);
        } else {
            return view('adminLogin');
        }
    }

    public static function getTables()
    {
        $categories = Category::get();
        $products = Product::with("images")->get();

        return view('adminTables', ['categories' => $categories, 'products' => $products]);
    }

    public static function deleteProduct($id)
    {
        Product::where('id', $id)->delete();

        return back();
    }

    public static function deleteCategory($id)
    {
        Category::where('id', $id)->delete();

        return back();
    }

}
