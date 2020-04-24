<!DOCTYPE html>

<html>
	<head>
		<title></title>
	</head>
	<body>
		<h3>Ejercicio donde a partir de un pais introducido (Portugal, Italia, Inglaterra o Francia), te da su capital</h3>
		<?php 

		function normalizar($pais){
			//Pasa todo las letras a minúsculas y luego la primera la pone en mayúsculas
			$pais = strtolower($pais);
			$pais = ucwords($pais);
			return $pais;
		}

		function relacionarPais($inputPais){
			$inputPais=normalizar($inputPais);
			switch ($inputPais) {
				case 'Portugal':
					return "Lisboa";
					break;	
				case "Italia":
					return "Roma";
					break;
				case "Inglaterra":
					return "Londres";
					break;
				case "Francia":
					return "París";
					break;
				default:
					return "Formato incorrecto";
					break;
			}
	 	}

	 	$paisEntrada = "porTuGal";
		echo "La capital de " .normalizar($paisEntrada) ." es " .relacionarPais($paisEntrada);
		?>

		<p>Ejercicio que a través de una función dice si el texto introducido tiene 10, más o menos caracteres.</p>
		<?php
		
			$txtEntrada="El cielo está enladrillado";

			function contarCaracteres($txt){
				if(strlen($txt)>10) return "Esta cadena de texto tiene más de 10 caracteres";
				else if(strlen($txt)==10) return "Esta cadena tiene 10 caracteres";
				else return "Esta cadena de texto tiene menos de 10 caracteres";
			}

			echo "'".$txtEntrada . "'. " .contarCaracteres($txtEntrada);
		?>
	</body>
</html>