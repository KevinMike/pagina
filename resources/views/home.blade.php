@extends('app')

@section('content')
  <!--Agregar enlaces a las publicaciones-->
	<script type="text/javascript">
		function agregar_enlace () {
			var link = document.getElementById("link").value;
			var nombre = document.getElementById("nombre").value;
			var cadena = "<a target='_blank' href='"+ link +"'>"+nombre+"</a>";
			document.getElementById("texto").value = document.getElementById("texto").value + cadena;
		}
	</script>
	<!-- JQUERY-->
	<script src="js/jquery-2.1.3.min.js"></script>
	<script src="js/jquery-ui-1.11.3/jquery-ui.js"></script>
	<link rel="stylesheet" href="js/jquery-ui-1.11.3/jquery-ui.css">
	<script>
		$( document ).ready(function() {
			alert('hola');
	    	$( "#datepicker" ).datepicker();
			alert('hola1');
		});
	</script>
  <!--FINJQUERY-->
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Panel de Administración</div>

				<div class="panel-body">
						<h1>INSERTAR NUEVOS POST</h1>
						Insertar un Link <br>
						<label for="link">Enlace: </label>
						<input type="text" id="link">
						<label for="nombre">Nombre del Enlace: </label>
						<input type="text" id = "nombre"/>
						<input type="button" onClick="agregar_enlace()" value="Agregar">
						{!! Form::open(["url" => "/add_post"]) !!}
						<div class="form-group">
							{!! Form::label('titulo','Titulo : ') !!}
							{!! Form::text('titulo',null,['class' => 'form-control','required' => true,"maxlenght" => '80','id' => 'titulo']) !!}
						</div>
						<div class="form-group">
							{!! Form::label('texto','Contenido : ') !!}
							{!! Form::textarea('texto',null,['class' => 'form-control', 'required' => true, 'id'=>'texto']) !!}
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

						<h1>SUBIR FOTOS</h1>
					   <div class="row"> 
						        @if($errors->has())
						            <div class="alert-box alert">           
						                <!--recorremos los errores en un loop y los mostramos-->
						                @foreach ($errors->all('<p>:message</p>') as $message)
						                    {{ $message }}
						                @endforeach
						                 
						            </div>
						        @endif
						        
						        @if(Session::has('confirm'))
						            <div class="alert-box success round">
						                {{ Session::get('confirm') }}
						            </div>                    
						        @endif
					        	<div class="form">
					              
					                {!! Form::open(array('url' => 'upload', 'files' => true)) !!}
						                {!! Form::label('descripcion', 'Descripción') !!}
						                {!! Form::text('descripcion', Input::old('descripcion')) !!}
						                <br>
						                {!! Form::label('photo', 'Foto') !!}
							            {!! Form::file('photo') !!}
						                <br />
						                {!! Form::submit('Regístrarme', array("class" => "button expand round")) !!}
					                {!! Form::close() !!}
					 
					            </div>    
					             
					    </div>
					    <input type="text" id="datepicker">
					    <h1>Agregar Nuevos Cursos</h1>
					    {!!Form::open(array('url' => 'add_curso')) !!}
							{!! Form::label('nombre','Nombre del Curso') !!}
							{!! Form::text('nombre',null) !!}
							<br>
							{!! Form::label('descripcion','Descripción') !!}
							{!! Form::text('descripcion',null) !!}
							<br>
							{!! Form::label('frecuencia','Frecuencia') !!}
							{!! Form::text('frecuencia',null) !!}
							<br>
							{!! Form::label('horario','Hora') !!}
							{!! Form::text('horario',null) !!}
							<br>
							{!! Form::label('fecha_inicio','Fecha de Inicio') !!}
							{!! Form::text('fecha_inicio',null,['id'=>'datepicker']) !!}
							<br>
							{!! Form::label('costo','Costo') !!}
							{!! Form::text('costo',null) !!}
							<br>
							{!! Form::label('duracion','Duración') !!}
							{!! Form::text('duracion',null) !!}
							<br>
							{!! Form::submit('Agregar',['class' => 'form-control btn btn-warning']) !!}
					    {!!Form::close()!!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
