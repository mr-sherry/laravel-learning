<?php

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

Route::get('/', function () {
    return view('layouts.app');
});

Auth::routes();


Route::get('/product',[App\Http\Controllers\ProductController::class,'index'])->name('product.index');
Route::get('/product',[App\Http\Controllers\ProductController::class,'create'])->name('product.create');
Route::post('/product',[App\Http\Controllers\ProductController::class,'store'])->name('product.store');

