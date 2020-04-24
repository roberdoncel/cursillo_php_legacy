<!DOCTYPE html>

<html>
	<head>
		<title></title>
	</head>
	<body>
		<h3>Ejercicio igual que el 46 pero utilizando las funciones definidas en el ejercicio47funciones.php</h3>

		<?php
			include'ejercicio47funciones.php';

			busquedaById(3);
			busquedaById(2);
			busquedaById(8);
			busquedaById(7);
			busquedaByProv("Barcelona");
			busquedaByProv("Alicante");
		?>
	</body>
</html>