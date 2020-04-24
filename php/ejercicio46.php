<!DOCTYPE html>

<html>
	<head>
		<title></title>
	</head>
	<body>
		<?php

			function crearConexionBBDD(){
				$conexionBBDD = new mysqli('localhost', 'root', '','pruebas');
				$conexionBBDD ->query("SET NAMES 'UTF8'"); //Sirve para que muestre tildes y ñ.
				return $conexionBBDD;
			}

			
			function busqueda($id){
				
				$conexion = crearConexionBBDD();

				$resultados = $conexion ->query("SELECT * FROM USUARIOS WHERE Id=" .$id);	
					if($resultados -> num_rows > 0){
								

								while($reg4 = $resultados -> fetch_assoc()){

									echo "Estos son los datos del usuario " .$reg4["Id"] ."<br/>" ."Nombre: " .$reg4["Nombre"] .", Nif: ".$reg4["Nif"] .", Edad: " .$reg4["Edad"] .", Localidad: " .$reg4["Localidad"] .", Provincia: " .$reg4["Provincia"] .", Estado civil: " .$reg4["E_civil"] ."<br/><br/>";
								}
						}else{
							echo "No se ha encontrado ningún registro";
					}
				$conexion->close();
			}

			busqueda(3);
			busqueda(2);
			busqueda(8);
			busqueda(7);
		?>
	</body>
</html>