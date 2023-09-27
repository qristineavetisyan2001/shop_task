<?php

namespace App\Http\Controllers;

use App\Helpers\FileSystem;
use App\Models\Category;
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
}
