<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;

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
    Route::get('/profile/show', [ProfileController::class, 'show'])->name('profile.show');
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
});

Route::get('/index/product',  [ProductController::class, 'index'])->name('product.index');
Route::get('/show/product/{product}',  [ProductController::class, 'show'])->name('product.show');
Route::get('/show/category/{category}',  [FrontController::class, 'show'])->name('category.show');

Route::get('/search/product',[ProductController::class,'search'])->name('product.search');

