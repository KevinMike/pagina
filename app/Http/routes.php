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

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('/','EneiPageController@index');
Route::get('contacto','EneiPageController@contacto');
Route::get('mapa','EneiPageController@mapa');
Route::get('cursos','EneiPageController@cursos');
Route::get('fotos','EneiPageController@fotos');
Route::get('informacion','EneiPageController@info');
Route::get('preinscripcion','EneiPageController@preinscripcion');
Route::post('send','EneiPageController@enviar_correo');
Route::post('guardar_preinscripcion','EneiPageController@guardar_preinscripcion');
Route::post('add_post','EneiPageController@add_post');
Route::post('delete_post','EneiPageController@delete_post');
/*Route::group(['prefix' => 'admin', 'namespace' => 'App\Http\Controllers\Pages'], function(){
	Route::resource('Pages','PaginationIndex');
});*/

Route::resource('Pages','Pages\PaginationIndex')

?>