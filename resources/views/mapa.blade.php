@extends('master')
@section('cabecera')
	<!-- MAPAS-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDqJ2HTtOoBl9P81kcVaQyfv_dDAwCcxGc&sensor=TRUE" type="text/javascript"></script>
	<script type="text/javascript">
      function initialize() {
        var mapOptions = {
          center: new google.maps.LatLng(-18.0124466, -70.2494081),
          zoom: 20,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById("map_canvas"),
            mapOptions);
      }
    </script>
@endsection
@section('contenido')
  <div class="subtitulo" style=" display: block; width: 100%; border-bottom: 5px solid black;">
      <h2 >Ubicacion de la Escuela Nacional de Estadística e Informática</h2>
  </div>
  <br>
	<div id="map_canvas" style="width:100%; height:500px"></div>
	<br>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d948.5679662211528!2d-70.24937926907425!3d-18.012582451403556!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915acf64fb272bef%3A0xcf6ba61f56564cdb!2sSan+Martin+520%2C+Tacna%2C+Per%C3%BA!5e0!3m2!1ses!2ses!4v1426265136737" width="100%" height="450" frameborder="0" style="border:0"></iframe>
@endsection