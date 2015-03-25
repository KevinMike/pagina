	@extends('master')

	@section('contenido')
		<h3>Envianos tu mensaje y en breve te responderemos.</h3>
		<!--<form method="get" action="{{ url('/send') }}"><br/>
		<input type="hidden" name="_token" value="<?php //echo csrf_token(); ?>">
		<label for="nombre">Nombre: </label><br>
		<input type="text" name="nombre" id="nombre" required><br/>
		<label for="email">Email: </label><br>
		<input type="text" name="email" id="email" required><br/>
		<label for="opinion">Mensaje: </label><br />
		<textarea id="opinion" name="opinion" style="width: 100%; height: 200px" required></textarea><br/>
		<input type="submit" name="Submit" value="Enviar"><br>
		</form>-->
		{!! Form::open(['url' => '/send']) !!}
			<div class="form-group">
			{!! Form::label('name','Nombre : ') !!}
			{!! Form::text('name',null,['class' => 'form-control']) !!}
			</div>
			<div class="form-group">
			{!! Form::label('email','Correo Electronico : ') !!}
			{!! Form::email('email',null, ['class' => 'form-control']) !!} 
			</div>
			<div class="form-group">
			{!! Form::label('mensaje','Mensaje : ') !!}
			{!! Form::textarea('mensaje',null, ['class' => 'form-control']) !!} 
			</div>
			<div class="form-group">
			{!! Form::submit('Enviar',['class' => 'btn btn-primary form-control'])!!}
			</div>
		{!! Form::close() !!}
	@endsection