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
use \App\Foto;

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
Route::post('add_curso','EneiPageController@add_curso');
Route::get('practicas','EneiPageController@practicas');
/*Route::group(['prefix' => 'admin', 'namespace' => 'App\Http\Controllers\Pages'], function(){
	Route::resource('Pages','PaginationIndex');
});*/

//Route::resource('Pages','Pages\PaginationIndex')
Route::get("upload", function(){
	return View::make("uploayyd");
});
 
Route::post("upload", function(){
	$file = Input::file("photo");
	$dataUpload = array(
		"descripcion"	=>	Input::get("descripcion"),
		"photo"		=>	$file//campo foto para validar
	);
	
	$rules = array(
        'descripcion'  => 'required|min:2|max:100',
        'photo'     => 'required'
    );
        
    $messages = array(
        'required'  => 'El campo :attribute es obligatorio.',
        'min'       => 'El campo :attribute no puede tener menos de :min carácteres.',
        'email'     => 'El campo :attribute debe ser un email válido.',
        'max'       => 'El campo :attribute no puede tener más de :min carácteres.',
        'unique'    => 'El email ingresado ya está registrado en el blog',
        'confirmed' => 'Los passwords no coinciden'
    );
	
	$validation = Validator::make(Input::all(), $rules, $messages);
         //si la validación falla redirigimos al formulario de registro con los errores
        //y con los campos que nos habia llenado el usuario    
    if ($validation->fails())
    {
        return Redirect::to('uplodad')->withErrors($validation)->withInput();
    }else{
        $user = new Foto(array(
			"descripcion"	=>	Input::get("descripcion"),
			"photo"		=>	Input::file("photo")->getClientOriginalName()//nombre original de la foto
			
		));
        if($user->save()){
        	//guardamos la imagen en public/imgs con el nombre original
        	$file->move("imgs",$file->getClientOriginalName());
			//redirigimos con un mensaje flash
			return Redirect::to('home')->with(array('confirm' => 'Te has registrado correctamente.'));
        } 
    }
});

?>