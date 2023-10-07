<?php

namespace App\Http\Controllers;

use App\Helpers\FileSystem;
use App\Models\Admin;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

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

    public static function editCategory($id, Request $request)
    {
        $category = Category::where('id', $id)->get()->first();

        if($request->categoryName){
            $category->categoryName = $request->categoryName;
        }
        if($request->file('category_image')){
            File::delete(public_path('uploads/categories/' . $category->categoryImage));
            $category->categoryImage = FileSystem::file_upload($request->file('category_image'), "uploads/categories/");
        }

        $category->save();

        return back();
    }

    public static function editProduct($id, Request $request)
    {
        $product = Product::with('images')->where('id', $id)->get()->first();

        if($request->productName){
            $product->productName = $request->productName;
        }
        if($request->productPrice){
            $product->productPrice = $request->productPrice;
        }
        if($request->productCount){
            $product->productCount = $request->productCount;
        }
        if($request->productDescription){
            $product->productDescription = $request->productDescription;
        }

        $productImages = ProductImage::where('product_id', $id)->get();

        foreach ($productImages as $index => $productImage){
            if($request->file('image'.($index+1))) {
                File::delete(public_path('uploads/content/' . $productImage->productImage));
                $productImage->productImage = FileSystem::file_upload($request->file('image'.($index+1)), "uploads/content/");
            }
        }

        /**/

        foreach ($productImages as $productImage){
            $productImage->save();
        }
        
        $product->save();

        return back();
    }
}
