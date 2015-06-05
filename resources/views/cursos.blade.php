@extends('master')
@section('cabecera')
<link rel="stylesheet" href="css/curso.css">
@endsection
@section('contenido')
	<div class="subtitulo" style=" display: block; width: 100%; border-bottom: 5px solid black;">
		<h2 >¿Qué Cursos Dictamos?</h2>
	</div>
	<br>
	@foreach($curso as $item)
	<div class="curso">
		<div class="titulo">
			<p id="titulo_curso">{{$item->nombre}}</p>
		</div>
		<div class="contenido_curso">
			<div class="detalles">
				<ul>
					<li><b>Fecha de Inicio: </b>{{$item->fecha_inicio}}</li>
					<li><b>Duracion: </b>{{$item->duracion}}</li>
					<li><b>Frecuencia: </b>{{$item->frecuencia}}</li>
					<li><b>Costo: </b>{{$item->costo}} soles</li>
					<li><b>Horario: </b>{{$item->horario}}</li>
				</ul>
			</div>
			<div class="descripcion">
			{{$item->descripcion}}	
			</div>
		</div>
	</div>
	@endforeach
@endsection