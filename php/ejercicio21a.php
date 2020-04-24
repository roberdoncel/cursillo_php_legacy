<!DOCTYPE html>

<html lang="es">
	<head>
		<title></title>
	</head>
	<body>
		<?php
		$nombre= $_POST["nombre_txt"];
			echo "El nombre es " .'<a href ="ejercicio21b.php?seleccion=' .$nombre .'">' .$nombre .'</a></br>';
			echo "Los apellidos son " .'<a href ="ejercicio21b.php?seleccion=' .$_POST["apellidos_txt"] .'">' .$_POST["apellidos_txt"] .'</a></br>';
		?>
	</body>
</html>