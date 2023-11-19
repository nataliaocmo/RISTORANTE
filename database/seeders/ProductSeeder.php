<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;
use \Illuminate\Support\Facades\Hash;
use \Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products=[
            [
            'name' => 'PIZZA PEPPERONI',
            'quantity'=> 100,
            'img' => 'Comida\pizza_especialidad.jpg',
            'price'=> 85000 ,
            'category'=> 'RECOMENDACION DEL CHEF',
            'created_at'=> now(),
            'updated_at'=> now(),

            ],
            [
            'name' => 'BRUSCHETTA',
            'quantity'=> 100,
            'img' => 'Comida\Bruschettas.jpg',
            'price'=> 25000 ,
            'category'=> 'ENTRADA',
            'created_at'=> now(),
            'updated_at'=> now(),
            ],
            [
            'name' => 'VUELTA AL MUNDO EN 80 QUESOS',
            'quantity'=> 100,
            'img' => 'Comida\Vulta_al_mundo_en_80_quesos.jpg',
            'price'=> 40000 ,
            'category'=> 'ENTRADA',
            'created_at'=> now(),
            'updated_at'=> now(),
            ],
            [    
            'name' => 'MUFFINS DE PIZZA',
            'quantity'=> 100,
            'img' => 'Comida\Muffins de Pizza.jpg',
            'price'=> 35000 ,
            'category'=> 'ENTRADA',
            'created_at'=> now(),
            'updated_at'=> now(),
            ],
            [
            'name' => 'PASTA CARBONARA',
            'quantity'=> 100,
            'img' => 'Comida\Pasta_Carbonara.jpg',
            'price'=> 70000 ,
            'category'=> 'PLATOS',
            'created_at'=> now(),
            'updated_at'=> now(),
            ],
            [
            'name' => 'LASAGNA',
            'quantity'=> 100,
            'img' => 'Comida\Lasagna.jpg',
            'price'=> 60000 ,
            'category'=> 'PLATOS',
            'created_at'=> now(),
            'updated_at'=> now(),
            ],
            [
            'name' => 'PIZZA CUATRO QUESOS',
            'quantity'=> 100,
            'img' => 'Comida\pizza_cuatro_quesos.jpg',
            'price'=> 80000 ,
            'category'=> 'PLATOS',
            'created_at'=> now(),
            'updated_at'=> now(),
            ],
            [
            'name' => 'VINO TINTO ITALIANO',
            'quantity'=> 100,
            'img' => 'Comida\VINO-TINTO-ITALIANO.png',
            'price'=> 20000 ,
            'category'=> 'BEBIDAS',
            'created_at'=> now(),
            'updated_at'=> now(),
            ],
            [
            'name' => 'LIMONADA FRESCA',
            'quantity'=> 100,
            'img' => 'Comida\Limonada.jpg',
            'price'=> 14000 ,
            'category'=> 'BEBIDAS',
            'created_at'=> now(),
            'updated_at'=> now(),
            ],
            [
            'name' => 'VINO BLANCO',
            'quantity'=> 100,
            'img' => 'Comida\VINO-BLANCO.png',
            'price'=> 20000 ,
            'category'=> 'BEBIDAS',
            'created_at'=> now(),
            'updated_at'=> now(),
            ],
            [
            'name' => 'SANGRIA',
            'quantity'=> 100,
            'img' => 'Comida\sangria.jpg',
            'price'=> 23000 ,
            'category'=> 'BEBIDAS',
            'created_at'=> now(),
            'updated_at'=> now(),
            ],
            [
            'name' => 'CAPUCCINO',
            'quantity'=> 100,
            'img' => 'Comida\capuccino.jpg',
            'price'=> 12000 ,
            'category'=> 'BEBIDAS',
            'created_at'=> now(),
            'updated_at'=> now(),
            ],
            [
            'name' => 'TIRAMISU',
            'quantity'=> 100,
            'img' => 'Comida\tiramisu.webp',
            'price'=> 14000 ,
            'category'=> 'POSTRES',
            'created_at'=> now(),
            'updated_at'=> now(),
            ],
            [
            'name' => 'CANNOLI',
            'quantity'=> 100,
            'img' => 'Comida\canoli.jpg',
            'price'=> 10000 ,
            'category'=> 'POSTRES',
            'created_at'=> now(),
            'updated_at'=> now(),
            ],
            [
            'name' => 'PANNA COTTA',
            'quantity'=> 100,
            'img' => 'Comida\Panna_cotta.jpg',
            'price'=> 15000 ,
            'category'=> 'POSTRES',
            'created_at'=> now(),
            'updated_at'=> now(),
            ],
            [
            'name' => 'GELATO',
            'quantity'=> 100,
            'img' => 'Comida\Gelato.jpg',
            'price'=> 8000 ,
            'category'=> 'POSTRES',
            'created_at'=> now(),
            'updated_at'=> now(),
            ],
        ];
        DB::table('products')->insert($products);
    }
}
