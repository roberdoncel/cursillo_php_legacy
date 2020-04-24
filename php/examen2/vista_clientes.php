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
				echo "<td>NOMBRE</td>";
				echo "<td>APELLIDOS</td>";
				echo "<td>NIF</td>";
				echo "<td>FECHA NACIMIENTO</td>";
				echo "<td>DIRECCION</td>";
				echo "<td>LOCALIDAD</td>";
				echo "<td>PROVINCIA</td>";
				echo "<td>TELEFONO</td>";
				echo "</tr>";
			foreach ($clientes as $campo) {
					echo "<tr>";
					echo "<td>" .$campo['ID'] ."</td>";
					echo "<td>" .$campo['NOMBRE']."</td>";
					echo "<td>" .$campo['APELLIDOS']."</td>";
					echo "<td>" .$campo['NIF']."</td>";
					echo "<td>" .$campo['FECHA_NACIMIENTO']."</td>";
					echo "<td>" .$campo['DIRECCION']."</td>";
					echo "<td>" .$campo['LOCALIDAD']."</td>";
					echo "<td>" .$campo['PROVINCIA']."</td>";
					echo "<td>" .$campo['TELEFONO']."</td>";
					echo "<td>";
					echo"<a href='controlador_pedidos.php?idCliente=" .$campo['ID'] ."'>Ver pedidos </a>";
					echo "</td>";
					echo "<td>";
					echo"<a href='editar_cliente.php?idCliente=" .$campo['ID'] ."'>EditarCliente</a>";
					echo "</td>";											
					echo "</tr>";
			}
			echo "</table>";
		?>

	</body>
</html>