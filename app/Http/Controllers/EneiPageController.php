<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EneiPageController extends Controller
{
	public function index()
	{
		return view('index');
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
			return $result;			
		}
		else
		{
			return "la cagaste macho-";
		}

	}
}

?>