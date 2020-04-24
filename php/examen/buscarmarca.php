<!DOCTYPE html>

<html lang="es">
	<head>
		<title></title>
	</head>
	<body>
		<?php
			include'funciones.php';

			$marca=$_POST['marca_txt'];



			buscarCoche($marca);
		?>
	</body>
</html>