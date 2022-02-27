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

// Admin Routes
require_once('admin.php');

// Localized
Route::localized(function () {
    Auth::routes();

    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/about', 'PagesController@about')->name('about');

    Route::get('/blog', 'BlogController@index')->name('blog.index');
    Route::get('/blog/{post}', 'BlogController@show')->name('blog.show');

    // Order Page
    Route::get('/order', 'OrderController@order')->name('order');

    // Payment Routes
    Route::post('/charge', 'PaymentController@charge');

    // Pages
    Route::get('/{page}', 'PagesController@show');
});
