<!DOCTYPE html>

<html>
	<head>
		<title></title>
	</head>
	<body>
		
		<?php
			include 'funciones.php';

			$usuario= $_POST["user_txt"];
			$pass = $_POST["pass_txt"];

			$conexionBD = crearConexionBD();

			$resultados =$conexionBD ->query("SELECT ID, USUARIO, NOMBRE, APELLIDOS, PASSWORD, DEPARTAMENTO, PERFIL FROM EMPLEADOS WHERE USUARIO='" .$usuario ."'");	

			if(mysqli_num_rows($resultados)!= 0){

				$reg = $resultados -> fetch_assoc();

				if ($reg["USUARIO"]==$usuario && $reg["PASSWORD"]==$pass){

					/*Las variables $_SESSION permiten pasar información entre archivos php sin necesidad de meterlo en un enlace.
					Es necesario incluir al inicio del php session_start()*/ 
					session_start();
					$_SESSION['idUser']=$reg["ID"];
					$_SESSION['nombre'] =$reg["NOMBRE"];
					$_SESSION['apellidos']=$reg["APELLIDOS"];
					$_SESSION['departamento']=$reg["DEPARTAMENTO"];
					$_SESSION["idPerfil"] =$reg["PERFIL"];
					cargarEntorno($reg["PERFIL"]);
									
				}else{
					echo "Usuario o contraseña incorrecta <br />";
					echo "<a href='login.html'>Volver</a>";
				}

			}else{
				echo "No existe el usuario <br />";
				echo "<a href='login.html'>Volver</a>";
			}	

			$conexionBD -> close();
		?>
	</body>
</html>