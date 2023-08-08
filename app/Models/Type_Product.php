<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
class Type_Product extends Model
{
    use HasFactory;
    protected $table = 'type_product';
    protected $primarykey = 'id';
    protected $fillable=['type'];
    public function products()
    {
        return $this-> hasMany(Product::class, 'id_type');
    }
}
