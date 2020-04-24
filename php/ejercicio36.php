<!DOCTYPE html>

<html>
	<head>
		<title></title>
	</head>
	<body>

		<a href="ejercicio36.php?orden=ASC">Ordenar en orden Ascendente</a>
		<a href="ejercicio36.php?orden=DESC">Ordenar en orden Descendente</a>
		<?php

			crearTabla($_GET["orden"]);

			function crearTabla($tipoOrdenacion){
				$conexionBBDD = new mysqli('localhost', 'root', '','pruebas');
				$conexionBBDD ->query("SET NAMES 'UTF8'"); //Sirve para que muestre tildes y ñ.
				$resultado4 =$conexionBBDD ->query("select * from USUARIOS ORDER BY Edad " .$tipoOrdenacion);
				if($resultado4 -> num_rows > 0){
						
						echo "<table border='1'> <tr><td><strong>Id</strong></td>
							<td><strong>Nombre</strong></td>
							<td><strong>NIF</strong></td>
							<td><strong>Edad</strong></td>
							<td><strong>Localidad</strong></td>
							<td><strong>Provincia</strong></td>
							<td><strong>Estado civil</strong></td></tr>";

						while($reg4 = $resultado4 -> fetch_assoc()){
							
							echo "<tr>"."<td>" .$reg4["Id"] ."</td>" ."<td>" .$reg4["Nombre"] ."</td>" ."<td>" .$reg4["Nif"] ."</td>" ."<td>" .$reg4["Edad"] ."</td>"."<td>" .$reg4["Localidad"] ."</td>" ."<td>" .$reg4["Provincia"] ."</td>" ."<td>" .$reg4["E_civil"] ."</td>"   ."</tr>";
						}
						echo "</table>";
				}else{
					echo "Sin registros";
				}
				$conexionBBDD->close();
			}
			
		?>
	</body>
</html>