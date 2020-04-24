<!DOCTYPE html>

<html>
	<head>
		<title></title>
	</head>
	<body>
		<?php
			$clave = 146;
		?>
		<p>Pasar dos variables, una definida en php, que es el número y otro con el color elegido.</p>
		<a href="ejercicio19s.php?color=Verde&valor=<?php echo $clave ?>">Verde</a>
		<a href="ejercicio19s.php?color=Rojo&valor=<?php echo $clave ?>">Rojo</a>
		<a href="ejercicio19s.php?color=Azul&valor=<?php echo $clave ?>">Azul</a>
		<a href="ejercicio19s.php?color=Amarillo&valor=<?php echo $clave ?>">Amarillo</a>
		<a href="ejercicio19s.php?color=Naranja&valor=<?php echo $clave ?>">Naranja</a>
		<a href="ejercicio19s.php?color=Rosa&valor=<?php echo $clave ?>">Rosa</a>
		
	</body>
</html>