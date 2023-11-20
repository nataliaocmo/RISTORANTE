<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void 
    { 
        Schema::create('order_product', function (Blueprint $table) { 
            $table->id(); 
            $table->unsignedBigInteger('order_id'); 
            $table->unsignedBigInteger('product_id'); 
            $table->string('user');
            
 
            // Columna para almacenar la cantidad de productos 
            $table->integer('quantity'); 
 
            // Claves foráneas 
            // $table->foreign('order_id')->references('id') ->on('orders')->onDelete('cascade'); 
            // $table->foreign('product_id')->references('id') ->on('products')->onDelete('cascade');
 
            $table->timestamps(); 
        }); 
    } 
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_product');
    }
};
