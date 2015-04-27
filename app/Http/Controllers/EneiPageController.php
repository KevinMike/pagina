<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Curso;
use App\Preinscripcion;
use App\Post;
use App\Foto;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Pagination\Paginator ;
use Illuminate\Pagination\LengthAwarePaginator;
class EneiPageController extends Controller
{
	public function add_post(request $request)
	{
		$post = new Post;
		$post->titulo = $request->input('titulo');
		//$post->texto = nl2br($request->input('texto'));
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
		$publicaciones = Post::orderBy('id', 'DESC')->paginate(5);
		//dd($publicaciones);
		//$publicaciones =  Post::orderBy('id', 'DESC')->get();
		return view('index',["post" => $publicaciones]);
		//return $publicaciones[2];
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
		$curso = Curso::all();
		return view('cursos',array('curso'=> $curso));
	}
	public function fotos()
	{
		$fotos = Foto::all();

		return view('fotos',array("fotos"=>$fotos));
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
	public function practicas()
	{
		return view('practicas');
	}
	public function add_curso(Request $request)
	{
		$curso = new Curso;
		$curso->nombre = $request->input('nombre');
		$curso->descripcion = $request->input('descripcion');
		$curso->frecuencia = $request->input('frecuencia');
		$curso->horario = $request->input('horario');
		$curso->fecha_inicio = $request->input('fecha_inicio');
		$curso->costo = $request->input('costo');
		$curso->duracion = $request->input('duracion');
		$curso->save();
		return Redirect::to('/home');
	}
}
?>
