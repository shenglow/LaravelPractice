<?php

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

Route::get('/', function () {
    return view('home/home');
})->name('home');

Route::get('/about', function () {
    return view('home/about');
})->name('about');

Route::get('/products', function () {
    return view('home/products');
})->name('products');

Route::get('/store', function () {
    return view('home/store');
})->name('store');