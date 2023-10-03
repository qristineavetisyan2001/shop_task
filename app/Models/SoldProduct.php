<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoldProduct extends Model
{
    use HasFactory;

    protected $table = 'sold_products';
    /*public function historyProducts()
    {
        // Assuming you have a foreign key called 'sold_product_id' on the Product model
        return $this->hasMany(Product::class, 'id');
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class, 'id');
    }*/
}
