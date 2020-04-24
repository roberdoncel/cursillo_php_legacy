<!DOCTYPE html>

<html lang="es">
	<head>
		<title>Ejercicio 15</title>
	</head>
	<body>
		<h2>Ejercicio 15</h2>
		<p> Mostrar todos los números de 99 a 10, señalando cuales finalizan en 7 </p>
		<?php
			for($i =9; $i >=1;$i--){

				for($j=9; $j >=0; $j--){
					if($j==7){
						echo $i . $j . " Finaliza en 7<br />";
					}else{
						echo $i . $j . "<br />";
					}
				}
			}
		?>

	</body>
</html>