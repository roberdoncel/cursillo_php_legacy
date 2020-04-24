<!DOCTYPE html>

<html>
	<head>
		<title></title>
	</head>
	<body>
		<?php
			$iId=$_POST["id"];
			$iNombre=$_POST["nombre_txt"];
			$iNiF=$_POST["nif_txt"];
			$iEdad=$_POST["edad"];
			$iLocalidad=$_POST["localidad_txt"];
			$iProvincia=$_POST["provincia"];
			$iECivil =$_POST["codCivil"];

			
			function introducirBBDD($newId, $newNombre, $newNif, $newEdad, $newLocalidad, $newProvincia, $newECivil){

				//cadena de texto con todos los datos metidos con formato valido para SQL.
				$newValores = $newId .",'" .$newNombre ."','" .$newNif ."'," .$newEdad .",'" .$newLocalidad ."','" .$newProvincia ."','" .$newECivil ."'";

				$conexionBBDD = new mysqli('localhost', 'root', '','pruebas');//servidor, user, password, base de datos.
				$conexionBBDD ->query("INSERT INTO USUARIOS (Id, Nombre, Nif, Edad, Localidad, Provincia, E_civil) VALUES(" .$newValores .")");
				$conexionBBDD->close();
			}

			introducirBBDD($iId, $iNombre, $iNiF, $iEdad, $iLocalidad, $iProvincia, $iECivil);

			function mostrarBBDD(){
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
								
								echo "<tr>"."<td>" .$reg4["Id"] ."</td>" ."<td>" .$reg4["Nombre"] ."</td>" ."<td>" .$reg4["Nif"] ."</td>" ."<td>" .$reg4["Edad"] ."</td>"."<td>" .$reg4["Localidad"] ."</td>" ."<td>" .$reg4["Provincia"] ."</td>" ."<td>" .$reg4["E_civil"] ."</td>"   ."</tr>";
							}
							echo "</table>";
					}else{
						echo "No se ha encontrado ningún registro";
					}
					$conexionBBDD->close();
			}
			mostrarBBDD();
		?>
		<a href="ejercicio38.html">Introducir otro usuario</a>
	</body>
</html>