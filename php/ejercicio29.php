<!DOCTYPE html>

<html>
	<head>
		<title></title>
	</head>
	<body>
		<p>Dado el array $nums= array(13,17,46,24,59,16,31,68,46,70,21,7); se pide encontrar usando una función php, el número mayor 
			contenido en ella. Para ello se utiliza la función max().</p>
		<?php
			$nums= array(13,17,46,24,59,16,31,68,46,70,21,7);

			echo "El número mayor contenido en el array es: " .max($nums) ."<br />";
		?>
		<p>Escribir una función que concatene un texto dado con otro</p>
		<?php

			$texto= "Oh la la";
			function concatenarTexto($text){

				return $text ." Colorín colorado, este curso se ha acabado"; 
			}

			echo concatenarTexto($texto);
		?>

	</body>
</html>