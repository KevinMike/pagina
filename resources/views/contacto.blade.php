	@extends('master')
	@section('contenido')

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