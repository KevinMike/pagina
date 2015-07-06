@extends('master')
@section('cabecera')
    <link rel="stylesheet" href="{{asset('css/publicacion.css')}}">
    <script type="text/javascript">
        $(document).ready(function() {


            (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.3&appId=1608437069443308";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        });
    </script>
@endsection
@section('contenido')
    <h1><b>Noticia</b></h1>
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
                <div id="fb-root"></div>
                <div class="fb-comments" data-href="http://enei.tacna.com/{{ $item->id  }}" data-numposts="5" width="100%"></div>
            </div>
        </div>
    </div>
@endsection