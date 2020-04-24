<!DOCTYPE html>

<html lang="es">
	<head>
		<title></title>
		<meta charset="UTF-8" />
	</head>
	<body>
		<h3>Ejercicio para borrar elementos de la tabla dinámicamente.</h3>
		<p>Al final de cada lista se le añade un enlace creado dinámicamente y al que se añade una variable
			que identifica el registro a borrar. </p>
		<?php
			function mostrarTabla(){
				$conexionBBDD = new mysqli('localhost', 'root', '','pruebas');
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

									$linkBorrar = "<a href='ejercicio41b.php?index=" .$reg4["Id"] ."'>X</a>";

									echo "<tr>"."<td>" .$reg4["Id"] ."</td>" ."<td>" .$reg4["Nombre"] ."</td>" ."<td>" .$reg4["Nif"] ."</td>" ."<td>" .$reg4["Edad"] ."</td>"."<td>" .$reg4["Localidad"] ."</td>" ."<td>" .$reg4["Provincia"] ."</td>" ."<td>" .$reg4["E_civil"] ."</td>"."<td>" .$linkBorrar ."</td>"   ."</tr>";
								}
								echo "</table>";
						}else{
							echo "No se ha encontrado ningún registro";
					}
				$conexionBBDD->close();
			}

			mostrarTabla();
		?>
	</body>
</html>