<!doctype html>

<html>
	<head>
		<meta charset="UTF-8">
		<title> ejercicio 8 </title>
	</head>
	<body>

		<?php
		
/* el bucle for hace tantas vueltas como se le indique*/
		$tok=0;	
		for ($num=1; $num<= 20 ; $num++) { 
			if ($tok==0) {
				echo "hola <br>";
				$tok=1;
			}else {
				echo "adios <br>";
				$tok=0;
			}
		}
				
		?>
	</body>
</html>