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
Route::get('/search', 'HomePageController@SearchStation');

Route::get('/api/listOfStations', 'MobileApiController@ListOfStations');
Route::get('/api/listOfGenres', 'MobileApiController@ListOfGenres');


Route::get('/searchGenre', 'GenresController@SearchGenres');
Route::get('/genres', 'GenresController@index')->name('genres');
Route::get('/genres/{slug}', 'GenresController@genre')->name('genre');
Route::get('/stations', 'StationsController@index')->name('stations');
Route::get('/stations/{slug}.html', 'DetachedController@index')->name('detached');
Route::get('/stations/{slug}', 'StationsController@station')->name('station');

Route::post('sendmail','MailController@basic_email');
// Route::get('sendhtmlemail','MailController@html_email');
// Route::get('sendattachmentemail','MailController@attachment_email');



Route::get('/{url}.html', 'StaticPagesController@index')->name('staticPage');

Route::get('/play/{slug}/{streamId}', 'StreamController@index')->name('streamPlay');



// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
