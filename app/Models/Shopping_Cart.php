<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\{User, Product};

class Shopping_Cart extends Model
{
    use HasFactory;
    protected $table = 'shopping_cart';
    protected $fillable = [
        'quantity',
        'id_customer',
        'id_product',
    ];
    public function product()
    {
        return $this->belongsTo(Product::class, 'id_product');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_customer');
    }
}
