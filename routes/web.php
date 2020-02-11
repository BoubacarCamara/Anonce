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



//propriete
Route::get("/propriete/{id}/show", 'ProprieteController@show');
Route::post("/propriete/recherche",'ProprieteController@recherche')->name('recherche');
Route::post("/propriete/anonce1",'ProprieteController@mesanonce');

Route::get('propriete','ProprieteController@affiche');

Route::get('propriete/create','ProprieteController@create')->middleware('auth');

Route::post('propriete/create','ProprieteController@store')->name("ajouter_propriete")->middleware('auth');

Route::GET('propriete/{id}/edit', 'ProprieteController@edit')->name('edit_propriete');
Route::patch('propriete/{id}/edit', 'ProprieteController@update')->name('update_propriete');
Route::delete('propriete/{id}', 'ProprieteController@destroy');
Route::resource('propriete', 'ProprieteController');


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

// Route::get('/test-contact', function () {
//   return new App\Mail\Contact([
//     'nom' => 'Durand',
//     'email' => 'durand@chezlui.com',
//     'message' => 'Je voulais vous dire que votre site est magnifique !'
//     ]);
// });
// Route::get('/mail', function () {
//   //return view('/test-contact');
//     $to_name="Camara";
//     $to_email="bouba.camara.contact@gmail.com";
//     $data=array("name"=>"Boubacar CAMARA","body"=>"Nous sommes entrainde tester votre envoie de mail");
//     Mail::send('mail',$data,function($message) use ($to_name,$to_email){
//       $message->to($to_email)
//       ->subject('Monanonce.com');
//     });
//   echo "email bien recu";
// });
//Route::get('/email', 'ContactController@contact');
Route::get('email/create', 'ContactController@create');
Route::POST('email/create', 'ContactController@store')->name('ajouter_message');


///envoie de mail par un client 
Route::get('/sendemail', 'SendEmailController@index');
Route::post('/sendemail/send', 'SendEmailController@send');
//
//utilisateur
Route::get('users/affiche', 'ProprieteController@afficheuser');

Route::GET('users/{id}/edit', 'ProprieteController@edituser')->name('edit_users');
Route::patch('users/{id}/edit', 'ProprieteController@update1')->name('update_users');
Route::delete('users/{id}', 'ProprieteController@destroyuser')->middleware('auth');

Auth::routes(['verify'=>true]);
Route::get('/', 'HomeController@index')->name('home');
//Route::get('/welcome', 'HomeController@index')->name('welcome');

//Auth::routes();


