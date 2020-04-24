<!doctype html>

<html>
	<head>
		<meta charset="UTF-8">
		<title> ejercicio 8 </title>
	</head>
	<body>

		<?php
		
/*la variable en este caso guarda una informacion que va dando valores que se guardan*/
		$valor=0;	
		for ($num=1; $num<= 20 ; $num++) { 
			if ($valor==0) {
				echo "hola <br>";
				$valor=1;
			}else {
				echo "adios <br>";
				$valor=0;
			}
		}
	?>
	</body>
</html>