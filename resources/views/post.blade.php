@extends('master')

@section('cabecera')
    <link rel="stylesheet" href="css/publicacion.css">
    <!--script de facebook FACEBOOK COMMENT PLUGIN-->
    <script>

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

				(function(d, s, id) {
				  var js, fjs = d.getElementsByTagName(s)[0];
				  if (d.getElementById(id)) return;
				  js = d.createElement(s); js.id = id;
				  js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.3";
				  fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));

			});
            $(window).load(function() {
                $('#preloader').fadeOut('slow');
                $('body').css({'overflow':'visible'});
            });
    </script>

	@stop
	
	@section('contenido')
	<h1>Noticias</h1>
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
							    <div id="preloader" style="    
							    body {
								        overflow: hidden;
								    }
								    #preloader {
								        position: fixed;
								        top:0; left:0;
								        right:0; bottom:0;
								        background: #000;
								        z-index: 100;
								    }
								    #loader {
								        width: 100px;
								        height: 100px;
								        position: absolute;
								        left:50%; top:50%;
								        background: url(../img/loader.gif) no-repeat center 0;
								        margin:-50px 0 0 -50px;
								    }"/>
								      <div id="loader"></div>
							    </div>
							<div id="fb-root">
							</div>
								<div class="fb-comments" data-href="http://192.168.1.97/pagina/public/{{$item->id}}" data-width="100%" data-numposts="5" data-colorscheme="dark"></div>
						</div>
					</div>
			</div>
			<br>
@endsection