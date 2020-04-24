<!DOCTYPE html>

<html lang="es">
	<head>
		<title></title>
		<meta charset="UTF-8" />
	</head>
	<body>
		<?php
			

			function actualizarDatos($id, $campo, $valor){

				$conexionBBDD = new mysqli('localhost', 'root', '','pruebas');
				$conexionBBDD ->query("UPDATE USUARIOS SET " .$campo ."='" .$valor ."' WHERE Id='" .$id ."'");

				$conexionBBDD->close();
			
			}

			

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

									echo "<tr>"."<td>" .$reg4["Id"] ."</td>" ."<td>" .$reg4["Nombre"] ."</td>" ."<td>" .$reg4["Nif"] ."</td>" ."<td>" .$reg4["Edad"] ."</td>"."<td>" .$reg4["Localidad"] ."</td>" ."<td>" .$reg4["Provincia"] ."</td>" ."<td>" .$reg4["E_civil"] ."</td>" ."</tr>";
								}
								echo "</table>";
						}else{
							echo "No se ha encontrado ningún registro";
					}
				$conexionBBDD->close();
			}


			//Recogemos los datos del formulario.
			$iId=$_POST["id_txt"];
			$iCampo=$_POST["campo"];
			$iValor=$_POST["valor_txt"];


			actualizarDatos($iId, $iCampo, $iValor);
			mostrarTabla();


		?>
	</body>
</html>