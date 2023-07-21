<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RevisorController;
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

Route::get('/',[FrontController::class,'home'])->name('home');

Route::middleware(['auth'])->group(function(){
    Route::get('/create/product',  [ProductController::class, 'create'])->name('product.create');
    Route::get('/profile/show', [ProfileController::class, 'show'])->name('profile.show');
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::post('/become/revisor',[RevisorController::class, 'become'])->name('revisor.become');
    Route::get('/view/revisor',[RevisorController::class, 'view'])->name('revisor.view');

});

Route::get('/index/product',  [ProductController::class, 'index'])->name('product.index');
Route::get('/show/product/{product}',  [ProductController::class, 'show'])->name('product.show');
Route::get('/show/category/{category}',  [FrontController::class, 'show'])->name('category.show');

// Rotte Language
Route::post('/lingua/{lang}',[FrontController::class, 'setLanguage'])->name('set_language_locale');

// Rotta immagineProfilo
Route::post('profile/img', [ProfileController::class,'imgprofile'])->name('profile_img');

//Rotte per il revisore
Route::middleware(['IsRevisor'])->group(function(){
Route::get('/revisor/home',[RevisorController::class,'index'])->name('revisor.index');
Route::patch('accept/product/{product}',[RevisorController::class,'acceptproduct'])->name('revisor.accept');
Route::patch('reject/product/{product}',[RevisorController::class,'rejectproduct'])->name('revisor.reject');
Route::get('/revisor/edit',[RevisorController::class,'edit'])->name('revisor.edit');
});

Route::get('/make/{user}',[RevisorController::class,'makeRevisor'])->name('revisor.make');


// Rendi utente revisore
Route::get('/search/product',[FrontController::class, 'searchProduct'])->name('product.search');
//fine rotte revisore