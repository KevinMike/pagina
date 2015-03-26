@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Panel de Administración</div>

				<div class="panel-body">
						<h1>INSERTAR NUEVOS POST</h1>
						{!! Form::open(["url" => "/add_post"]) !!}
						<div class="form-group">
							{!! Form::label('titulo','Titulo : ') !!}
							{!! Form::text('titulo',null,['class' => 'form-control','required' => true,"maxlenght" => '80']) !!}
						</div>
						<div class="form-group">
							{!! Form::label('texto','Contenido : ') !!}
							{!! Form::textarea('texto',null,['class' => 'form-control', 'required' => true]) !!}
						</div>
						<div class="form-group">
							{!! Form::submit('Registrar Publicación',['class' => 'form-control btn btn-primary']) !!}
						</div>
						{!! Form::close() !!}
						<h1>ELIMINAR POST</h1>
						{!! Form::open(['url'=>'/delete_post']) !!}
						<div class="form-group">
							{!! Form::label('titulo','Titulo : ') !!}
							<select name="titulo" id="titulo">
								@foreach ($post as $item)
								<option value="{{$item->id}}">{{$item->titulo}} - {{$item->updated_at}}</option>
								@endforeach
							</select>
						</div>
						<div class="form-group">
							{!! Form::submit('Eliminar Publicación',['class' => 'form-control btn btn-warning']) !!}
						</div>
						{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
