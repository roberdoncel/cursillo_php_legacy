<!DOCTYPE html>

<html>
<head>
	<title></title>
	<meta charset="UTF-8" />

		<!-- Add jQuery library -->
		<script src="http://code.jquery.com/jquery-latest.min.js"></script>

		<!-- Add mousewheel plugin (this is optional) -->
		<script src="libs/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>
		<!-- Add fancyBox -->
		<link rel="stylesheet" href="libs/fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
		<script src="libs/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
		<!-- Optionally add helpers - button, thumbnail and/or media -->
		<link rel="stylesheet" href="libs/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
		<script src="libs/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
		<script src="libs/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

		<link rel="stylesheet" href="libs/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
		<script src="libs/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

		<script src="libs/fancybox/source/jquery.fancybox.js"></script>


		<script type="text/javascript"> //Cuando el documento esté cargado, llame a la función y ejecute el fancybox. 
			$(document).ready(function() {
				$(".fancybox").fancybox();
			});
		</script>

		<style>
		.seccion_fotos{
			display:inline-block;
			vertical-align: top;
		}

		.enlaces{
			display: block;
			float: right;
			font-style: italic;
			font-weight: bold;
			text-decoration: none;
		}
		</style>
</head>
<body>
	
	<?php 
		/*Cargamos las fotos contenidas en la base de datos y cuyo archivo está en ficheros/*/
		$conexionBD = new mysqli('localhost', 'root', '','pruebas');
		$conexionBD ->query("SET NAMES 'UTF8'"); //Sirve para que muestre tildes y ñ.
		$resultados =$conexionBD ->query("SELECT * FROM FICHEROS");

		if($resultados -> num_rows > 0){

			while($reg = $resultados -> fetch_assoc()){
					//Creamos una sección para cada imagen y le adjuntamos un enlace con el varlor del id para borrar el elemento.
					echo "<section class='seccion_fotos'>";
					echo "<a class='enlaces' href='ejercicio48confirm.php?id=" .$reg["ID"]."'>X</a>";
					$img =	"<img src='ficheros/" .$reg["NOMBRE"] ."' alt='Error al cargar la imagen'>";	
					echo "<a class='fancybox' rel='gallery1' href='ficheros/" .$reg["NOMBRE"] ."' >" .$img ."</a>";	

					echo"</section>";
			}
				
		}else{
			echo "No se ha encontrado ningún registro";
		}
		$conexionBD->close();
	?>
</body>
</html>