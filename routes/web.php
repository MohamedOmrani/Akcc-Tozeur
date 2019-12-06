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

//test function date //
Route::get('/date', 'AddsController@showDate');


Route::get ( '/', function () {
    return view ( 'welcome' );
} );

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

////Presentation///////

Route::get('/Présentation_de_notre_Association', 'presentationController@Présentation_de_notre_Association');
Route::get('/Les_actions_de_notre_Association', 'presentationController@Les_actions_de_notre_Association');
Route::get('/Le_conseil_d_administration', 'presentationController@Le_conseil_d_administration');
Route::get('/Où_sommes_nous', 'presentationController@Où_sommes_nous');
Route::get('/Nous_rejoindre', 'presentationController@Nous_rejoindre');
Route::get('/équipe', 'presentationController@équipe');
Route::get('/accueil', 'presentationController@accueil');
Route::get('/aaa', 'presentationController@aaa');







///conatct///
Route::any('/testMail', 'PagesController@testMail');
Route::any('/contacte', 'PagesController@contact');

// Route::get ( '/contact', function () {
//     return view ( 'Mail.formulaire' );
// } );

//demande inscripte volantaire , liste volantaire//
Route::resource('/adds', 'AddsController');
// Route::post('/search', 'AddsController@search');
Route::post('/search', 'AddsController@action');
 


///Create event , liste event///
Route::resource('/posts', 'PostsController');
//Route::post('/fileStore', 'PostsController@fileStore');
Route::post('/recherche', 'PostsController@recherche');

///Create agendas , liste agendas///
Route::resource('/agendas', 'AgendsController');

Route::resource('/documents', 'DocumentsController');

Route::resource('/presses', 'PressesController');


Route::get('/communique_de_presse/create', 'PressesController@createcommunique_de_presse');
Route::get('/communique_de_presse','PressesController@indexcommunique_de_presse');
Route::post('/storecommunique_de_presse', 'PressesController@storecommunique_de_presse');

Route::get('/medias/create', 'PressesController@createmedias');
Route::get('/medias','PressesController@indexmedias');
Route::post('/storemedias', 'PressesController@storemedias');

Route::get('/tab1', 'PressesController@getTab1');
Route::get('/tab2', 'PressesController@getTab2');
Route::get('/tab3', 'PressesController@getTab3');




Route::resource('/uploads', 'ImageUploadController');
