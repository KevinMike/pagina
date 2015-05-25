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
use \Enei\Foto;
//Rutas del Controlador de control
Route::get('home', 'HomeController@index');
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
Route::get('post/{id}','EneiPageController@post');
Route::get('contacto','EneiPageController@contacto');
Route::get('mapa','EneiPageController@mapa');
Route::get('cursos','EneiPageController@cursos');
Route::get('fotos','EneiPageController@fotos');
Route::get('informacion','EneiPageController@info');
Route::get('preinscripcion','EneiPageController@preinscripcion');
Route::post('send','EneiPageController@enviar_correo');
Route::post('guardar_preinscripcion','EneiPageController@guardar_preinscripcion');
Route::post('add_curso','EneiPageController@add_curso');
Route::get('practicas','EneiPageController@practicas');
Route::get("delete", function(){
    return "NO INTENTES HACKER EL SISTEMA XD";
});
 
Route::post("upload", function(){
    $file = Input::file("foto");
    $dataUpload = array(
        "descripcion"   =>  Input::get("descripcion"),
        "foto"     =>  $file//campo foto para validar
    );
    
    $rules = array(
        'descripcion'  => 'required|min:2|max:100',
        'foto'     => 'required'
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
        return Redirect::to('upload')->withErrors($validation)->withInput();
    }
    else
    {
        /*$user = new Foto(array(
            "descripcion"   =>  Input::get("descripcion"),
            //"foto"     =>  Input::file("foto")->getClientOriginalName()//nombre original de la foto
            "foto"     =>  $file->getClientOriginalName()//nombre original de la foto
        ));*/
        $user = new Foto();
        $user->descripcion = Input::get('descripcion');
        $user->foto = $file->getClientOriginalName();
        if($user->save()){
            //guardamos la imagen en public/imgs con el nombre original
            $file->move("imgs",$file->getClientOriginalName());
            //redirigimos con un mensaje flash
            return Redirect::to('home')->with(array('confirm' => 'Te has registrado correctamente.'));
        } 
    }
});
Route::post('eliminar_foto',function(){
    $foto = Foto::find(Input::get('descripcion'));
    unlink(__dir__."/../../public/imgs/".$foto->foto);
    $foto->delete();
    return Redirect::to('home');
});


//Aplicaciones REST
/*Route::group(['prefix' => 'admin', 'namespace' => 'Enei\Http\Controllers\Pages'], function(){
    Route::resource('Pages','PaginationIndex');
});*/

//Route::resource('Pages','Pages\PaginationIndex')


?>