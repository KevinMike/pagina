	@extends('master')
	@section('contenido')
        <div class="subtitulo" style=" display: block; width: 100%; border-bottom: 5px solid black;">
                <h2 >Envianos un mensaje y te responderemos en breve</h2>
        </div>
        <br>
		{!! Form::open(['url' => '/send','method'=>'post','class'=>"form-horizontal", 'role'=>"form" ]) !!}
			<div class="form-group">
				{!! Form::label('email','Correro Electrónico',array('class'=>"col-md-4 control-label")) !!}
				<div class="col-md-6">
					{!! Form::email('email',null,['class' => 'form-control','required' => true]) !!}
				</div>
			</div>
			<div class="form-group">
				{!! Form::label('subject','Asunto',array('class'=>"col-md-4 control-label")) !!}
				<div class="col-md-6">
					{!! Form::text('subject',null, ['class' => 'form-control','required' => true]) !!}
				</div>
			</div>
			<div class="form-group">
				{!! Form::label('body','Mensaje',array('class'=>"col-md-4 control-label")) !!}
				<div class="col-md-6">
					{!! Form::textarea('body',null, ['class' => 'form-control','required' => true]) !!}
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-6 col-md-offset-4">
                    {!! Form::submit('Enviar', ['class' => 'btn btn-success ' ] ) !!}
				</div>
			</div>
		{!! Form::close() !!}

        <!--
        {!! Form::open(['route' => 'send', 'method' => 'post']) !!}
        <div class="form-group">
            {!! Form::label('email', 'E-Mail') !!}
            {!! Form::email('email', null, ['class' => 'form-control','required' => true ]) !!}
        </div>
        <div class="form-group">
            {!! Form::label('subject', 'Asunto') !!}
            {!! Form::text('subject', null, ['class' => 'form-control','required' => true ]) !!}
        </div>
        <div class="form-group">
            {!! Form::label('body', 'Mensaje') !!}
            {!! Form::textarea('body', null, ['class' => 'form-control','required' => true ]) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Enviar', ['class' => 'btn btn-success ' ] ) !!}
        </div>
        {!! Form::close() !!}
-->


	@endsection