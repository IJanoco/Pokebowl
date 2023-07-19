<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\{User, Type_Users};
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

        
    }
}
