@extends('app')
@section('content')
		<div class="container">
			<h1>EDITAR CURSOS</h1>
		    {!!Form::open(array('url' => '/home/update_curso','class'=>"form-horizontal", 'role'=>"form")) !!}
			{!! Form::text('id',$curso->id,['hidden'=>true]) !!}
			<div class="form-group">
				{!! Form::label('nombre','Nombre del Curso',array('class'=>"col-md-4 control-label")) !!}
				<div class="col-md-6">
					{!! Form::text('nombre',$curso->nombre,array('class'=>"form-control",'required'=>true,'maxlength'=>30)) !!}
				</div>
			</div>
			<div class="form-group">
				{!! Form::label('descripcion','Descripción',array('class'=>"col-md-4 control-label")) !!}
				<div class="col-md-6">
					{!! Form::text('descripcion',$curso->descripcion,array('class'=>"form-control",'required'=>true)) !!}
				</div>
			</div>
			<div class="form-group">
				{!! Form::label('frecuencia','Frecuencia',array('class'=>"col-md-4 control-label")) !!}
				<div class="col-md-6">
					{!! Form::text('frecuencia',$curso->frecuencia,array('class'=>"form-control",'required'=>true,'maxlength'=>100)) !!}
				</div>
			</div>
			<div class="form-group">
				{!! Form::label('horario','Hora',array('class'=>"col-md-4 control-label")) !!}
				<div class="col-md-6">
					{!! Form::text('horario',$curso->horario,array('class'=>"form-control",'required'=>true,'maxlength'=>100)) !!}
				</div>
			</div>
			<div class="form-group">
				{!! Form::label('fecha_inicio','Fecha de Inicio',array('class'=>"col-md-4 control-label")) !!}
				<div class="col-md-6">
					{!! Form::text('fecha_inicio',$curso->fecha_inicio,array('class'=>"form-control",'required'=>true)) !!}
				</div>
			</div>
			<div class="form-group">
				{!! Form::label('costo','Costo',array('class'=>"col-md-4 control-label")) !!}
				<div class="col-md-6">
					{!! Form::text('costo',$curso->costo,array('class'=>"form-control",'required'=>true)) !!}
				</div>
			</div>
			<div class="form-group">
				{!! Form::label('duracion','Duración',array('class'=>"col-md-4 control-label")) !!}
				<div class="col-md-6">
					{!! Form::text('duracion',$curso->duracion,array('class'=>"form-control",'required'=>true,'maxlength'=>50)) !!}
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-6 col-md-offset-4">
					{!! Form::submit('Registrar Curso',['class' => 'btn btn-primary']) !!}
				</div>
			</div>
	    {!!Form::close()!!}
	   </div>
@endsection