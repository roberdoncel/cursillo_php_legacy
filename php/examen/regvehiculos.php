<!DOCTYPE html>

<html>
	<head>
		<title></title>
	</head>
	<body>
		<?php
			include'funciones.php';

			$modelo=$_POST['modelo_txt'];
			$marca=$_POST['marca_txt'];
			$color=$_POST['color_txt'];
			$precio=$_POST['precio_num'];
			$matricula=$_POST['matricula_txt'];
			$matDia =$_POST['fMatDia'];
			$matMes =$_POST['fMatMes'];
			$matYear =$_POST['fMatYear'];

			

			
			registrarCoche($modelo, $marca, $color, $precio, $matricula, $matDia,$matMes,$matYear);


		?>
	</body>
</html>