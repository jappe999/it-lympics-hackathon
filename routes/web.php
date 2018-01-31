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
    return view('home');
});

// route for the gallery
Route::get('/gallery', 'galleryController@index')->name('gallery');

// route for the gallery
Route::get('/datetype', 'datetypeController@index')->name('datetype');


// route for api
//Route::get('/api', 'apiController@index')->name('api');


Route::get('/api', 'TwitterController@getAll');
