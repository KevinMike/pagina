@extends('master')
@section('cabecera')
<link rel="stylesheet" href="css/curso.css">
@endsection
@section('contenido')
<h1>Cursos Disponibles</h1>
	@foreach($curso as $item)
	<div class="curso">
		<div class="titulo">
			<p>{{$item->nombre}}</p>
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