<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [ProductController::class,'index']);
Route::get('/cart', [ProductController::class,'cart']);
Route::get('/add-to-cart/{id}', [ProductController::class,'addToCart']);
Route::patch('update-cart', [ProductController::class,'update']);
Route::delete('remove-from-cart', [ProductController::class,'remove']);

