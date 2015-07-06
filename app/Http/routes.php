<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


//Route::get('/', 'WelcomeController@index');

//Rutas del controlador de correo electronico
Route::post('send', ['as' => 'send', 'uses' => 'MailController@send'] );
Route::get('contacto', ['as' => 'contact', 'uses' => 'MailController@index'] );


//Rutas del Controlador de control
Route::get('home', 'HomeController@index');
Route::post('home/add_curso','HomeController@add_curso');
Route::post('home/update_curso','HomeController@update_curso');
Route::post('home/update','HomeController@r_update_curso');
Route::post('home/delete_curso','HomeController@delete_curso');
Route::post('home/add_post','HomeController@add_post');
Route::post('home/delete_post','HomeController@delete_post');
Route::post('home/update2','HomeController@r_update_post');
Route::post('home/update_post','HomeController@update_post');

//Rutas del Controlador de autentificacion
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

//Rutas de la pagina web
Route::get('/','EneiPageController@index');
Route::get('posts/{id}','EneiPageController@posts');
Route::get('mapa','EneiPageController@mapa');
Route::get('cursos','EneiPageController@cursos');
Route::get('fotos','EneiPageController@fotos');
Route::get('informacion','EneiPageController@info');
Route::get('preinscripcion','EneiPageController@preinscripcion');
Route::get('practicas','EneiPageController@practicas');
Route::post('guardar_preinscripcion','EneiPageController@guardar_preinscripcion');
Route::post('foto/guardar','FotografiaController@store');
Route::post('foto/eliminar','FotografiaController@destroy');


?>