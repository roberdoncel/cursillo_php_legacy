<!DOCTYPE html>

<html>
	<head>
		<title></title>
	</head>
	<body>
		<?php
			$nombreIntroducido=$_POST["nombre_txt"];

			buscarNombre($nombreIntroducido);
			
			function buscarNombre($nombre){

				$conexionBBDD = new mysqli('localhost', 'root', '','pruebas');
				$resultado4 =$conexionBBDD ->query("select * from USUARIOS where Nombre='" .$nombre ."'");
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
					echo "No se ha encontrado ningún registro para el Nombre: " .$nombre ."<br />";
				}
				$conexionBBDD->close();
			}
		?>
		<a href="ejercicio34.html">Nueva búsqueda</a>
	</body>
</html>