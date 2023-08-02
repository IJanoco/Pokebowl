<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shopping_Cart extends Model
{
    use HasFactory;
    protected $table = 'shopping_cart';
    protected $primarykey = 'id';
    protected $fillable=['amount','id_customer','id_product'];
}
