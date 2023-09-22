<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public static function addProduct (Request $request)
    {
        $newProduct = new Product();

        $newProduct->productName = $request->productName;
        $newProduct->productPrice = $request->productPrice;
        $newProduct->productDescription = $request->productDescription;
        $newProduct->productCode = "product_".date("y-m-d H:s:i");

        $newProduct->save();

        $product = Product::where("productCode", $newProduct->productCode)->get()->first();

        self::addProductImages($product->id,$request->file());
        return view("Admin.admin");
    }

    public static function addProductImages($productId,$images){
        foreach ($images as $image){
                $type = null;
                switch ($image->getClientMimeType()){
                    case "image/jpeg":
                        $type = ".jpg";
                        break;
                    case "image/png":
                        $type=".png";
                        break;
                }

                if($type){

                    $fileName = md5(date('y-m-d H:i:sa')).$type;
                    $newImage = new ProductImage();

                    $image->move(public_path('uploads/content/'), $fileName);

                    $newImage->productImage = $fileName;
                    $newImage->product_id = $productId;
                    $newImage->save();
                    sleep(1);
                }
        }
    }
}
