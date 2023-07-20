<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\{User, Type_Users, Type_Product};
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        Type_Users::create([ 
            'id' => '1',
            'type' => 'cliente'
        ]);

        Type_Users::create([
            'id' => '2',
            'type' => 'admin'
        ]);

        User::create([
            'id'=>'1',
            'name'=>'Alejandro',
            'last_name'=>'Villanueva',
            'email' =>'janoco_13@hotmail.com',
            'password' => Hash::make('123456789'),
            'address' =>'Av. Larco',
            'postal_code' => '54545454',
            'phone' => '987654321',
            'dni' => '70862486',
            'id_type' => '2'
        ]);
        User::create([
            'id'=>'2',
            'name'=>'pepe',
            'last_name'=>'perez',
            'email' =>'pepe@gmail.com',
            'password' => Hash::make('12345678'),
            'address' =>'Av.pepe.344',
            'postal_code' => '25361',
            'phone' => '985621487',
            'dni' => '70898886',
            'id_type' => '1'
        ]);
        Type_Product::create([
            'id' => '1',
            'type' => 'Aperitivo'
        ]);
        Type_Product::create([
            'id' => '2',
            'type' => 'Bowl'
        ]);
        Type_Product::create([
            'id' => '3',
            'type' => 'Postre'
        ]);
        Type_Product::create([
            'id' => '4',
            'type' => 'Bebida'
        ]);
        
    }
}
