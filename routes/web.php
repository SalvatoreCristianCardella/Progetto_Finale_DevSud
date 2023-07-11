<?php

use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::get('/',[FrontController::class,'home'])->name('home');

Route::middleware(['auth'])->group(function(){
    Route::get('/create/product',  [ProductController::class, 'create'])->name('product.create');
});
Route::get('/index/product',  [ProductController::class, 'index'])->name('product.index');
Route::get('/show/product/{product}',  [ProductController::class, 'show'])->name('product.show');
Route::get('/show/product/{category}',  [FrontController::class, 'show'])->name('category.show');

