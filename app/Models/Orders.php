<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Orders extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class,'id_customer');
    }
    public function product()
    {
        return $this-> belongsToMany(Product::class, 'product_orders', 'id_order', 'id_product')
                                    ->withPivot('quantity')->withTimestamps();
    }                                                               

}
