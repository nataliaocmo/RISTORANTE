<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run():void 
    {
        

        \App\Models\Product::create([
           
           'name'=> "Pizza Peperoni",
           'price'=> 85000,
            'imagen'=> "PROYECTO-main\Comida\pizza_especialidad.jpg",
           'category'=>"RECOMENDACION"
       ]);
       \App\Models\Product::create([
           
           'name'=> "Bruscheta",
           'price'=> 28000,
           'imagen'=> "PROYECTO-main\Comida\Bruschettas.jpg",
           'category'=>"ENTRADAS"
       ]);
       \App\Models\Product::create([
           
           'name'=> "Vuelta al Mundo en 80 quesos",
           'price'=> 40000,
           'imagen'=> "PROYECTO-main\Comida\Vulta_al_mundo_en_80_quesos.jpg",
           'category'=>"ENTRADAS"
        ]);
        \App\Models\Product::create([
           
            'name'=> "Muffins de Pizza",
            'price'=> 35000,
            'imagen'=> "PROYECTO-main\Comida\Muffins de Pizza.jpg",
            'category'=>"ENTRADAS"
        ]);
        \App\Models\Product::create([
            
            'name'=> "Pasta carbonara",
            'price'=> 70000,
            'imagen'=> "PROYECTO-main\Comida\Pasta_Carbonara.jpg",
            'category'=>"PLATOS"
        ]);
        \App\Models\Product::create([
            
            'name'=> "Lasagna",
            'price'=> 60000,
            'imagen'=> "PROYECTO-main\Comida\Lasagna.jpg",
            'category'=>"PLATOS"
         ]);
         \App\Models\Product::create([
            
            'name'=> "Pizza Cuatro Quesos",
            'price'=> 80000,
            'imagen'=> "PROYECTO-main\Comida\pizza_cuatro_quesos.jpg",
            'category'=>"PLATOS"
         ]);
         \App\Models\Product::create([
            
            'name'=> "Vino tinto italiano",
            'price'=> 20000,
            'imagen'=> "PROYECTO-main\Comida\VINO-TINTO-ITALIANO.png",
            'category'=>"BEBIDAS"
         ]);
         \App\Models\Product::create([
            
            'name'=> "Limonada fresca",
            'price'=> 14000,
            'imagen'=> "PROYECTO-main\Comida\Limonada.jpg",
            'category'=>"BEBIDAS"
         ]);
         \App\Models\Product::create([
            
            'name'=> "Vino blanco",
            'price'=> 20000,
            'imagen'=> "PROYECTO-main\Comida\VINO-BLANCO.png",
            'category'=>"BEBIDAS"
         ]);
         \App\Models\Product::create([
            
            'name'=> "Sangría",
            'price'=> 23000,
            'imagen'=> "PROYECTO-main\Comida\sangria.jpg",
            'category'=>"BEBIDAS"
         ]);
         \App\Models\Product::create([
            
            'name'=> "Capuccino",
            'price'=> 12000,
            'imagen'=> "PROYECTO-main\Comida\capuccino.jpg",
            'category'=>"BEBIDAS"
         ]);
         \App\Models\Product::create([
            
            'name'=> "Tiramisu",
            'price'=> 13000,
            'imagen'=> "PROYECTO-main\Comida\tiramisu.webp",
            'category'=>"POSTRES"
         ]);
         \App\Models\Product::create([
            
            'name'=> "Cannoli",
            'price'=> 10000,
            'imagen'=> "PROYECTO-main\Comida\canoli.jpg",
            'category'=>"POSTRES"
         ]);
         \App\Models\Product::create([
            
            'name'=> "Panna cotta",
            'price'=> 15000,
            'imagen'=> "PROYECTO-main\Comida\Panna_cotta.jpg",
            'category'=>"POSTRES"
         ]);
         \App\Models\Product::create([
            
            'name'=> "Gelato",
            'price'=> 8000,
            'imagen'=> "PROYECTO-main\Comida\Gelato.jpg",
            'category'=>"POSTRES"
         ]);
    }
   }
    
       
    