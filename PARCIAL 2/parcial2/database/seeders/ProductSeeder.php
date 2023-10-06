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
           
           'name'=> "Burrata",
           //'datos'=>"Con tomate, salsa pesto y tostada focaccia",
           'price'=> 40.00,
           //'imagen'=> "Imagenes/Burrata.png",
           'category'=>"ENTRADAS"
       ]);
       \App\Models\Product::create([
           
           'name'=> "Dedos de Mozzarella",
           //'datos'=>"5 unidades de dedos de mozzarella acompañados de miel mostasa",
           'price'=> 28.00,
           //'imagen'=> "Imagenes/Dedos De Mozzarella.png"
           'category'=>"ENTRADAS"
       ]);
       \App\Models\Product::create([
           
           'name'=> "Langostinos Apanados",
           //'datos'=>"7 unidades de langostinos apanados, acompañados de mayonesa siracha",
           'price'=> 43.00,
           //'imagen'=> "Imagenes/Langostinos Apanado.png"
           'category'=>"ENTRADAS"
        ]);
    }
    public function definition(): array
    {
        return [
            'name' => "Pizza Peperoni","Bruscheta","Vuelta al Mundo en 80 quesos","Muffins de Pizza","Pasta Carbonara","Lasagna","Pizza Cuatro Quesos","Vino Tinto Italiano","Limonada Fresca","Vino Blanco","Sangria","Capuccino","Tiramisa","Cannoli","Panna Cotta","Gelato",
            'price' => 85000,25000,40000,35000,70000,60000,80000,20000,14000,20000,23000,12000,13000,10000,15000,8000,
            'category'=>"Recomendacion del chef","Entradas", "Entradas", "Entradas", "Platos", "Platos","Platos", "Bebidas","Bebidas","Bebidas","Bebidas","Bebidas","Postres","Postres","Postres","Postres","Postres" 
        ];
        
    }

        
}
    
       
    