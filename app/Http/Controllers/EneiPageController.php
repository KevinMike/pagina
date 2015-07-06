<?php namespace Enei\Http\Controllers;

use Facebook\FacebookSession;
use Illuminate\Http\Request;
use Enei\Curso;
use Enei\Preinscripcion;
use Enei\Post;
use Enei\Foto;
use Illuminate\Support\Facades\Redirect;


class EneiPageController extends Controller
{

    public function index()
	{
        /*define('FACEBOOK_SDK_V4_SRC_DIR','/path/to/fb-php-sdk-v4/src/Facebook/');
        //require __DIR__.'/path/to/facebook-php-sdk-v4/autoload.php';
        dump(FACEBOOK_SDK_V4_SRC_DIR);
        dump(PATH_SEPARATOR);

        FacebookSession::setDefaultApplication('1608437069443308', '4c40575892d0e50e32df293bcfeb8adf');*/
        $publicaciones = Post::orderBy('id', 'DESC')->paginate(4);
		return view('index',["post" => $publicaciones]);
	}
	public function posts($id)
	{
		$publicaciones = Post::find($id);
        if($publicaciones)
        {
            return view('posts',["item" => $publicaciones]);
        }
        else
        {
            abort(404);
        }
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
		$curso = Curso::orderBy('fecha_inicio', 'ASC')->get();
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
	



}
?>
