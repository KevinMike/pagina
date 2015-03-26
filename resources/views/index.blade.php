	@extends('master')

	@section('cabecera')
	<?php echo '<script type="text/javascript">var publicacion = new Array();</script>'; ?>
	<link rel="stylesheet" href="css/publicacion.css">
	<!-- Slider -->
	<link rel="stylesheet" href="js/jquery-ui-1.11.3/jquery-ui.css">
	<script src="js/jquery-2.1.3.min.js"></script>
	<script src="js/jquery-ui-1.11.3/jquery-ui.js"></script>
	<link rel="stylesheet" href="PgwSlider/pgwslider.css">
	<link rel="stylesheet" href="PgwSlider/pgwslider.min.css">
	<script type="text/javascript" src="PgwSlider/pgwslider.js"></script>
	<script type="text/javascript" src="PgwSlider/pgwslider.min.js"></script>
	<script>
			$(document).ready(function() {
			    var pgwSlider = $('.pgwSlider').pgwSlider({
			    	displayControls : true,
			    	transitionEffect: 'fading',
			    	selectionMode:	'mouveOver',
			    });
			});
	</script>
	<!-- FinSlide-->

	@stop
	
	@section('contenido')
		<div class="slider">
	<ul class="pgwSlider">
	    <li><img src="img/1.jpg" alt="Paris, France" data-description="Eiffel Tower and Champ de Mars"></li>
	    <li><img src="img/2.jpg" alt="Montréal, QC, Canada" data-large-src="img/2.jpg"></li>
	    <li><img src="img/3.jpg"><span>Shanghai, China</span></li>
	    <li><a href="http://www.nyc.gov" target="_blank"><img src="img/4.jpg"><span>New York, NY, USA</span></a></li>
	</ul>
	</div>

	<h1>Noticias</h1>
	<span>Total de Noticias: {{count($post)}}</span> 
	@foreach ($post as $item)
			<!--<div class="publicacion">
					<div class="titulo">
						<h2>{{ $item->titulo }}</h2>
					</div>
					<div class="p_contenido">
						<div class="fecha">
							{{$item->updated_at}}
						</div>
						<div class="texto">
							<p>{{$item->texto}}</p>
						</div>
						<div class="comentarios">
							Caja de Comentarios de Facebook
						</div>
					</div>
			</div>
			<br>-->
		<script type="text/javascript"> 
			publicacion.push('<div class="publicacion"><div class="titulo"><h2>{{$item->titulo}}</h2></div><div class="p_contenido"><div class="fecha">{{$item->updated_at}}</div><div class="texto"><p>{{$item->texto}}</p></div><div class="comentarios">Caja de Comentarios de Facebook</div></div></div><br>');
		</script>
	@endforeach
	<script type="text/javascript">
		for (var i = 0 ; i<= 3; i++) {
			document.write(publicacion[i]);
		};
		//document.write(publicacion);
	</script>
@endsection