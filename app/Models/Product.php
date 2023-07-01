<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\{Product_Orders, Type_Product};


class Product extends Model
{
    use HasFactory;

    public function product_orders()
    {
        return $this-> belongsToMany(Product_Orders::class, 'product_orders');
    }

    public function type_product()
    {
        return $this-> belongsTo(Type_Product::class, 'id_type', 'id');
    }
}
