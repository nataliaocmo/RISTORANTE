<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product:: factories()->create([
            'name' => 'PIZZA PEPPERONI',
            'quantity'=> 100,
            'img' => 'Comida\pizza_especialidad.jpg',
            'price'=> 85000 ,
            'category'=> 'RECOMENDACION DEL CHEF'
        ]);
        Product:: factories()->create([
            'name' => 'BRUSCHETTA',
            'quantity'=> 100,
            'img' => 'Comida\Bruschettas.jpg',
            'price'=> 25000 ,
            'category'=> 'ENTRADA'
        ]);
        Product:: factories()->create([
            'name' => 'VUELTA AL MUNDO EN 80 QUESOS',
            'quantity'=> 100,
            'img' => 'Comida\Vulta_al_mundo_en_80_quesos.jpg',
            'price'=> 40000 ,
            'category'=> 'ENTRADA'
        ]);
        Product:: factories()->create([
            'name' => 'MUFFINS DE PIZZA',
            'quantity'=> 100,
            'img' => 'Comida\Muffins de Pizza.jpg',
            'price'=> 35000 ,
            'category'=> 'ENTRADA'
        ]);
        Product:: factories()->create([
            'name' => 'PASTA CARBONARA',
            'quantity'=> 100,
            'img' => '',
            'price'=> 70000 ,
            'category'=> 'PLATOS'
        ]);
        Product:: factories()->create([
            'name' => 'PASTA CARBONARA',
            'quantity'=> 100,
            'img' => 'Comida\Pasta_Carbonara.jpg',
            'price'=> 60000 ,
            'category'=> 'PLATOS'
        ]);
        Product:: factories()->create([
            'name' => 'PIZZA CUATRO QUESOS',
            'quantity'=> 100,
            'img' => 'Comida\pizza_cuatro_quesos.jpg',
            'price'=> 80000 ,
            'category'=> 'PLATOS'
        ]);
        Product:: factories()->create([
            'name' => 'VINO TINTO ITALIANO',
            'quantity'=> 100,
            'img' => 'Comida\VINO-TINTO-ITALIANO.png',
            'price'=> 20000 ,
            'category'=> 'BEBIDAS'
        ]);
        Product:: factories()->create([
            'name' => 'LIMONADA FRESCA',
            'quantity'=> 100,
            'img' => 'Comida\Limonada.jpg',
            'price'=> 14000 ,
            'category'=> 'BEBIDAS'
        ]);
        Product:: factories()->create([
            'name' => 'VINO BLANCO',
            'quantity'=> 100,
            'img' => 'Comida\VINO-BLANCO.png',
            'price'=> 20000 ,
            'category'=> 'BEBIDAS'
        ]);
        Product:: factories()->create([
            'name' => 'SANGRIA',
            'quantity'=> 100,
            'img' => 'Comida\sangria.jpg',
            'price'=> 23000 ,
            'category'=> 'BEBIDAS'
        ]);
        Product:: factories()->create([
            'name' => 'CAPUCCINO',
            'quantity'=> 100,
            'img' => 'Comida\capuccino.jpg',
            'price'=> 12000 ,
            'category'=> 'BEBIDAS'
        ]);
        Product:: factories()->create([
            'name' => 'TIRAMISU',
            'quantity'=> 100,
            'img' => 'Comida\tiramisu.webp',
            'price'=> 14000 ,
            'category'=> 'POSTRES'
        ]);
        Product:: factories()->create([
            'name' => 'CANNOLI',
            'quantity'=> 100,
            'img' => 'Comida\canoli.jpg',
            'price'=> 10000 ,
            'category'=> 'POSTRES'
        ]);
        Product:: factories()->create([
            'name' => 'PANNA COTTA',
            'quantity'=> 100,
            'img' => 'Comida\Panna_cotta.jpg',
            'price'=> 15000 ,
            'category'=> 'POSTRES'
        ]);
        Product:: factories()->create([
            'name' => 'GELATO',
            'quantity'=> 100,
            'img' => 'Comida\Gelato.jpg',
            'price'=> 8000 ,
            'category'=> 'POSTRES'
        ]);
    }
}
