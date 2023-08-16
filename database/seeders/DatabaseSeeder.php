<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\{User, Type_Users, Type_Product,Product,Company};
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

        Product::create([
            'id'=>'1',
            'name'=>'PokeBowl Premium Veggie',
            'description'=>'1 Porción de Arroz Blanco + 1 Porción de Pepino Encurtido + 1 Porción de Repollo.',
            'price'=>'18',
            'url_img'=>'assetscustomer/imgmenu/premium.png',
            'id_type'=>'2'
        ]);

        Product::create([
            'id'=>'2',
            'name'=>'Agua',
            'description'=>'Botella de agua personal.',
            'price'=>'3',
            'url_img'=>'assetscustomer/imgmenu/agua.png',
            'id_type'=>'4'
        ]);
          
            Product::create([
              'id'=>'3',
              'name'=>'Tempura',
              'description'=>'Frituras ligeras de verduras.',
              'price'=>'4.20',
              'url_img'=>'assetscustomer/imgmenu/tempura.png',
              'id_type'=>'1'
          ]);
           
          
          Product::create([
            'id'=>'4',
            'name'=>'Gaseosa Inca Cola',
            'description'=>'Bebida Gasificada Personal.',
            'price'=>'6',
            'url_img'=>'assetscustomer/imgmenu/incacola.png',
            'id_type'=>'4'
        ]);
  
  
          Product::create([
              'id'=>'5',
              'name'=>'PokeBowl Vegetariano',
              'description'=>'1 Porción de Pepino Encurtido + 1 Porción de Palta + 1 Porción de Arroz Blanco + 1 Porción de Mango Trozado.',
              'price'=>'15',
              'url_img'=>'assetscustomer/imgmenu/vegetariano.png',
              'id_type'=>'2'
          ]);
          Product::create([
              'id'=>'6',
              'name'=>'PokeBowl Mini',
              'description'=>'1 Porción de Arroz Blanco + 1 Porción de Palta + 1 Porción de Salmón Trozado + 1 Porción de Queso Crema.',
              'price'=>'12',
              'url_img'=>'assetscustomer/imgmenu/mini.png',
              'id_type'=>'2'
          ]);
          Product::create([
              'id'=>'7',
              'name'=>'PokeBowl Mediterráneo',
              'description'=>'1 Porción de Pepino Encurtido + 1 Porción de Aceitunas Verdes + 1 Porción de Queso + 1 Porción de Tomates + 1 Porción de Palta.',
              'price'=>'16',
              'url_img'=>'assetscustomer/imgmenu/mediterraneo.png',
              'id_type'=>'2'
          ]);
          
          Product::create([
            'id'=>'8',
            'name'=>'Gyoza',
            'description'=>'Empanadillas de masa ligera rellenas de pollo.',
            'price'=>'6.50',
            'url_img'=>'assetscustomer/imgmenu/gyozas.png',
            'id_type'=>'1'
          ]);
    
          Product::create([
              'id'=>'9',
              'name'=>'Suspiro a la Limeña',
              'description'=>'Dulce clásico peruano | Porción mediana para una persona.',
              'price'=>'10',
              'url_img'=>'assetscustomer/imgmenu/suspiro.png',
              'id_type'=>'3'
          ]);
          Product::create([
              'id'=>'10',
              'name'=>'Torta Tres Leches',
              'description'=>'Dulce clásico peruano | Porción mediana para una persona.',
              'price'=>'12',
              'url_img'=>'assetscustomer/imgmenu/tres_leches.png',
              'id_type'=>'3'
          ]);
          Product::create([
              'id'=>'11',
              'name'=>'Arroz con Leche',
              'description'=>'Dulce clásico peruano | Porción mediana para una persona.',
              'price'=>'14',
              'url_img'=>'assetscustomer/imgmenu/arroz_leche.png',
              'id_type'=>'3'
          ]);
          Product::create([
              'id'=>'12',
              'name'=>'Crema Volteada',
              'description'=>'Dulce clásico peruano | Porción mediana para una persona.',
              'price'=>'13',
              'url_img'=>'assetscustomer/imgmenu/crema.png',
              'id_type'=>'3'
                    
          
          ]);
          Product::create([
              'id'=>'13',
              'name'=>'Té de Manzanilla',
              'description'=>'Bebida caliente | Taza para uno.',
              'price'=>'5',
              'url_img'=>'assetscustomer/imgmenu/manzanilla.png',
              'id_type'=>'4'
          ]);
          Product::create([
              'id'=>'14',
              'name'=>'Té De Canela Y Clavo De Olor',
              'description'=>'Bebida caliente | Taza para uno.',
              'price'=>'5',
              'url_img'=>'assetscustomer/imgmenu/canelayclavo.png',
              'id_type'=>'4'
          ]);
          
          Product::create([
            'id'=>'15',
            'name'=>'Tequeños',
            'description'=>'Tequeños rellenos de jamón inglés.',
            'price'=>'5.30',
            'url_img'=>'assetscustomer/imgmenu/tequeños.png',
            'id_type'=>'1'
            ]);
          Product::create([
              'id'=>'16',
              'name'=>'Gaseosa Coca Cola',
              'description'=>'Bebida Gasificada Personal.',
              'price'=>'6',
              'url_img'=>'assetscustomer/imgmenu/coca.png',
              'id_type'=>'4'
          ]);
          Product::create([
            'id'=>'17',
            'name'=>'Harumaki',
            'description'=>'Rollitos de primavera típicos de Japón.',
            'price'=>'8.60',
            'url_img'=>'assetscustomer/imgmenu/harumaki.png',
            'id_type'=>'1'
        ]);

          Company::create([
            'id' => '1',
            'name' => 'POKEBOWL YES!',
            'taxpayer' => '20745874455610',
            'email' => 'pokebowlyes@gmail.com',
            'phone' => '987654321',
            'district' => 'San Isidro',
            'address' => 'Mz. Isidoro lt2',
            'url_logo' => 'img/encabezado.png',
          ]);
  
        
    }
}
