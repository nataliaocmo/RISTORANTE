<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
USE App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('autenticar',[AuthController::class,'autenticar']);

Route::post('autorizar',[AuthController::class,'autorizar']);

Route::resource('products', ProductController::class); 

Route::post('store',[ OrderController::class]);
Route::get('id',[OrderController::class]);
Route::get('ProductsId', [OrderController::class]);
Route::get('OrderId', [OrderController::class]);
Route::get('quantity', [OrderController::class]);
