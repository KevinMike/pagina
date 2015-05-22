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
		{!! Form::open(['url' => '/send','class'=>"form-horizontal", 'role'=>"form"]) !!}
			<div class="form-group">
				{!! Form::label('name','Nombre',array('class'=>"col-md-4 control-label")) !!}
				<div class="col-md-6">
					{!! Form::text('name',null,['class' => 'form-control','required' => true]) !!}
				</div>
			</div>
			<div class="form-group">
				{!! Form::label('email','Correo Electronico',array('class'=>"col-md-4 control-label")) !!}
				<div class="col-md-6">
					{!! Form::email('email',null, ['class' => 'form-control','required' => true]) !!} 
				</div>
			</div>
			<div class="form-group">
				{!! Form::label('mensaje','Mensaje',array('class'=>"col-md-4 control-label")) !!}
				<div class="col-md-6">
					{!! Form::textarea('mensaje',null, ['class' => 'form-control','required' => true]) !!} 
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-6 col-md-offset-4">
				{!! Form::submit('Enviar',['class' => 'btn btn-primary']) !!}
				</div>
			</div>
		{!! Form::close() !!}
	@endsection