@extends('master')
@section('contenido')
	<h3>Realiza tu Preinscripción aca: </h3>
	{!! Form::open(["url" => "/guardar_preinscripcion"]) !!}
	<div class="form-group">
	{!! Form::label('dni','Nro de DNI: ') !!}
	{!! Form::text('dni',null,['class' => 'form-control','placeholder'=>'DNI','maxlength' => '8','required' => true]) !!}
	</div>
	<div class="form-group">
	{!! Form::label('nombre','Nombre: ') !!}
	{!! Form::text('nombre',null,['class' => 'form-control','placeholder'=>'NOMBRES','required' => true,'maxlength' => '30']) !!}
	</div>
	<div class="form-group">
	{!! Form::label('apellido','Apellido: ') !!}
	{!! Form::text('apellido',null,['class' => 'form-control','placeholder'=>'APELLIDOS','required' => true,'maxlength' => '30']) !!}
	</div>
	<div class="form-group">
	{!! Form::label('telefono','Telefono/Celular: ') !!}
	{!! Form::text('telefono',null,['class' => 'form-control','placeholder'=>'TELEFONO O CELULAR','required' => true,'maxlength' => '15']) !!}
	</div>
	<div class="form-group">
	{!! Form::label('email','Correo Electronico: ') !!}
	{!! Form::email('email',null,['class' => 'form-control','placeholder'=>'CORREO ELECTRÓNICO','required' => true,'maxlength' => '20']) !!}
	</div>
	<div class="form-group">
	{!! Form::label('curso','Curso: ') !!}
	<select name="curso" id="curso">
		@foreach ($curso as $item)
		<option value="{{$item->nombre}}">{{$item->nombre}}</option>
		@endforeach
	</select>
	</div>
	<div class="form-group">
	{!! Form::label('interes','Interés: ') !!}
	<select name="interes" id="interes">
		@foreach ($interes as $interes)
			<option value="{{$interes}}">{{$interes}}</option>
		@endforeach
	</select>
	</div>
	<div class="form-group">
	{!! Form::submit('Completar Preinscripción',['class' => 'form-control btn btn-warning']) !!}
	</div>
	{!! Form::close() !!}
@stop