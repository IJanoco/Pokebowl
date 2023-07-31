<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\{User, Type_Users, Type_Product,Product};
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
            'name'=>'Gyoza',
            'description'=>'Empanadillas de masa ligera rellenas de pollo.',
            'price'=>'6.50',
            'url_img'=>'https://ohmydish.com/uploads/2021/homemade-gyoza.jpg',
            'id_type'=>'1'
          ]);
          Product::create([
              'id'=>'2',
              'name'=>'Tequeños',
              'description'=>'Tequeños rellenos de jamón inglés.',
              'price'=>'5.30',
              'url_img'=>'https://comeperuano.b-cdn.net/wp-content/uploads/2020/04/teque%C3%B1os-peruanos.jpg',
              'id_type'=>'1'
          ]);
            Product::create([
              'id'=>'3',
              'name'=>'Tempura',
              'description'=>'Frituras ligeras de verduras.',
              'price'=>'4.20',
              'url_img'=>'https://www.japonalternativo.com/wp-content/uploads/2023/02/snacks-aperitivos-de-japon-768x543.jpg',
              'id_type'=>'1'
          ]);
            Product::create([
              'id'=>'4',
              'name'=>'Harumaki',
              'description'=>'Rollitos de primavera típicos de Japón.',
              'price'=>'8.60',
              'url_img'=>'https://www.japonalternativo.com/wp-content/uploads/2023/02/tapas-japonesas-mas-famosas-del-mundo.jpg',
              'id_type'=>'1'
          ]);
          
          
  
  
          Product::create([
              'id'=>'5',
              'name'=>'PokeBowlVegetariano',
              'description'=>'1 PorcionDepepinoEncurtido + 1 PorcionDePalta + 1 PorcionTofuFrito + 1 PorcionDeArrozBlanco + 1 PorcionDeMangoTrozado',
              'price'=>'15',
              'url_img'=>'https://www.noracooks.com/wp-content/uploads/2022/06/vegan-poke-bowl-6.jpg',
              'id_type'=>'2'
          ]);
          Product::create([
              'id'=>'6',
              'name'=>'PokeBowlMini',
              'description'=>'1 PorcionDeArrozBlanco + 1 PorcionDePalta + 1 PorcionDeTomatesCherrys + 1 PorcionDeSalmonTrozado + 1 PorcionDeQuesoCrema',
              'price'=>'12',
              'url_img'=>'https://images.immediate.co.uk/production/volatile/sites/30/2020/08/poke-bowl-76b09ee.jpg',
              'id_type'=>'2'
          ]);
          Product::create([
              'id'=>'7',
              'name'=>'PokeBowlMediterraneo',
              'description'=>'1 PorcionDePepinoEncurtido + 1 PorcionDeAceitunasVerdes + 1 PorcionDeQuesoFresco + 1 PorcionDeTomatesCherrys + 1 PorcionDePalta + 1 PorcionDeGarbanzos',
              'price'=>'16',
              'url_img'=>'https://imag.bonviveur.com/emplatado-final-del-poke-bowl-mediterraneo.jpg',
              'id_type'=>'2'
          ]);
          Product::create([
              'id'=>'8',
              'name'=>'PokeBowlPremiumVeggie',
              'description'=>'1 PorcionDeArrozBlanco + 1 PorcionDeToffuCocido + 1 PorcionDePepinoEncurtido + 1 PorcionDeRepollo + 1 PorcionDeBrocoli + 1 PorcionDeEsparragos + TrozosDePimientoAmarillo ',
              'price'=>'18',
              'url_img'=>'https://veryveganish.com/wp-content/uploads/2021/09/Featured-Sushi-Bowls-with-Oil-free-Sesame-Ginger-Wasabi-Dressing-1.jpg',
              'id_type'=>'2'
          ]);
  
  
  
  
          Product::create([
              'id'=>'9',
              'name'=>'SuspiroALaLimeña',
              'description'=>'Dulce clasico peruano | Porción mediana para una persona.',
              'price'=>'10',
              'url_img'=>'https://www.ahorrarnuncafuetanbueno.com.pe/wp-content/uploads/2021/08/suspiro-limena.jpg',
              'id_type'=>'3'
          ]);
          Product::create([
              'id'=>'10',
              'name'=>'TortaTresLeches',
              'description'=>'Dulce clasico peruano | Porcion mediana para una persona.',
              'price'=>'12',
              'url_img'=>'https://www.laylita.com/recetas/wp-content/uploads/2018/09/1-Receta-del-tres-leches-500x500.jpg',
              'id_type'=>'3'
          ]);
          Product::create([
              'id'=>'11',
              'name'=>'ArrozConLeche',
              'description'=>'Dulce clasico peruano | Porcion mediana para una persona',
              'price'=>'14',
              'url_img'=>'https://img.bekiacocina.com/cocina/0000/96-h.jpg',
              'id_type'=>'3'
          ]);
          Product::create([
              'id'=>'12',
              'name'=>'Crema Volteada',
              'description'=>'Dulce clasico peruano | Porcion mediana para una persona',
              'price'=>'13',
              'url_img'=>'https://viajerocasual.com/wp-content/uploads/2021/05/postres-peruanos-crema-volteada.jpg',
              'id_type'=>'3'
          
          
          
          ]);
          Product::create([
              'id'=>'13',
              'name'=>'Té De Manzanilla',
              'description'=>'Bebida caliente | Taza para uno',
              'price'=>'5',
              'url_img'=>'https://www.clikisalud.net/wp-content/uploads/2020/05/te-de-manzanilla-cuarente-a.jpg',
              'id_type'=>'4'
          ]);
          Product::create([
              'id'=>'14',
              'name'=>'TéDeCanelaYClavoDeOlor',
              'description'=>'Bebida caliente | Taza para uno',
              'price'=>'5',
              'url_img'=>'https://www.semana.com/resizer/7qNiQKs4Fg7G9A7izWEohZYvnJw=/1280x0/smart/filters:format(jpg):quality(80)/cloudfront-us-east-1.images.arcpublishing.com/semana/IQF24QU4QJFLFFSNY4YFRAYXXE.jpg',
              'id_type'=>'4'
          ]);
          Product::create([
              'id'=>'15',
              'name'=>'Agua',
              'description'=>'Botella de agua personal | Pedir con o sin gas',
              'price'=>'3',
              'url_img'=>'https://vivanda.vtexassets.com/arquivos/ids/228546/1005652002.jpg?v=637420553513970000',
              'id_type'=>'4'
          ]);
          Product::create([
              'id'=>'16',
              'name'=>'GaseosaCocaCola',
              'description'=>'Bebida Gasificada Personal | Pedir fria o temperada',
              'price'=>'6',
              'url_img'=>'https://ihopperu.com/wp-content/uploads/2020/05/coca-cola.png-1.jpg',
              'id_type'=>'4'
          ]);
          Product::create([
              'id'=>'17',
              'name'=>'GaseosaIncaCola',
              'description'=>'Bebida Gasificada Personal | Pedir fria o temperada ',
              'price'=>'6',
              'url_img'=>'https://www.popolopizzeria.com/cdn/shop/products/incaSA_per_1024x1024.jpg?v=1561405979',
              'id_type'=>'4'
          ]);
  
        
    }
}
