<!DOCTYPE html>

<html>
	<head>
		<title></title>
	</head>
	<body>
		
		<?php
			$usuario= $_POST["user_txt"];
			$pass = $_POST["pass_txt"];

			$conexionBBDD = new mysqli('localhost', 'root', '','pruebas');
			$conexionBBDD ->query("SET NAMES 'UTF8'");

			$resultados =$conexionBBDD ->query("SELECT * FROM ADMINISTRADORES WHERE Usuario='" .$usuario ."'");	

			if($resultados -> num_rows > 0){

				$reg = $resultados -> fetch_assoc();

				if ($reg["Usuario"]==$usuario && $reg["Password"]==$pass){
					echo "Bienvenido <br />";
					echo "Su última visita fue el " .date("d-m-Y", strtotime($reg["Fecha"]));
				}else{
					echo "Usuario o contraseña incorrecta <br />";
					echo "<a href='ejercicio45.html'>Volver</a>";
				}				
			}else{
				echo "No existe el usuario <br />";
				echo "<a href='ejercicio45.html'>Volver</a>";
			}	
		?>
	</body>
</html>