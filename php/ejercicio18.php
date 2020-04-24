<!DOCTYPE html>

<html>
	<head>
		<title></title>
	</head>
	<body>
		<?php
			$colores= array("Verde", "Rojo", "Azul", "Amarillo", "Naranja", "Rosa");

			echo "El usuario ha elegido el color: " . $colores[$_GET["var"]];

		?>
	</body>
</html>