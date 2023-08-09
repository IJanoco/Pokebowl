<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\{Type_Product, Orders, User};


class Product extends Model
{
    
    use HasFactory;

    protected $table = 'product';
    protected $primarykey = 'id';
    protected $fillable=['name','description','price','url_img','id_type'];
    //public $timestamps = false;

    public function product_orders()
    {
        return $this-> belongsToMany(Product_Orders::class, 'product_orders');
    }

    public function orders()
    {
        return $this-> belongsToMany(Orders::class, 'product_orders', 'id_product', 'id_order')
                                    ->withPivot('quantity')->withTimestamps();
    }
    public function type_product()
    {
        return $this-> belongsTo(Type_Product::class, 'id_type');
    }
    public function users()
    {
        return $this-> belongsToMany(User::class, 'shopping_cart', 'id_product', 'id_customer')
                                    ->withPivot('quantity')->withTimestamps();
    }
}
