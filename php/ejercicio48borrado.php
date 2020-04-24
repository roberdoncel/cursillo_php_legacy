<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<?php
			
			function borrarImagen($id){
				$conexionDB = new mysqli('localhost', 'root', '','pruebas');//servidor, user, password, base de datos.

				//le pedimos a la base de datos que nos dé el nombre a partir del id.
				$resultado= $conexionDB ->query("SELECT NOMBRE FROM FICHEROS WHERE ID=" .$id);
				$reg = $resultado -> fetch_assoc();

				//cargamos la ruta del archivo.
				$ruta = 'ficheros/' .$reg["NOMBRE"];

				//Si existe ese archivo en esa ruta borramos el archivo y el registro de la base de datos
				if(is_file($ruta)){//Comprueba que existe
					unlink($ruta);//borra el archivo
					$conexionDB ->query("DELETE FROM FICHEROS WHERE ID=" .$id); //borramos el registro en la base de datos		
					header('Location:ejercicio48.html');//carga ejercicio48.html
				}else{
					echo "No existe el archivo guardado con el ID: " .$id ."<br/>";
					echo "<a href='ejercicio48borrar.php'>Volver</a>";
				}
				$conexionDB->close(); 				
				
			}
			//Recogemos el id de la foto a borrar y procedemos a borrarla
			$idSeleccionada=$_GET["id"];
			borrarImagen($idSeleccionada);
		?>
	</body>
</html>