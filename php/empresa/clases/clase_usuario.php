
<?php
	include 'funciones.php';
	class Usuario{


		function __construct(){
			/* Constructor */
		}

		function login($usuario, $pass){

			$conexionBD = crearConexionBD();
			$resultados =$conexionBD ->query("SELECT ID, USUARIO, NOMBRE, APELLIDOS, PASSWORD, DEPARTAMENTO, PERFIL FROM EMPLEADOS WHERE USUARIO='" .$usuario ."'");

			if(mysqli_num_rows($resultados)!= 0){

				$reg = $resultados -> fetch_assoc();

				if ($reg["USUARIO"]==$usuario && $reg["PASSWORD"]==$pass){

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
		}

		function login_mod2($usuario, $pass){
			$conexionBD = crearConexionBD();
			$resultados =$conexionBD ->query("SELECT ID, USUARIO, NOMBRE, APELLIDOS, PASSWORD, DEPARTAMENTO, PERFIL FROM EMPLEADOS WHERE USUARIO='" .$usuario ."'");

			if(mysqli_num_rows($resultados)!= 0){

				$reg = $resultados -> fetch_assoc();

				if ($reg["USUARIO"]==$usuario && $reg["PASSWORD"]==$pass){

					return $reg['ID'];
				}else{
					return false;
				}
				return false;
			}
			$conexionBD -> close();	
		}

		function obtenerPerfil($idUsuario){
			$conexionBD = crearConexionBD();
			$resultados =$conexionBD ->query("SELECT PERFIL FROM EMPLEADOS WHERE ID='" .$idUsuario ."'");
			if(mysqli_num_rows($resultados)!= 0){

				$reg = $resultados -> fetch_assoc();
				return $reg['PERFIL'];

			}else{
				return 'error';
			}
			$conexionBD -> close();	
		}

	}


?>