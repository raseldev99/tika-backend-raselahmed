<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\deshbordController;
use  App\Http\Controllers\CategoriesController;

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


Route::middleware(['auth', 'verified'])->group(function (){
    Route::get('/',[deshbordController::class, 'index'])->name('dashboard');
    Route::resource('/categories', CategoriesController::class);
});


require __DIR__.'/auth.php';
