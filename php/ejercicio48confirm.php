<!DOCTYPE html>

<html>
	<head>
		<title></title>
	</head>
	<body>
		
		<?php
			$idSeleccionada ="";
			//Recogemos el id de la imagen a borrar en función de si venimos desde haber pinchado sobre la X de borrar imagen, con GET o si hemos introducido el id a través del formulario, POST.
			if($_SERVER["REQUEST_METHOD"] == "GET"){
				$idSeleccionada =$_GET["id"];
			}else if($_SERVER["REQUEST_METHOD"] =="POST"){
				$idSeleccionada = $_POST["id_txt"];
			}

			//Dos opciones de borrado. Si es que sí le pasamos el id de la imagen para que la borre.
			echo "¿Estás seguro de que deseas borrar?<br />";
			echo "<a href='ejercicio48borrado.php?id=" .$idSeleccionada ."'>Sí</a><br />";
			echo "<a href='ejercicio48.html'>No</a><br />";
		?>
	</body>
</html>