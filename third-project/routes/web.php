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
    return view('client.pages.home.index');
});
Route::get('/about', function () {
    return view('client.pages.about.index');
});
Route::get('/contact', function () {
    return view('client.pages.contact.index');
});
Route::get('/shopping-cart', function () {
    return view('client.pages.shopping-cart.index');
});
Route::get('/shop', function () {
    return view('client.pages.shop.index');
});
Route::get('/shop/product-details', function () {
    return view('client.pages.shop.product-details.index');
});

Route::get('/blog', function () {
    return view('client.pages.blog.index');
});
Route::get('/blog/blog-details', function () {
    return view('client.pages.blog.blog-details.index');
});
