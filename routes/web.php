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






Route::get('/', 'HomeController@index')->name('home');

// route for the gallery
Route::get('/gallery', 'galleryController@index')->name('gallery');

// route for the gallery
Route::get('/datetype', 'datetypeController@index')->name('datetype');

Route::get('/RudyIsEenHeld', 'galleryController@theLegend')->name('theLegend');

//Route::get('/api', 'apiController@index')->name('api');

// routes for talking with api
Route::get('/api/twitter', 'TwitterController@query')->name('api');
Route::get('/api/twitter/all', 'TwitterController@showTweets')->name('apiAll');
Route::get('/api/twitter/search', 'TwitterController@searchAll')->name('apiSearch');

Route::get('/api/instagram', 'instagramController@getAll')->name('instagram');
Route::get('/api/instagram/all', 'instagramController@showTweets')->name('instagramAll');
Route::get('/api/instagram/search', 'instagramController@searchAll')->name('instagramSearch');

//Route::get('/', function () {
//    return view('home');
//});

Route::get('/about', function () {
    return view('about');
});
