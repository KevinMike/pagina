	@extends('master')

	@section('cabecera')
	<!--script de facebook FACEBOOK COMMENT PLUGIN-->
	<script type="text/javascript">
			$(document).ready(function() {
				  $.ajaxSetup({ cache: true });
				  $.getScript('//connect.facebook.net/en_US/sdk.js', function(){
					    FB.init({
					      appId      : '1608437069443308',
					      xfbml      : true,
					      version    : 'v2.3'
					    });    
				    $('#loginbutton,#feedbutton').removeAttr('disabled');
				    FB.getLoginStatus(updateStatusCallback);
				  });

				  	var pgwSlider = $('.pgwSlider').pgwSlider({
				    	displayControls : true,
				    	transitionEffect: 'fading',
				    	selectionMode:	'mouveOver',
				    });

				(function(d, s, id) {
				  var js, fjs = d.getElementsByTagName(s)[0];
				  if (d.getElementById(id)) return;
				  js = d.createElement(s); js.id = id;
				  js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.3";
				  fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));
		    
			});
	</script>
	<link rel="stylesheet" href="css/publicacion.css">
	<!-- Slider -->
	<link rel="stylesheet" href="js/jquery-ui-1.11.3/jquery-ui.css">
	<script src="js/jquery-2.1.3.min.js"></script>
	<script src="js/jquery-ui-1.11.3/jquery-ui.js"></script>
	<link rel="stylesheet" href="PgwSlider/pgwslider.css">
	<link rel="stylesheet" href="PgwSlider/pgwslider.min.css">
	<script type="text/javascript" src="PgwSlider/pgwslider.js"></script>
	<script type="text/javascript" src="PgwSlider/pgwslider.min.js"></script>
	<!--<script>
			$(document).ready(function() {
			    var pgwSlider = $('.pgwSlider').pgwSlider({
			    	displayControls : true,
			    	transitionEffect: 'fading',
			    	selectionMode:	'mouveOver',
			    });
			});
	</script>-->
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
	@foreach ($post as $item)
			<div class="publicacion">
					<div class="titulo">
						<h2>{{ $item->titulo }}</h2>
					</div>
					<div class="p_contenido">
						<div class="fecha">
							{{$item->updated_at}}
						</div>
						<div class="texto">
							<!--{!! nl2br(htmlentities($item->texto)) !!}-->
							{!! nl2br($item->texto) !!}
						</div>
						<div class="comentarios">
							<div id="fb-root">
								<div class="fb-comments" data-href="http://localhost:8080/pagina/public/post/{{$item->id}}" data-width="100%" data-numposts="5" data-colorscheme="dark"></div>
							</div>
						</div>
					</div>
			</div>
			<br>
	@endforeach
	<?php echo $post->render(); ?>
@endsection