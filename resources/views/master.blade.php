<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="witdh=device-width, intial-scale=1, maximun-scale=1">
	<title>ENEI: Escuela del Instituto Nacional de Ingeniería en Informática y Sistemas</title>
	
	<!-- JQUERY-->
	<script src="js/jquery-2.1.3.min.js"></script>
	<script src="js/jquery-ui-1.11.3/jquery-ui.js"></script>
	<link rel="stylesheet" href="js/jquery-ui-1.11.3/jquery-ui.css">
	<!-- FIN JQUERY -->
	
	<!-- BOOTSTRAP -->
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.min.css">
	<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<!-- FIN BOOTSTRAP --> 

	<link rel="stylesheet" href="css/index.css">
	<link rel="stylesheet" href="css/normalize.css">
	<!--<link rel="stylesheet" href="css/app.css">-->
	@yield('cabecera')

</head>
<body onload="initialize()">
	<header>
			<div class="container">
					<!--<img class="col-lg-2 col-md-6 " id="img2" src="img/inei.jpg" alt="" height="100px">-->
					<div class="titulo">
						<p id="p1">ESCUELA NACIONAL DE ESTADÍSTICA E INFORMÁTICA</p>
						<p id="p2">Sede Tacna</p>
					</div>
					<!--<img class="col-lg-1 col-md-6 " id="img1"src="img/logo.jpg" alt="" height="100px">-->
					<div class="logo" >
						<img id="img1" src="img/inei.jpg" alt="" height="100px">
						<img id="img2"src="img/logo.jpg" alt="" height="100px">
					</div>
			</div>
	</header>

	<nav class="navbar navbar-inverse navbar-fixed-top">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="{{ url('/') }}" id="inicio">ENEI - Tacna</a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="items nav navbar-nav ">
				<!--<li class="active"><a href="{{ url('/') }}" id="inicio">Inicio</a></li>-->
                <li><a href="{{ url('/') }}" id="inicio">Inicio</a></li>
				<li><a href="{{ url('/informacion') }}" id="quienes_somos">Quienes Somos</a></li>
				<li><a href="{{ url('/cursos') }}" id ="cursos">Cursos</a></li>
				<li><a href="{{ url('/fotos') }}" id="fotos">Fotos</a></li>
				<li><a href="{{ url('/contacto')}}" id="contactanos">Contáctanos</a></li>
				<li><a target="_blank" href="http://localhost/moodle" id="aula_virtual">Aula Virtual</a></li>
				<li><a href="{{ url('/mapa') }}" id="mapa">Mapa</a></li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>

	<!--<nav class="">
			<ul class="">
				<li class=""><a href="{{ url('/') }}" id="inicio">Inicio</a></li>
				<li><a href="{{ url('/informacion') }}" id="quienes_somos">Quienes Somos</a></li>
				<li><a href="{{ url('/cursos') }}" id ="cursos">Cursos</a></li>
				<li><a href="{{ url('/fotos') }}" id="fotos">Fotos</a></li>
				<li><a href="{{ url('/contacto')}}" id="contactanos">Contáctanos</a></li>
				<li><a target="_blank" href="http://localhost/moodle" id="aula_virtual">Aula Virtual</a></li>
				<li><a href="{{ url('/mapa') }}" id="mapa">Mapa</a></li>
			</ul>
	</nav>-->
	<div class="separador"> </div>
	<section>
	<!--<div class="container">-->
		<article id="principal" >
			@yield('contenido')
		</article>
		<aside>
			<div class="subsection1">
				<div class="cabecera">
					<p>Otros Enlaces</p>
				</div>
				<div class="contenedor">
					<ul>
						<li><a id="pagina" target="_blank" href="http://www.inei.gob.pe/">INEI - Página Oficial</a></li><br>
						<li><a id="facebook" target="_blank" href="https://www.facebook.com/enei.tacna?ref=ts&fref=ts">ENEI- Facebook</a></li><br>
						<li><a id="twitter" target="_blank" href="">ENEI - Twitter</a></li><br>
						<li><a id="youtube" target="_blank" href="">ENEI - Youtube</a></li>
					</ul>
				</div>
			</div>
			<div class="subsection2">
				<div class="cabecera"><p id="titulo2">Pre-inscripción</p></div>
				<div class="contenedor">
					Si deseas realizar una preinscripción, abre el siguiente enlace <br>
					<a href="{{ url('/preinscripcion')}}">Click Aca</a>
				</div>
			</div>
			<div class="subsection3">
				<div class="cabecera"><p id="titulo3">Servicios a los Participantes</p></div>
				<div class="contenedor">
					¿Estas buscando practicas pre-profesionales? <br>
					<a href="{{ url('/practicas')}}">Click Aca</a>
				</div>
			</div>
		</aside>
	<!--</div>-->
	</section>
	<footer>
		Dirección: Av. San Martin 533 <br>
		Telefono: (052) 245 195 <br>
		@Copyright 2015 - Todos los derechos reservados
	</footer>
</body>
</html>