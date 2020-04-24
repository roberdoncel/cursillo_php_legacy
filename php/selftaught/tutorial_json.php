<!DOCTYPE html>

<html lang="es">
	<head>
		<title>Tutorial de Json aplicado a datos de OpenWeatherMap</title>
		<meta charset="UFT-8" />
	</head>
	<body>

		<form name='form1' method='get' action=''>
			<label>Ciudad</label>
			<input type="text" name="c" />
			<input type="submit" value="Mostrar el tiempo" />
		</form>
		<?php
			/* Comprobamos que los datos introducidos en c no estén vacíos. Si está vacío decimos que se detenga el script con el método die */
			if($_GET["c"]== null) die();

			/*Recogemos los datos JSON generados por la API de OpenWeatherMap con la función file_get_contents */
			$html =file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=" .$_GET["c"]);

			/*Decodificamos los datos obtenidos con json_decode: */
			$json = json_decode($html);

			/*Pasamos a cada variable cada dato entregado por json */
			$ciudad = $json -> name;
			$lat = $json -> coord -> lat;
			$lon = $json -> coord -> lon;
			$temp = $json -> main -> temp;
			$tempmax = $json -> main -> temp_max;
			$tempmin = $json -> main -> temp_min;
			$presion = $json -> main -> pressure;
			$humedad = $json -> main -> humidity;
			$vel_viento = $json -> main -> temp;
			$estado_cielo = $json -> weather[0] -> main;
			$descripcion = $json -> weather[0] -> description;

			echo $ciudad .$lat .$lon .$temp;
		?>
	</body>
</html>