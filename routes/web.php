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
Route::get('/about', 'HomeController@about');
Route::get('/RudyIsEenHeld', 'HomeController@TheLegend')->name('theLegend');

//Route::get('/api', 'apiController@index')->name('api');

// routes for talking with api
Route::get('/api/twitter', 'TwitterController@query')->name('api');
Route::get('/api/twitter/all', 'TwitterController@showTweets')->name('apiAll');
Route::get('/api/twitter/search', 'TwitterController@searchAll')->name('apiSearch');

Route::get('/api/instagram', 'InstagramController@getAll')->name('instagram');
Route::get('/api/instagram/all', 'InstagramController@showTweets')->name('instagramAll');
Route::get('/api/instagram/search', 'InstagramController@searchAll')->name('instagramSearch');
