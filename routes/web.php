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

// management's routes
Route::get('/admin/login', function () {
    return view('management.login');
});

Route::post('/admin/login', 'Auth\LoginController@login')->name('login');

// use auth middleware to authenticate
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {

    // logout
    Route::get('/admin/logout', 'Auth\LoginController@logout')->name('logout');

    // modify website page
    Route::get('/', 'Management\WebsiteController@edit')->name('website.edit');
    Route::post('/', 'Management\WebsiteController@update')->name('website.update');

    // modify home page
    Route::get('/home', 'Management\HomeController@edit')->name('home.edit');
    Route::post('/home', 'Management\HomeController@update')->name('home.update');

    // modify about page
    Route::get('/about', 'Management\AboutController@edit')->name('about.edit');
    Route::post('/about', 'Management\AboutController@update')->name('about.update');

    // modify store page
    Route::get('/store', 'Management\StoreController@edit')->name('store.edit');
    Route::post('/store', 'Management\StoreController@update')->name('store.update');
});