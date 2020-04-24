<!DOCTYPE html>

<html lang="es">
	<head>
		<title></title>
	</head>
	<body>
		<h3>Insertar en la base de datos el usuario con Id=9, Nombre=Luis, Localidad=Getafe y E_civil=Viudo</h3>
		<p>Para ello se utiliza INSERT INTO. Quedaría tal que así: "INSERT INTO USUARIOS (Id, Nombre, Nif, Edad, Localidad, Provincia, E_civil) VALUES (9,'Luis','51666754J',33, 'Getafe','Madrid', 'Viudo')"</p>

		<?php

			$conexionBBDD = new mysqli('localhost', 'root', '','pruebas');
			$conexionBBDD ->query("INSERT INTO USUARIOS (Id, Nombre, Nif, Edad, Localidad, Provincia, E_civil) VALUES (9,'Luis','51666754J',33, 'Getafe','Madrid', 'Viudo')");
			$conexionBBDD ->query("SET NAMES 'UTF8'"); //Sirve para que muestre tildes y ñ.
			$resultados =$conexionBBDD ->query("SELECT * FROM USUARIOS");
			
			if($resultados -> num_rows > 0){
						
						echo "<table border='1'> <tr><td><strong>Id</strong></td>
							<td><strong>Nombre</strong></td>
							<td><strong>NIF</strong></td>
							<td><strong>Edad</strong></td>
							<td><strong>Localidad</strong></td>
							<td><strong>Provincia</strong></td>
							<td><strong>Estado civil</strong></td></tr>";

						while($reg4 = $resultados -> fetch_assoc()){
							
							echo "<tr>"."<td>" .$reg4["Id"] ."</td>" ."<td>" .$reg4["Nombre"] ."</td>" ."<td>" .$reg4["Nif"] ."</td>" ."<td>" .$reg4["Edad"] ."</td>"."<td>" .$reg4["Localidad"] ."</td>" ."<td>" .$reg4["Provincia"] ."</td>" ."<td>" .$reg4["E_civil"] ."</td>"   ."</tr>";
						}
						echo "</table>";
				}else{
					echo "No se ha encontrado ningún registro";
				}
			$conexionBBDD->close();
		?>
	</body>
</html>