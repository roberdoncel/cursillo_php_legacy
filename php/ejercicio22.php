<!DOCTYPE html>

<html>
	<head>
		<title></title>
	</head>
	<body>

		<h3>Uso de el bucle foreach</h3>
		<?php
			$meses= array("Enero", "Febrero", "Marzo", "Abril","Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre","Diciembre");

			foreach ($meses as $mes) {
				echo $mes ."<br />";
			}

			echo "<br /><br />";

			$datos = array();
			$datos["nombre1"] = "Paco";
			$datos["nif1"] ="50201578r";
			$datos["nombre2"] ="Damián";
			$datos["nif2"] = "54220239F";
			$datos["nombre3"] = "Maria";
			$datos["nif3"] = "04499474T";

			foreach($datos as $indice => $valor){
				echo $indice .": " .$valor ."<br />";
			}
		?>
	</body>
</html>