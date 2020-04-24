<!DOCTYPE html>

<html>
	<head>
		<title></title>
	</head>

	<h3>Redondeo de un número usando la función round()</h3>
	<body>
		<?php
			$num=27.29;
			echo "El redondeo de " .$num ." es " .round($num) ."<br/>";

			echo "<br /> srtlen() nos da el número de caracteres que tiene un string<br/>";
			$cadena = "elefante";
			echo $cadena ." Tiene: " .strlen($cadena) ." caracteres. <br />";

			echo "<br /> srt_replace() sustituye parte del texto de un string:<br/>";
			$texto ="En un lugar de la mancha de cuyo nombre no quiero acordarme";
			echo "Texto original: " .$texto ."<br />";
			echo "Texto modificado: " .str_replace("mancha", "Rioja", $texto) ."<br />";

		?>
	</body>
</html>