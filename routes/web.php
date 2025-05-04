<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// Homepage / New Arrivals
Route::get('/', [ProductController::class, 'newArrivals'])->name('home');
Route::get('/new-arrivals', [ProductController::class, 'newArrivals'])->name('newArrivals');

// Fragrances Page
Route::get('/fragrances', [ProductController::class, 'fragrances'])->name('fragrances');

// Product Page (placeholder)
Route::get('/product/{name}', fn($name) => redirect('/'))->name('product');

// Category Pages (placeholders)
Route::get('/leather-goods', fn() => redirect('/'))->name('leatherGoods');
Route::get('/accessories', fn() => redirect('/'))->name('accessories');

// User Pages
Route::get('/cart', fn() => redirect('/'))->name('cart');
Route::get('/myprofile', fn() => redirect('/'))->name('myprofile');

// Shop and About Us (placeholders)
Route::get('/shop', fn() => redirect('/'))->name('shop');
Route::get('/about-us', fn() => redirect('/'))->name('aboutUs');