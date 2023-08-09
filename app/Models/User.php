<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Type_Users;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'last_name', 'email', 'password','address','postal_code','phone','dni', 'id_type',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function type_user()
    {
        return $this-> belongsTo(Type_Users::class, 'id_type', 'id');
    }

    public function orders()
    {
        return $this->hasMany(Order::class, 'id_customer');
    }

    public function Users()
    {
        return $this-> belongsToMany(Product::class, 'shopping_cart', 'id_customer', 'id_product')
                                    ->withPivot('quantity')->withTimestamps();
    }
}
