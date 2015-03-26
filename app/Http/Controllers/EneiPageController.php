<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Curso;
use App\Preinscripcion;
use App\Post;
use Illuminate\Support\Facades\Redirect;
class EneiPageController extends Controller
{
	public function add_post(request $request)
	{
		$post = new Post;
		$post->titulo = $request->input('titulo');
		$post->texto = $request->input('texto');
		$post->save();
		return Redirect::to('/home');
	}
	public function delete_post(request $request)
	{
		$id = $request->input('titulo');
		Post::find($id)->delete();
		return Redirect::to('/home');
	}
	public function index()
	{
		$publicaciones = Post::all();
		return view('index',["post" => $publicaciones]);
		//return $publicaciones;
	}
	public function contacto()
	{
		return view('contacto');
	}
	public function mapa()
	{
		return view('mapa');
	}
	public function cursos()
	{
		return view('cursos');
	}
	public function fotos()
	{
		return view('fotos');
	}
	public function info()
	{
		return view('info');
	}
	public function preinscripcion(){
		$interes = ['Bajo',	'Medio','Alto'];
		$cursos = Curso::all();
		return view('preinscripcion',array("curso" => $cursos, "interes" => $interes) );
		//return $cursos;
	}
	public function enviar_correo(Request $request)
	{
		$nombre = $request->input('name');
		$email = $request->input('email|');
		$mensaje = $request->input('mensaje');
		$to = "kevin_22894@hotmail.com";
		$subject = "Mensaje desde la pagina web";
		$headers = "From: ".$email;
		$result = mail($to,$subject,$mensaje,$headers);
		if($result)
		{
			//abort(404);
			return view('contacto');			
		}
		else
		{
			abort(404);
		}
	}
	public function guardar_preinscripcion(Request $request)
	{
		$preinscripcion = new Preinscripcion;
		$preinscripcion->dni = $request->input('dni');
		$preinscripcion->nombre = $request->input('nombre');
		$preinscripcion->apellido = $request->input('apellido');
		$preinscripcion->telefono = $request->input('telefono');
		$preinscripcion->email = $request->input('email');
		$preinscripcion->curso = $request->input('curso');
		$preinscripcion->interes = $request->input('interes');
		$preinscripcion->save();
		return Redirect::to('/');
	}
}
?>