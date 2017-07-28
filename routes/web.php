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

/*Route::get('/', function () {
    return view('accueil');
});*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'AccueilController@index');
Route::get('/liste', 'ListeController@index');
Route::get('/addMusique', 'ListeController@addMusique');
Route::post('/insert/musique', 'ListeController@insertMusique');
Route::post('/delete/musique', 'ListeController@deleteMusique');
Route::post('/update/musique', 'ListeController@updateMusique');
Route::post('/update/musique/action', 'ListeController@updateMusiqueAction');

// Routes pour relier l'auteur
Route::get('/addAuthor', 'AuthorController@addAuthor');
Route::post('/insertAuthor', 'AuthorController@insertAuthor');
Route::get('/addMusiques', 'ListeController@addMusique');

