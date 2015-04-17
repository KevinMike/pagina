<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="witdh=device-width, intial-scale=1, maximun-scale=1">
	<title>ENEI: Escuela del Instituto Nacional de Ingeniería en Informática y Sistemas</title>
	<link rel="stylesheet" href="css/index.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/app.css">
	@yield('cabecera')
</head>
<body onload="initialize()">
	<header>
			<div class="container">
				<div class="row">
					<div class="logo col-lg-2 col-md-12 " >
						<img src="img/logo.jpg" alt="" width="100">
					</div>
					<div class="titulo col-lg-9 col-lg-12 ">
						<h1 valign="middle">ESCUELA NACIONAL DE ESTADISTICA E INFORMÁTICA<br>Sede Tacna</h1>
					</div>
				</div>
			</div>
	</header>
	<nav>
			<ul>
				<li><a href="{{ url('/') }}" id="inicio">Inicio</a></li>
				<li><a href="{{ url('/informacion') }}" id="quienes_somos">Quienes Somos</a></li>
				<li><a href="{{ url('/cursos') }}" id ="cursos">Cursos</a></li>
				<!--<li><a href="" id="herramientas">Herramientas</a></li>-->
				<li><a href="{{ url('/fotos') }}" id="fotos">Fotos</a></li>
				<li><a href="{{ url('/contacto')}}" id="contactanos">Contáctanos</a></li>
				<li><a target="_blank" href="http://localhost/moodle" id="aula_virtual">Aula Virtual</a></li>
				<li><a href="{{ url('/mapa') }}" id="mapa">Mapa</a></li>
			</ul>
	</nav>
	<section>
	<div class="container">
		<section id="principal" >
			@yield('contenido')
		</section>
		<aside>
			<div class="subsection1">
				<div class="cabecera">
					<p>Otros Enlaces</p>
				</div>
				<div class="contenedor">
					<ul>
						<li><a target="_blank" href="http://www.inei.gob.pe/">INEI</a></li>
						<li><a target="_blank" href="https://www.facebook.com/enei.tacna?ref=ts&fref=ts">ENEI- Facebook</a></li>
						<li><a target="_blank" href="">ENEI - Youtube</a></li>
					</ul>
				</div>
			</div>
			<div class="subsection2">
				<div class="cabecera"><p>Pre-inscripción</p></div>
				<div class="contenedor">
					Si deseas realizar una preinscripción, abre el siguiente enlace <br>
					<a href="{{ url('/preinscripcion')}}">Click Aca</a>
				</div>
			</div>
			<div class="subsection3">
				<div class="cabecera"><p>Servicios a los Participantes</p></div>
				<div class="contenedor">
					¿Estas buscando practicas pre-profesionales? <br>
					<a href="{{ url('/practicas')}}">Click Aca</a>
				</div>
			</div>
		</aside>
	</div>
	</section>
	<footer>
		Dirección: Av. San Martin 533 <br>
		Telefono: (052) 245 195 <br>
		@Copyright 2015 - Todos los derechos reservados
	</footer>
</body>
</html>