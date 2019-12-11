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

// Route::get('/', function () {
//     return view('welcome');
    
// });


Route::get("/","HomeController@index");

Route::get("accueil","accueilController@accueil"); 
Route::post("accueil","accueilController@accueil");
Route::get("personne","personneController@personne"); 
//demande
Route::get('/Demande','DemandeController@index');
Route::get('Demande/create','DemandeController@create');
Route::post('Demande/create','DemandeController@store')->name("ajouter_demande");

//personne

Route::get('/personne','PersonneController@affiche');
Route::get('personne/create','PersonneController@create');
Route::post('personne/create','PersonneController@store')->name("ajouter_personne");


Route::get('personne/{id}/edit','PersonneController@edit')->name("editer_personne");

Route::patch('personne/{id}/edit', 'PersonneController@update')->name('update_personne');

Route::delete('personne/{id}', 'PersonneController@destroy');
Route::resource('personne', 'PersonneController');

//propriete
Route::get('propriete','ProprieteController@affiche');
Route::get('propriete/create','ProprieteController@create');
Route::post('propriete/create','ProprieteController@store')->name("ajouter_propriete");
Route::patch('propriete/{id}/edit', 'ProprieteController@edit')->name('update_propriete');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
