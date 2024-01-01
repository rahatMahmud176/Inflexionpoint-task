<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProfileController; 
use Illuminate\Support\Facades\Route;
 

//----------------- Backend Router ----------------//
Route::middleware('can:is_admin')
                             ->name('admin.')
                             ->namespace('App\Http\Controllers')
                             ->prefix('admin')
                             ->group(function(){
      Route::resource('categories',CategoryController::class);
      Route::resource('products',ProductController::class);
      Route::get('products-purchase',[ProductController::class,'purchase'])->name('products.purchase');
  
  
});  
//----------------- Backend Router ----------------//








Route::get('/', function () {
    return view('welcome');
});








//-----------Auth Router With laravel Breeze ---------------------// 
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
}); 
require __DIR__.'/auth.php';
//-----------Auth Router With laravel Breeze ---------------------//