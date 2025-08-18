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
    return view('pages.home.index');
});
Route::get('/about', function () {
    return view('pages.about.index');
});
Route::get('/contact', function () {
    return view('pages.contact.index');
});
Route::get('/shopping-cart', function () {
    return view('pages.shopping-cart.index');
});
Route::get('/shop', function () {
    return view('pages.shop.index');
});
Route::get('/shop/product-details', function () {
    return view('pages.shop.product-details.index');
});

Route::get('/blog', function () {
    return view('pages.blog.index');
});
Route::get('/blog/blog-details', function () {
    return view('pages.blog.blog-details.index');
});




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/dashboard', function () {
    return view('pages.dashboards.admin.index');
})->name('admin.dashboard');

Route::get('/seller/dashboard', function () {
    return view('pages.dashboards.seller.index');
})->name('seller.dashboard');