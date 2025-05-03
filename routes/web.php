<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\ProductController;


// Homepage / New Arrivals
Route::get('/', [ProductController::class, 'newArrivals'])->name('home');
Route::get('/new-arrivals', [ProductController::class, 'newArrivals'])->name('newArrivals');

// Category Pages (placeholders for now)
Route::get('/leather-goods', fn() => redirect('/'))->name('leatherGoods');
Route::get('/fragrances', fn() => redirect('/'))->name('fragrances');
Route::get('/accessories', fn() => redirect('/'))->name('accessories');

// User Pages
Route::get('/cart', fn() => redirect('/'))->name('cart');
Route::get('/myprofile', fn() => redirect('/'))->name('myprofile');

// Shop and About Us (placeholders)
Route::get('/shop', fn() => redirect('/'))->name('shop');
Route::get('/about-us', fn() => redirect('/'))->name('aboutUs');
