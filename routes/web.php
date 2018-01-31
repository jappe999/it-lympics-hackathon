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


Route::get('/', 'galleryController@home')->name('home');

// route for the gallery
Route::get('/gallery', 'galleryController@index')->name('gallery');

// route for the gallery
Route::get('/datetype', 'datetypeController@index')->name('datetype');

Route::get('/RudyIsEenHeld', 'galleryController@theLegend')->name('theLegend');

//Route::get('/api', 'apiController@index')->name('api');

// routes for talking with api
Route::get('/api', 'TwitterController@getAll')->name('api');
Route::get('/api/twitter/all', 'TwitterController@showTweets')->name('apiAll');
Route::get('/api/twitter/search', 'TwitterController@searchAll')->name('apiSearch');
