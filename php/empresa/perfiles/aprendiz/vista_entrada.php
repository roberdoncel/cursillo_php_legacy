<!DOCTYPE html>


	<html>
	<head>
		<title></title>
		<link rel="stylesheet" href="../../css/empresa.css" />
	</head>
	<body>
		<?php
				echo "<div class='borderBottom'>";
				echo "<label id='entornoTitle'>Entorno de ".$entorno ."</label>";
				echo "<label id='nombreTitle'>" .$nombre ." " .$apellidos ."</label>";
				echo "</div>";

				echo "<section id='seccionTabla'>";
			//	echo "<label id='nombreClienteProyectos'>".$nombreCliente ."</label>";
				/* Tabla de cada proyecto*/
				echo "<table class='tabla'>";
				echo "<tr class='encabezadoTabla'>";
				echo "<td class='celdasEncabezado'>ID</td>";
				echo "<td class='celdasEncabezado'>NOMBRE</td>";
				echo "<td class='celdasEncabezado'>DURACION</td>";
				echo "<td class='celdasEncabezado'>FECHA INICIO</td>";
				echo "<td class='celdasEncabezado'>FECHA FIN</td>";
				echo "</tr>";
				
				foreach ($tabla as $campo) {
					echo "<tr>";
					echo "<td>" .$campo['ID'] ."</td>";
					echo "<td>" .$campo['NOMBRE']."</td>";
					echo "<td>" .$campo['DURACION']."</td>";
					echo "<td>" .$campo['FECHA_INICIO']."</td>";
					echo "<td>" .$campo['FECHA_FIN']."</td>";
					echo "</tr>";
				}
				echo '</table>';
				echo "<a href='entrada.php'>Volver</a>";
				echo "</section>";
		?>
	</body>
</html>