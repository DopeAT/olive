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

// Localized
Route::localized(function () {
    Auth::routes();

    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/about', 'PagesController@about')->name('about');

    Route::get('/blog', 'BlogController@index')->name('blog.index');
    Route::get('/blog/{post}', 'BlogController@show')->name('blog.show');
});

// Admin Routes
require_once('admin.php');
