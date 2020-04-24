<!DOCTYPE html>

<html>
	<head>
		<title></title>
	</head>
	<body>
		<h3>Uso bucle While</h3>
		<?php

			$meses= array("Enero", "Febrero", "Marzo", "Abril","Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre","Diciembre");

			$i=0;
			$dimensionArray = count($meses);
			while($i<$dimensionArray){
				echo $meses[$i] ."<br />";
				$i++;
			}


			echo "<br /><br />Sacar el listado de meses de Enero a Octubre <br />";

			$mes="";
			$j=0;
			while($mes!="Octubre"){
				echo $meses[$j] ."<br />";
				$mes = $meses[$j];
				$j++;
			}

			echo "<br /><br />Sacar el listado de meses de Septiembre a Abril <br />";

			
			$cont =8;
			while($cont >=3){
				echo $meses[$cont] ."<br />";
				$cont--;
			}
			
		?>
	</body>
</html>