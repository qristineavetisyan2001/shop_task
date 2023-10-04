<?php

namespace App\Http\Controllers;

use App\Helpers\FileSystem;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public static function addCategory(Request $request)
    {
        $newCategory = new Category();

        $newCategory->categoryName = $request->categoryName;
        $newCategory->categoryImage = FileSystem::file_upload($request->file('category_image'), "uploads/categories/");;

        $newCategory->save();
    }

    public static function getCategory($id)
    {
        $products = Product::where('category_id', $id)->get();
        $categories = Category::get();
        return view("catalog",['products'=>$products, "categories" => $categories]);
    }

    public static function getCategories()
    {
        $categories = Category::get();

        return view("categories",["categories" => $categories]);
    }
}
