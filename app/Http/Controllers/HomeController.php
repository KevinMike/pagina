<?php namespace Enei\Http\Controllers;
use Enei\Post;
use Enei\Curso;
use Enei\Foto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
    //Muestra la pagina de inicio del Panel de Control
	public function index()
	{
		$post = Post::orderBy('id', 'DESC')->get();
		$foto = Foto::orderBy('id','DESC')->get();
		$curso = Curso::all();
		return view('home',['post'=>$post,'curso'=>$curso,'foto'=>$foto]);
	}


    //CURSOS

    public function add_curso(Request $request)
    {
        $var = $request->input('fecha_inicio');
        //$date = str_replace('/', '-', $var); remplaza los / por -
        $date =  date('Y-m-d', strtotime($var));
        $curso = new Curso;
        $curso->nombre = $request->input('nombre');
        $curso->descripcion = $request->input('descripcion');
        $curso->frecuencia = $request->input('frecuencia');
        $curso->horario = $request->input('horario');
        $curso->fecha_inicio = $date;
        $curso->costo = $request->input('costo');
        $curso->duracion = $request->input('duracion');
        $curso->save();
        return Redirect::to('/home');
    }
            //Muestra el formulario de edición
	public function r_update_curso(Request $request)
	{
		$curso = Curso::find($request->input('curso'));
		return view('update_curso',array('curso'=>$curso));
	}
	public function update_curso(Request $request)
	{
		$curso = Curso::find($request->input('id'));
        $var = $request->input('fecha_inicio');
        //$date = str_replace('/', '-', $var); remplaza los / por -
        $date =  date('Y-m-d', strtotime($var));
		$curso->nombre = $request->input('nombre');
		$curso->descripcion = $request->input('descripcion');
		$curso->frecuencia = $request->input('frecuencia');
		$curso->horario = $request->input('horario');
		$curso->fecha_inicio = $date;
		$curso->costo = $request->input('costo');
		$curso->duracion = $request->input('duracion');
		$curso->save();
		return Redirect::to('/home');
	}
	public function delete_curso(Request $request)
	{
		$id = $request->input('curso');
		Curso::find($id)->delete();
		return Redirect::to('/home');
	}


    //PUBLICACIONES
	public function add_post(Request $request)
	{
		$post = new Post;
		$post->titulo = $request->input('titulo');
		//$post->texto = nl2br($request->input('texto'));
		$post->texto = $request->input('texto');
		$post->save();
		return Redirect::to('/home');
	}
	public function delete_post(Request $request)
	{
		$id = $request->input('post');
		Post::find($id)->delete();
		return Redirect::to('/home');
	}
            //Muestra el formulario de edicion
	public function r_update_post(Request $request)
	{
		$post = Post::find($request->input('post'));
		return view('update_post',['post'=>$post]);
	}
	public function update_post(Request $request)
	{
		$post = Post::find($request->input('id'));
		$post->titulo = $request->input('titulo');
		$post->texto = $request->input('texto');
		$post->save();
		return Redirect::to('/home');
	}
}
