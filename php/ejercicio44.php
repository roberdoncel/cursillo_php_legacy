<!DOCTYPE html>

<html>
	<head>
		<title></title>
	</head>
	<body>
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

									$linkBorrar = "<a href='ejercicio44b.php?item=" .$reg4["Id"] ."'>Borrar</a>";

									$linkEditar ='"<a href=ejercicio44f.php?item=' . $reg4['Id'] . '&nombre=' . $reg4['Nombre'] . '&nif=' . $reg4['Nif'] . '&edad=' . $reg4['Edad'] . '&localidad=' . $reg4['Localidad'] . '&provincia=' . $reg4['Provincia'] . '&ecivil=' . $reg4['E_civil'] . '>Editar</a>"';
									

									echo "<tr>"."<td>" .$reg4["Id"] ."</td>" ."<td>" .$reg4["Nombre"] ."</td>" ."<td>" .$reg4["Nif"] ."</td>" ."<td>" .$reg4["Edad"] ."</td>"."<td>" .$reg4["Localidad"] ."</td>" ."<td>" .$reg4["Provincia"] ."</td>" ."<td>" .$reg4["E_civil"] ."</td>"."<td>" .$linkBorrar ."</td>"."<td>" .$linkEditar ."</td>"   ."</tr>";
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