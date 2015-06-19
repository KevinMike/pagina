@extends('master')
@section('contenido')
	<h3>Realiza tu Preinscripción aca: </h3>
	{!! Form::open(["url" => "/guardar_preinscripcion",'class'=>"form-horizontal", 'role'=>"form"]) !!}
	<div class="form-group">
		{!! Form::label('dni','Nro de DNI',array('class'=>"col-md-4 control-label")) !!}
		<div class="col-md-6">
			{!! Form::text('dni',null,['class' => 'form-control','placeholder'=>'DNI','maxlength' => '8','required' => true]) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('nombre','Nombre',array('class'=>"col-md-4 control-label")) !!}
		<div class="col-md-6">
			{!! Form::text('nombre',null,['class' => 'form-control','placeholder'=>'NOMBRES','required' => true,'maxlength' => '30']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('apellido','Apellido',array('class'=>"col-md-4 control-label")) !!}
		<div class="col-md-6">
			{!! Form::text('apellido',null,['class' => 'form-control','placeholder'=>'APELLIDOS','required' => true,'maxlength' => '30']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('telefono','Telefono/Celular',array('class'=>"col-md-4 control-label")) !!}
		<div class="col-md-6">
			{!! Form::text('telefono',null,['class' => 'form-control','placeholder'=>'TELEFONO O CELULAR','required' => true,'maxlength' => '15']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('email','Correo Electronico',array('class'=>"col-md-4 control-label")) !!}
		<div class="col-md-6">
		{!! Form::email('email',null,['class' => 'form-control','placeholder'=>'CORREO ELECTRÓNICO','required' => true,'maxlength' => '20']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('curso','Curso',array('class'=>"col-md-4 control-label")) !!}
		<div class="col-md-6">
		<select name="curso" id="curso" class="form-control">
			@foreach ($curso as $item)
			<option value="{{$item->id}}">{{$item->nombre}}</option>
			@endforeach
		</select>
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('interes','Interés',array('class'=>"col-md-4 control-label")) !!}
		<div class="col-md-6">
			<select name="interes" id="interes" class="form-control">
				@foreach ($interes as $interes)
					<option value="{{$interes}}">{{$interes}}</option>
				@endforeach
			</select>
		</div>
	</div>
	<div class="form-group">
		<div class="col-md-6 col-md-offset-4">
			{!! Form::submit('Completar Preinscripción',['class' => 'btn btn-primary']) !!}
		</div>
	</div>
	{!! Form::close() !!}
@stop