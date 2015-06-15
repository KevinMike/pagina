@extends('app')

@section('content')
  <!--Agregar enlaces a las publicaciones-->
	<script>
		  $(function() {
		    $( "#datepicker" ).datepicker();
		  });
	/*	function agregar_enlace () {
			var link = document.getElementById("link").value;
			var nombre = document.getElementById("nombre").value;
			var cadena = "<a target='_blank' href='"+ link +"'>"+nombre+"</a>";
			document.getElementById("texto").value = document.getElementById("texto").value + cadena;
		}*/
	</script>
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Panel de Administración</div>

				<div class="panel-body">

						<h1>PUBLICACIONES</h1>

                    <script>
                        $(function() {
                            $( "#datepicker" ).datepicker();
                        });
                    </script>
                    <p>Date: <input type="text" id="datepicker"></p>

                    <h3>Insertar enlaces en los post</h3>
						<form class="form-horizontal" role="form" >
				        	<div class="form-group">
					            <label class="col-md-4 control-label" for="link">Enlace: </label>
					            <div class="col-md-6">
					            	<input class="form-control" type="text" id="link">
					            </div>
			            	</div>

			           		<div class="form-group">
			           			<label class="col-md-4 control-label" for="nombre">Nombre del Enlace: </label>
			                	<div class="col-md-6">
			                    	<input class="form-control" type="text" id = "nombre"/>
			                    </div>
			                </div>

		                    <div class="form-group">
			                    <div class="col-md-6 col-md-offset-4">
									<input class="btn btn-primary" type="button" onClick="agregar_enlace()" value="Agregar">
			                    </div>
			                </div>
			            </form>

						<h3>Registrar Publicaciones</h3>

						{!! Form::open(["url" => "/home/add_post",'class'=>"form-horizontal", 'role'=>"form"]) !!}
							<div class="form-group">
								{!! Form::label('titulo','Titulo',array('class'=>"col-md-4 control-label")) !!}
								<div class="col-md-6">
								{!! Form::text('titulo',null,['class' => 'form-control','required' => true,"maxlenght" => '80','id' => 'titulo']) !!}
								</div>
							</div>
							<div class="form-group">
								{!! Form::label('texto','Contenido',array('class'=>"col-md-4 control-label")) !!}
								<div class="col-md-6">
								{!! Form::textarea('texto',null,['class' => 'form-control', 'required' => true, 'id'=>'texto']) !!}
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-6 col-md-offset-4">
								{!! Form::submit('Registrar Publicación',['class' => 'btn btn-primary']) !!}
								</div>
							</div>
						{!! Form::close() !!}

						<h3>Editar o Eliminar publicaciones</h3>
						{!! Form::open(array('class'=>"form-horizontal", 'role'=>"form")) !!}
						<div class="form-group">
							{!! Form::label('post','Titulo',array('class'=>"col-md-4 control-label")) !!}
							<div class="col-md-6">
								<select name="post" id="post" class="form-control">
								@foreach ($post as $item)
									<option value="{{$item->id}}">{{$item->titulo}} - {{$item->updated_at}}</option>
								@endforeach
								</select>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								{!! Form::submit('Actualizar',array("onClick" => "this.form.action = 'home/update2'",'class' => 'btn btn-success')) !!}
								{!! Form::submit('Eliminar',array("onClick" => "this.form.action = 'home/delete_post'",'class' => 'btn btn-danger')) !!}
							</div>
						</div>
						{!! Form::close() !!}

					    <h1>CURSOS</h1>
					    <h3>Registrar Cursos</h3>
					    {!!Form::open(array('url' => 'add_curso','class'=>"form-horizontal", 'role'=>"form")) !!}
							<div class="form-group">
								{!! Form::label('nombre','Nombre del Curso',array('class'=>"col-md-4 control-label")) !!}
								<div class="col-md-6">
									{!! Form::text('nombre',null,array('class'=>"form-control","maxlenght" => '30','required'=>true)) !!}
								</div>
							</div>
							<div class="form-group">
								{!! Form::label('descripcion','Descripción',array('class'=>"col-md-4 control-label")) !!}
								<div class="col-md-6">
									{!! Form::text('descripcion',null,array('class'=>"form-control",)) !!}
								</div>
							</div>
							<div class="form-group">
								{!! Form::label('frecuencia','Frecuencia',array('class'=>"col-md-4 control-label")) !!}
								<div class="col-md-6">
									{!! Form::text('frecuencia',null,array('class'=>"form-control","maxlenght" => '100','required'=>true)) !!}
								</div>
							</div>
							<div class="form-group">
								{!! Form::label('horario','Hora',array('class'=>"col-md-4 control-label")) !!}
								<div class="col-md-6">
									{!! Form::text('horario',null,array('class'=>"form-control","maxlenght" => '100','required'=>true)) !!}
								</div>
							</div>
							<div class="form-group">
								{!! Form::label('fecha_inicio','Fecha de Inicio',array('class'=>"col-md-4 control-label")) !!}
								<div class="col-md-6">
									{!! Form::text('fecha_inicio',null,array('class'=>"form-control",'required'=>true,'id'=>"datepicker")) !!}
								</div>
							</div>
							<div class="form-group">
								{!! Form::label('costo','Costo',array('class'=>"col-md-4 control-label")) !!}
								<div class="col-md-6">
									{!! Form::text('costo',null,array('class'=>"form-control",'required'=>true)) !!}
								</div>
							</div>
							<div class="form-group">
								{!! Form::label('duracion','Duración',array('class'=>"col-md-4 control-label")) !!}
								<div class="col-md-6">
									{!! Form::text('duracion',null,array('class'=>"form-control","maxlenght" => '50','required'=>true)) !!}
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-6 col-md-offset-4">
									{!! Form::submit('Registrar Curso',['class' => 'btn btn-primary']) !!}
								</div>
							</div>
					    {!!Form::close()!!}

					    <h3>Editar y Eliminar Cursos</h3>
						{!! Form::open(array('class'=>"form-horizontal", 'role'=>"form")) !!}
							<div class="form-group">
								{!! Form::label('curso','Curso',array('class'=>"col-md-4 control-label")) !!}
								<div class="col-md-6">
									<select name="curso" id="curso" class="form-control">
										@foreach($curso as $item)
											<option value="{{$item->id}}">{{$item->nombre}}</option>
										@endforeach
									</select>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-6 col-md-offset-4">
									{!! Form::submit('Actualizar', array("onClick" => "this.form.action = 'home/update'",'class' => 'btn btn-success')) !!}
									{!! Form::submit('Eliminar', array("onClick" => "this.form.action = 'home/delete_curso'",'class' => 'btn btn-danger')) !!}
								</div>
							</div>
						{!! Form::close() !!}

						<h1>GALERIA DE FOTOS</h1>
					   <h3>Subir fotos</h3>

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
						        
	                    {!! Form::open(array('url' => 'upload', 'class'=>"form-horizontal", 'role'=>"form", 'files' => true)) !!}
			                <div class="form-group">
				                {!! Form::label('descripcion', 'Descripción',array('class'=>"col-md-4 control-label")) !!}
				                <div class="col-md-6">
				                {!! Form::text('descripcion', null,array('class'=>"form-control",'required'=>true,'maxlenght'=>50)) !!}
				            	</div>
			            	</div>
			                <div class="form-group">
				                {!! Form::label('foto', 'Foto',array('class'=>"col-md-4 control-label")) !!}
					            <div class="col-md-6">
					            	{!! Form::file('foto',array('required'=>true,'maxlenght'=>100)) !!}
					            </div>
				        	</div>
				        	<div class="form-group">
								<div class="col-md-6 col-md-offset-4">
									{!! Form::submit('Subir', array("class" => "btn btn-primary")) !!}
								</div>
							</div>
		                {!! Form::close() !!}
						
			           	<h3>Eliminar Fotos</h3>	
			           	{!! Form::open(array('url' => 'eliminar_foto', 'class'=>"form-horizontal", 'role'=>"form", 'files' => true)) !!}
			              	<div class="form-group">
								{!! Form::label('descripcion','Descripción',array('class'=>"col-md-4 control-label")) !!}
								<div class="col-md-6">
									<select name="descripcion" class="form-control">
										@foreach($foto as $item)
											<option value="{{$item->id}}">{{$item->descripcion}}</option>
										@endforeach
									</select>
								</div>
							</div>
				        	<div class="form-group">
								<div class="col-md-6 col-md-offset-4">
									{!! Form::submit('Eliminar', array("class" => "btn btn-danger")) !!}
								</div>
							</div>
		                {!! Form::close() !!}


				</div>
			</div>
		</div>
	</div>
</div>
@endsection

