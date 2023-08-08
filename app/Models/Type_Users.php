<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;


class Type_Users extends Model
{
    use HasFactory;
    protected $table = 'type_users';
    public function users()
    {
        return $this-> hasMany(User::class, 'id_type');
    }
}
