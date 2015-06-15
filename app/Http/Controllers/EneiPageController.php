<?php namespace Enei\Http\Controllers;

use Enei\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Enei\Curso;
use Enei\Preinscripcion;
use Enei\Post;
use Enei\Foto;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Pagination\Paginator ;
use Illuminate\Pagination\LengthAwarePaginator;
class EneiPageController extends Controller
{
	public function index()
	{
		$publicaciones = Post::orderBy('id', 'DESC')->paginate(4);
		//dd($publicaciones);
		//$publicaciones =  Post::orderBy('id', 'DESC')->get();
		return view('index',["post" => $publicaciones]);
		//return $publicaciones[2];
	}
	public function post($id)
	{
		$publicaciones = Post::find($id);
		return view('post',["item" => $publicaciones]);
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
    public function send()
    {
        # Include the Autoloader (see "Libraries" for install instructions)
     //   require 'vendor/autoload.php';
      //  use Mailgun\Mailgun;
        # Instantiate the client.
        $mgClient = new Mailgun('key-7de903f60728aeed81afc86095eea170');
        $domain = "sandbox1019301e6a3a4d38b800e45829624574.mailgun.org";
        # Make the call to the client.
        $result = $mgClient->sendMessage("$domain",
        array('from'    => 'Mailgun Sandbox <postmaster@sandbox1019301e6a3a4d38b800e45829624574.mailgun.org>',
            'to'      => 'Kevin Mike Herrea Vega <kevin_22894@hotmail.com>',
            'subject' => 'Hello Kevin Mike Herrea Vega',
            'text'    => 'Congratulations Kevin Mike Herrea Vega, you just sent an email with Mailgun!  You are truly awesome!  You can see a record of this email in your logs: https://mailgun.com/cp/log .  You can send up to 300 emails/day from this sandbox server.  Next, you should add your own domain so you can send 10,000 emails/month for free.'));
    }

}
?>
