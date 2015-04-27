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
			Fecha de Inicio: {{$item->fecha_inicio}} <br>
			Duracion: {{$item->duracion}} <br>
			Frecuencia: {{$item->frecuencia}} <br>
			Costo: {{$item->costo}} <br>
			Horario: {{$item->horario}} <br>
			</div>
			<div class="descripcion">
			{{$item->descripcion}}	
			</div>
		</div>
	</div>
	@endforeach
@endsection