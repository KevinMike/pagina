@extends('master')
@section('cabecera')
<link rel="stylesheet" href="{{ asset('css/curso.css') }}">

<script>
    function display(numero){
        $('#contenido_'+numero).toggle();
    }
</script>
@endsection
@section('contenido')
	<div class="subtitulo" style=" display: block; width: 100%; border-bottom: 5px solid black;">
		<h2 >¿Qué Cursos Dictamos?</h2>
	</div>
	<br>
	@foreach($curso as $item)
        <div class="panel panel-primary">
            <div  id="titulo_curso" class="panel-heading">{{$item->nombre}} <input type="button" onclick="display({{$item->id}})" class="extra btn-group " value="Ver mas"/></div>
            <div id="contenido_curso" class="panel-body">
                <div class="row">
                    <div class="detalle col-lg-4 col-md-6 col-sm-12"><h5><b>Detalles </b></h5>
                        <ul>
                            <li><b>Fecha de Inicio: </b>{{ date('d-m-Y', strtotime($item->fecha_inicio)) }}</li>
                            <li><b>Duracion: </b>{{$item->duracion}}</li>
                            <li><b>Frecuencia: </b>{{$item->frecuencia}}</li>
                            <li><b>Costo: </b>{{$item->costo}} soles</li>
                            <li><b>Horario: </b>{{$item->horario}}</li>
                        </ul>
                    </div>
                    <div class="contenido col-lg-8 col-md-6 col-sm-12" id="contenido_{{$item->id}}">
                        <h5><b>Descripción del Curso </b></h5>
                            {!! nl2br($item->descripcion) !!}
                    </div>
                </div>
            </div>
        </div>
	@endforeach
@endsection