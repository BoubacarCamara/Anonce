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
// Route::group([], function () { 
// Route::get ('proprietes', function(){
//     $propriete = \App\Proprietes::get();

//     //dd($propriete);
//    // return view('propriete/recherche' , compact('propriete'));
// });
// Route::get('proprietes/{id}', function ($id){
    
//     $propriete1 = \App\Proprietes::find($id);
//     //dd($propriete1);
//     //return view('propriete/pro_show', compact('propriete1')); 
     
// });
   
// });  
//
Route::get("home","HomeController@index");
Route::get("anonce","HomeController@index");
// Route::get("users","RegisterController@affiche");
Route::get("accueil","accueilController@accueil"); 
Route::post("accueil","accueilController@accueil");
// Route::get("personne","personneController@personne"); 
//demande
Route::get('/Demande','DemandeController@index');
Route::get('Demande/create','DemandeController@create');
Route::post('Demande/create','DemandeController@store')->name("ajouter_demande");

//personne
// Route::get("/personne/{id}/show", 'PersonneController@show');
// Route::get('/personne','PersonneController@affiche');
// Route::get('personne/create','PersonneController@create');
// Route::post('personne/create','PersonneController@store')->name("ajouter_propriete");


// Route::get('personne/{id}/edit','PersonneController@edit')->name("editer_personne");

// Route::patch('personne/{id}/edit', 'PersonneController@update')->name('update_personne');

// Route::delete('personne/{id}', 'PersonneController@destroy');
// Route::resource('personne', 'PersonneController');

//propriete
Route::get("/propriete/{id}/show", 'ProprieteController@show');
Route::post("/propriete/recherche",'ProprieteController@recherche')->name('recherche');

Route::get('propriete','ProprieteController@affiche');

Route::get('propriete/create','ProprieteController@create')->middleware('auth');

Route::post('propriete/create','ProprieteController@store')->name("ajouter_propriete")->middleware('auth');

Route::GET('propriete/{id}/edit', 'ProprieteController@edit')->name('edit_propriete');
Route::patch('propriete/{id}/edit', 'ProprieteController@update')->name('update_propriete');
Route::delete('propriete/{id}', 'ProprieteController@destroy');
Route::resource('propriete', 'ProprieteController');
//alerte
// Route::get('alerte','alerteController@affiche');
// Route::get('alerte/create','alerteController@create');

// Route::post('alerte/create','alerteController@store')->name("ajouter_alert");

// Route::GET('alerte/{id}/edit', 'alerteController@edit')->name('edit_alert');
// Route::patch('alerte/{id}/edit', 'alerteController@update')->name('update_alert');
// Route::delete('alerte/{id}', 'alerteController@destroy');
// Route::resource('alerte', 'alerteController');

//type anonce
Route::get('/type','Type_anonceController@affiche');
Route::get('type/create','Type_anonceController@create');
Route::post('type/create','Type_anonceController@store')->name("ajouter_anonce_type");


Route::get('type/{id}/edit','Type_anonceController@edit')->name("editer_anonce_type");

Route::patch('type/{id}/edit', 'Type_anonceController@update')->name('update_type_anonce');

Route::delete('type/{id}', 'Type_anonceController@destroy')->middleware('auth');
Route::resource('type', 'Type_anonceController');

//type_propriete

Route::get('/type_propriete','Type_proprieteController@affiche');
Route::get('type_propriete/create','Type_proprieteController@create');
Route::post('type_propriete/create','Type_proprieteController@store')->name("ajouter_type");


Route::get('type_propriete/{id}/edit','Type_proprieteController@edit')->name("editer_type");

Route::patch('type_propriete/{id}/edit', 'Type_proprieteController@update')->name('update_type');

Route::delete('type_propriete/{id}', 'Type_proprieteController@destroy')->middleware('auth');
Route::resource('type_propriete', 'Type_proprieteController');
Route::get("/propriete/{slug}/show", 'ProprieteController@show');// Auth::routes();


//mail
Route::get('/abonnement/expired', "AbonnementController@expired");
Route::get('/welcome', 'HomeController@index')->name('welcome');
Route::get('/home', 'ProprieteController@deconnect')->name('deconnexion');

///admin
// Route::get('admin.login', 'Admin\LoginController@showLoginForm')->name('login_admin');
// Route::post('admin.login', 'Admin\LoginController@login')->name('login_admin');
// Route::post('admin.logout', 'Admin\LoginController@logout')->name('logout_admin');

// Route::get('/home', 'HomeController@index')->name('home');
Auth::routes(['verify'=>true]);
Route::get('/', 'HomeController@index')->name('home');
//Route::get('/welcome', 'HomeController@index')->name('welcome');

//Auth::routes();


