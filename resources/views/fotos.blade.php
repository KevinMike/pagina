@extends('master')

@section('cabecera')
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<link rel="stylesheet" type="text/css" href="css/style.css" />
@endsection
@section('contenido')
		<div class="subtitulo" style=" display: block; width: 100%; border-bottom: 5px solid black;">
			<h2 >GALERIA DE FOTOS DINÁMICA</h2>
		</div>
		<br>
		<img class="imagen" src="images/1.jpg" alt="" />
		<img class="imagen" src="images/2.jpg" alt="" />
		<img class="imagen" src="images/3.jpg" alt="" />
		<img class="imagen" src="images/4.jpg" alt="" />
		<img class="imagen" src="images/5.jpg" alt="" />
@endsection