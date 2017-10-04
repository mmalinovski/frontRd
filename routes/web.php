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
    return view('master');
});


Route::get('/', 'HomePageController@index')->name('homePage');
Route::get('/listOfStations', 'HomePageController@ListOfStations')->name('listOfStations');
Route::get('/genres', 'GenresController@index')->name('genres');
Route::get('/genres/{slug}', 'GenresController@genre')->name('genre');
Route::get('/stations', 'StationsController@index')->name('stations');
Route::get('/stations/{slug}', 'StationsController@station')->name('station');


Route::get('/{url}.html', 'StaticPagesController@index')->name('staticPage');




// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
