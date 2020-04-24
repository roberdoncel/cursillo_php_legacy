<!DOCTYPE html>

<html>
	<head>
		<title></title>
	</head>
	<body>

		<h3>¿Está seguro?</h3>



		<?php
			$idSelected = $_GET["index"];

			//Se añade una variable ok con valor 0 si se ha pulsado el enlace sí y 1 si se ha pulsado el enlace no.
			echo "<a href='ejercicio41c.php?index=" .$idSelected ."&ok=0'>Sí</a>";
			echo "<a href='ejercicio41c.php?index=" .$idSelected ."&ok=1'>No</a>";
			
		?>
	</body>
</html>