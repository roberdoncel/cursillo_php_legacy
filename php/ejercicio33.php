<!DOCTYPE html>

<html lang="es">
	<head>
		<title></title>
		<meta charset="UTF-8" />
	</head>
	<body>
		<h3>Mostrar los datos de una base de datos</h3>

		<?php
			//Conexión a la base de datos.
			$conexionBBDD = new mysqli('localhost', 'root', '','pruebas');
			
			//Realizamos la consulta en la que pedimos que nos dé todos los campos de la tabla USUARIOS y la almacenamos en $resultado.
			$resultado =$conexionBBDD ->query("select * from USUARIOS");

			//vemos si existen registros guardados en la consulta.
			if($resultado -> num_rows > 0){
					//Si existen, mostramos en pantalla el campo Nombre.
					while($fila = $resultado -> fetch_assoc()){
					echo $fila["Nombre"];
				}
			}else{
				echo "Resusltado vacío";
			}
			$conexionBBDD->close();				
		?>
		<h4>Otra consulta</h4>
		<?php
			$conexionBBDD = new mysqli('localhost', 'root', '','pruebas');
			$resultado2 =$conexionBBDD ->query("select * from INFORMES");
			if($resultado2 -> num_rows > 0){
					//Si existen, mostramos en pantalla el campo Nombre.
					echo "<table border='1'> <tr><td><strong>Número Informe</strong></td><td><strong>Redactor</strong></td></tr>";
					while($registros = $resultado2 -> fetch_assoc()){
						//echo "Informe número " .$registros["NumInforme"] ." Escrito por " .$registros["Redactor"] .".<br />";
						echo "<tr>" ."<td>Informe número " .$registros["NumInforme"] ."</td>" ."<td> Escrito por " .$registros["Redactor"] ."</td>" ."</tr>";
					}
					echo "</table>";
			}else{
				echo "Sin registros";
			}
			$conexionBBDD->close();
		?>
		<h4>Datos del redactor llamado Pablo</h4>
		<?php
			$conexionBBDD = new mysqli('localhost', 'root', '','pruebas');
			$resultado3 =$conexionBBDD ->query("select * from INFORMES where Redactor='Pablo'");
			if($resultado3 -> num_rows > 0){
					//Si existen, mostramos en pantalla el campo Nombre.
					echo "<table border='1'> <tr><td><strong>Número Informe</strong></td><td><strong>Redactor</strong></td></tr>";
					while($registros3 = $resultado3 -> fetch_assoc()){
						//echo "Informe número " .$registros["NumInforme"] ." Escrito por " .$registros["Redactor"] .".<br />";
						echo "<tr>" ."<td>Informe número " .$registros3["NumInforme"] ."</td>" ."<td> Escrito por " .$registros3["Redactor"] ."</td>" ."</tr>";
					}
					echo "</table>";
			}else{
				echo "Sin registros";
			}
			$conexionBBDD->close();
		?>

		<h4>Tabla Usuarios completa.</h4>
		<?php
			$conexionBBDD = new mysqli('localhost', 'root', '','pruebas');
			$resultado4 =$conexionBBDD ->query("select * from USUARIOS");
			if($resultado4 -> num_rows > 0){
					
					echo "<table border='1'> <tr><td><strong>Id</strong></td>
						<td><strong>Nombre</strong></td>
						<td><strong>NIF</strong></td>
						<td><strong>Edad</strong></td>
						<td><strong>Localidad</strong></td>
						<td><strong>Provincia</strong></td>
						<td><strong>Estado civil</strong></td></tr>";

					while($reg4 = $resultado4 -> fetch_assoc()){
						
						echo "<tr>"."<td>" .$reg4["Id"] ."<td>" .$reg4["Nombre"] ."</td>" ."<td>" .$reg4["Nif"] ."</td>" ."<td>" .$reg4["Edad"] ."</td>"."<td>" .$reg4["Localidad"] ."</td>" ."<td>" .$reg4["Provincia"] ."</td>" ."<td>" .$reg4["E_civil"] ."</td>"   ."</tr>";
					}
					echo "</table>";
			}else{
				echo "Sin registros";
			}
			$conexionBBDD->close();
		?>
		<h4>Mostrar los usuarios con más de 40 años</h4>

		<?php
			$conexionBBDD = new mysqli('localhost', 'root', '','pruebas');
			$resultado4 =$conexionBBDD ->query("select * from USUARIOS where edad>40");
			if($resultado4 -> num_rows > 0){
					
					echo "<table border='1'> <tr><td><strong>Id</strong></td>
						<td><strong>Nombre</strong></td>
						<td><strong>NIF</strong></td>
						<td><strong>Edad</strong></td>
						<td><strong>Localidad</strong></td>
						<td><strong>Provincia</strong></td>
						<td><strong>Estado civil</strong></td></tr>";

					while($reg4 = $resultado4 -> fetch_assoc()){
						
						echo "<tr>"."<td>" .$reg4["Id"] ."<td>" .$reg4["Nombre"] ."</td>" ."<td>" .$reg4["Nif"] ."</td>" ."<td>" .$reg4["Edad"] ."</td>"."<td>" .$reg4["Localidad"] ."</td>" ."<td>" .$reg4["Provincia"] ."</td>" ."<td>" .$reg4["E_civil"] ."</td>"   ."</tr>";
					}
					echo "</table>";
			}else{
				echo "Sin registros";
			}
			$conexionBBDD->close();

		?>

		<h4>Mostrar las personas casadas</h4>
		<?php
			$conexionBBDD = new mysqli('localhost', 'root', '','pruebas');
			$resultado4 =$conexionBBDD ->query("select * from USUARIOS where E_civil='casado'");
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

		?>
		<h4>Empleados entre 20 y 30 años</h4>
		<?php
			$conexionBBDD = new mysqli('localhost', 'root', '','pruebas');
			$resultado4 =$conexionBBDD ->query("select * from USUARIOS where Edad>20 and Edad<30");
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
		?>
		<h4>Los que tienen menos de 40 años y son solteros</h4>
		<?php
			$conexionBBDD = new mysqli('localhost', 'root', '','pruebas');
			$resultado4 =$conexionBBDD ->query("select * from USUARIOS where Edad<40 and E_civil='soltero'");
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
		?>
		<h4>Las personas de Madrid y Barcelona</h4>
		<?php
			$conexionBBDD = new mysqli('localhost', 'root', '','pruebas');
			$resultado4 =$conexionBBDD ->query("select * from USUARIOS where Provincia ='Madrid' or Provincia='Barcelona'");
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
		?>		
	</body>
</html>