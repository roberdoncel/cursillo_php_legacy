<!DOCTYPE html>

<html>
	<head>
		<title></title>
	</head>
	<body>
		<?php
			

				actualizarDatos();
				function actualizarDatos(){

					$id = $_POST["id_num"];
					$nombre =$_POST["nombre_txt"];
					$nif = $_POST["nif_txt"];
					$edad = $_POST["edad"];
					$localidad = $_POST["localidad_txt"];
					$provincia =$_POST["provincia"];
					$eCivil =$_POST["codCivil"];


					$sql = "UPDATE USUARIOS SET Id='".$id ."', Nombre='" .$nombre ."', Nif='" .$nif ."', Edad= '" .$edad ."', Localidad='" .$localidad ."', Provincia='" .$provincia ."', E_civil='" .$eCivil ."' WHERE Id='" .$id ."'";

					$conexionBBDD = new mysqli('localhost', 'root', '','pruebas');
					$conexionBBDD ->query($sql);
					$conexionBBDD->close();
					header('Location: ejercicio44.php');
				}
		?>
	</body>
</html>