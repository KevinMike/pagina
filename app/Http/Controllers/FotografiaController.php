<?php namespace Enei\Http\Controllers;



use Illuminate\Http\Request;
use Enei\Foto;
use Illuminate\Support\Facades\Redirect;
use Enei\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Validation;

class FotografiaController extends Controller {


	public function store(Request $request)
	{
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
	    
	    $validation = \Validator::make(Input::all(), $rules, $messages);
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
	}


	public function destroy(Request $request)
	{
        $id = $request->input('descripcion');
        $foto = Foto::find($id);
        if(unlink(__DIR__."/../../../public/imgs/".$foto->foto))
        {
            $foto->delete();
            return Redirect::to('home');
        }
        else
        {
            abort(404);
        }
	}

}
