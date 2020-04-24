<!DOCTYPE html>

<html>
	<head>
		<title></title>
	</head>
	<body>
		<p>"Escribir una función para sumar todos los valores de un array. Usar este ejemplo: 27,43,111,84,27,91,82,44,25,71,66,43</p>
		<h4>1ª Forma utilizando for</h4>
		<?php
			$numeros = array(27,43,111,84,27,91,82,44,25,71,66,43);

			function sumar($array){

				$dimArray = count($array);
				$suma=0;
				for($i=0; $i<$dimArray;$i++){
					$suma=$suma+$array[$i];
				}

				return $suma;
			}

			echo "La suma total de los valores del array es: " .sumar($numeros);
		?>

		<h4>2ª Forma utilizando foreach</h4>

		<?php
			$numeros = array(27,43,111,84,27,91,82,44,25,71,66,43);

			function sumarForEach($array){
				$suma=0;
				foreach ($array as $num) {
					$suma= $suma+$num;
				}

				return $suma;
			}
			echo "La suma total de los valores del array es: " .sumarForEach($numeros);
		?>
	</body>
</html>