<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="witdh=device-width, intial-scale=1, maximun-scale=1">
	<title>ENEI: Escuela del Instituto Nacional de Ingeniería en Informática y Sistemas</title>
	<link rel="stylesheet" href="css/index.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/app.css">
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
				<li><a href="" id="inicio">Inicio</a></li>
				<li><a href="" id="quienes_somos">Quienes Somos</a></li>
				<li><a href="" id ="cursos">Cursos</a></li>
				<li><a href="" id="herramientas">Herramientas</a></li>
				<li><a href="" id="fotos">Fotos</a></li>
				<li><a href="" id="contactanos">Contáctanos</a></li>
				<li><a href="http://localhost/moodle" id="aula_virtual">Aula Virtual</a></li>
				<li><a href="" id="mapa">Mapa</a></li>
			</ul>
	</nav>
	<section>
	<div class="container">
		<section id="principal" >
			<H1>Álbum de Fotos</H1>
			
			<ul class="pgwSlider">
			    <li><img src="img/1.jpg" alt="Paris, France" data-description="Eiffel Tower and Champ de Mars"></li>
			    <li><img src="img/2.jpg" alt="Montréal, QC, Canada" data-large-src="img/2.jpg"></li>
			    <li><img src="img/3.jpg"><span>Shanghai, China</span></li>
			    <li><a href="http://www.nyc.gov" target="_blank"><img src="img/4.jpg"><span>New York, NY, USA</span></a></li>
			</ul>
			<br>
			<p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.

			Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto de un sitio mientras que mira su diseño. El punto de usar Lorem Ipsum es que tiene una distribución más o menos normal de las letras, al contrario de usar textos como por ejemplo "Contenido aquí, contenido aquí". Estos textos hacen parecerlo un español que se puede leer. Muchos paquetes de autoedición y editores de páginas web usan el Lorem Ipsum como su texto por defecto, y al hacer una búsqueda de "Lorem Ipsum" va a dar por resultado muchos sitios web que usan este texto si se encuentran en estado de desarrollo. Muchas versiones han evolucionado a través de los años, algunas veces por accidente, otras veces a propósito (por ejemplo insertándole humor y cosas por el estilo).

			 
			Al contrario del pensamiento popular, el texto de Lorem Ipsum no es simplemente texto aleatorio. Tiene sus raices en una pieza cl´sica de la literatura del Latin, que data del año 45 antes de Cristo, haciendo que este adquiera mas de 2000 años de antiguedad. Richard McClintock, un profesor de Latin de la Universidad de Hampden-Sydney en Virginia, encontró una de las palabras más oscuras de la lengua del latín, "consecteur", en un pasaje de Lorem Ipsum, y al seguir leyendo distintos textos del latín, descubrió la fuente indudable. Lorem Ipsum viene de las secciones 1.10.32 y 1.10.33 de "de Finnibus Bonorum et Malorum" (Los Extremos del Bien y El Mal) por Cicero, escrito en el año 45 antes de Cristo. Este libro es un tratado de teoría de éticas, muy popular durante el Renacimiento. La primera linea del Lorem Ipsum, "Lorem ipsum dolor sit amet..", viene de una linea en la sección 1.10.32

			El trozo de texto estándar de Lorem Ipsum usado desde el año 1500 es reproducido debajo para aquellos interesados. Las secciones 1.10.32 y 1.10.33 de "de Finibus Bonorum et Malorum" por Cicero son también reproducidas en su forma original exacta, acompañadas por versiones en Inglés de la traducción realizada en 1914 por H. Rackham.

			Hay muchas variaciones de los pasajes de Lorem Ipsum disponibles, pero la mayoría sufrió alteraciones en alguna manera, ya sea porque se le agregó humor, o palabras aleatorias que no parecen ni un poco creíbles. Si vas a utilizar un pasaje de Lorem Ipsum, necesitás estar seguro de que no hay nada avergonzante escondido en el medio del texto. Todos los generadores de Lorem Ipsum que se encuentran en Internet tienden a repetir trozos predefinidos cuando sea necesario, haciendo a este el único generador verdadero (válido) en la Internet. Usa un diccionario de mas de 200 palabras provenientes del latín, combinadas con estructuras muy útiles de sentencias, para generar texto de Lorem Ipsum que parezca razonable. Este Lorem Ipsum generado siempre estará libre de repeticiones, humor agregado o palabras no características del lenguaje, etc.</p>
			<br>
			Mapa del INEI:
			<div id="map_canvas" style="width:100%; height:500px"></div>
			<br>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d948.5679662211528!2d-70.24937926907425!3d-18.012582451403556!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915acf64fb272bef%3A0xcf6ba61f56564cdb!2sSan+Martin+520%2C+Tacna%2C+Per%C3%BA!5e0!3m2!1ses!2ses!4v1426265136737" width="100%" height="450" frameborder="0" style="border:0"></iframe>
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
				<div class="cabecera"><p>Otra sección</p></div>
				<div class="contenedor"></div>
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