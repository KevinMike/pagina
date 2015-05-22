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
			<bold>Fecha de Inicio: </bold>
			<br>{{$item->fecha_inicio}} <br>
			Duracion: 
			<br>{{$item->duracion}} <br>
			Frecuencia: <br>{{$item->frecuencia}}<br>
			Costo: 
			<br>{{$item->costo}} soles<br>
			Horario: 
			<br>{{$item->horario}} <br>
			</div>
			<div class="descripcion">
			{{$item->descripcion}}	
			</div>
		</div>
	</div>
	@endforeach
@endsection