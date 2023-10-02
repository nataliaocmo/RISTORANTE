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
        this.definition();
        //Product::factory(10)->create();
    }
    public function definition(): array
    {
        return [
            //'name' => "Pizza Peperoni","Bruscheta","Vuelta al Mundo en 80 quesos","Muffins de Pizza","Pasta Carbonara","Lasagna","Pizza Cuatro Quesos","Vino Tinto Italiano","Limonada Fresca","Vino Blanco","Sangria","Capuccino","Tiramisa","Cannoli","Panna Cotta","Gelato";
            //'price' => 85000,25000,40000,35000,70000,60000,80000,20000,14000,20000,23000,12000,13000,10000,15000,8000;
            //'category'  => "Recomendacion del chef","Entradas", "Entradas", "Entradas", "Platos", "Platos","Platos", "Bebidas","Bebidas","Bebidas","Bebidas","Bebidas","Postres","Postres","Postres","Postres","Postres";
        ];
    }
}
