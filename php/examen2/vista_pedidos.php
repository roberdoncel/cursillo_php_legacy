<!DOCTYPE html>

<html>
	<head>
		<title></title>
	</head>
	<body>
		<?php
				echo "<table>";
				echo "<tr>";
				echo "<td>ID</td>";
				echo "<td>CANTIDAD</td>";
				echo "<td>CODIGO_VENDEDOR</td>";
				echo "<td>CODIGO_TIENDA</td>";
				echo "<td>FECHA</td>";
				echo "<td>ID_CLIENTE</td>";
				echo "</tr>";
			foreach ($pedidos as $campo) {
					echo "<tr>";
					echo "<td>" .$campo['ID'] ."</td>";
					echo "<td>" .$campo['CANTIDAD']."</td>";
					echo "<td>" .$campo['CODIGO_VENDEDOR']."</td>";
					echo "<td>" .$campo['CODIGO_TIENDA']."</td>";
					echo "<td>" .$campo['FECHA']."</td>";
					echo "<td>" .$campo['ID_CLIENTE']."</td>";					
					echo "</tr>";
			}
			echo "</table>";
		?>
	</body>
</html>