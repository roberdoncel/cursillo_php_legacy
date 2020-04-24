
<?php

	class Usuario{


		function __construct(){
			/* Constructor */
		}

		function login($usuario, $pass, $conexionBD){
			$resultados =$conexionBD ->query("SELECT ID, USUARIO, NOMBRE, APELLIDOS, PASSWORD, DEPARTAMENTO, PERFIL FROM EMPLEADOS WHERE USUARIO='" .$usuario ."'");

			if(mysqli_num_rows($resultados)!= 0){

				$reg = $resultados -> fetch_assoc();

				if ($reg["USUARIO"]==$usuario && $reg["PASSWORD"]==$pass){

					return $reg['ID'];
									
				}else{
					
					return false;
				}

			}else{
				return false;
			}	
		}

		function obtenerPerfil($idUsuario, $conexionBD){

			$resultados =$conexionBD ->query("SELECT PERFIL FROM EMPLEADOS WHERE ID='" .$idUsuario ."'");
			if(mysqli_num_rows($resultados)!= 0){

				$reg = $resultados -> fetch_assoc();
				return $reg['PERFIL'];

			}else{
				return 'error';
			}
		}

	}


?>