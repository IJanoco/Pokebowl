<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\{Product, Orders};

class Product_Orders extends Model
{
    use HasFactory;
    protected $table = 'product_orders';
    protected $fillable = [
        'id_product',
        'id_order',
        'id_quantity',
    ];
    public function product()
    {
        return $this->belongsTo(Product::class, 'id_product');
    }

    public function order()
    {
        return $this->belongsTo(Orders::class, 'id_order');
    }
}
