<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[ProductController::class,'index'])->name('dashboard');
Route::get('/add-product',[ProductController::class,'addProduct'])->name('addProduct');
Route::post('/store-product',[ProductController::class,'storeProduct'])->name('storeProduct');
Route::get('/sell-product',[ProductController::class,'sellProduct'])->name('sellProduct');
Route::post('/sell',[ProductController::class,'sell'])->name('sell');
Route::get('/update-product',[ProductController::class,'updateProduct'])->name('updateProduct');
Route::get('/edit-product{id}',[ProductController::class,'editProduct'])->name('editProduct');
Route::post('/update{id}',[ProductController::class,'update'])->name('update');

//sell transaction
Route::get('/transation',[ProductController::class,'transation'])->name('transation');
