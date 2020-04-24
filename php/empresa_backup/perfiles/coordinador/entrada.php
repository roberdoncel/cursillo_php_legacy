
		<?php
		/* Es necesario session_start() al inicio del php para poder utilizar las variables $_SESSION. */
			session_start();
		?>

		<!-- Entorno de trabajo para alguien de dirección tras registrarse -->
		<?php
			include '../../funciones.php';

			
			//id del usuario pasado a través de $_SESSION del login.php
			$idUsuario = $_SESSION['idUser'];
			$nombre = $_SESSION['nombre'];
			$apellidos = $_SESSION['apellidos'];
			$departamento =$_SESSION['departamento'];
			$idPerfil =$_SESSION["idPerfil"];			

			
			$conexionBD = crearConexionBD();

			//Nombre del entorno
			$entorno = nombrarPerfil($idPerfil,$conexionBD);

			//Cuando hemos seleccionado ver los proyectos de un cliente, pasa un idCliente y carga sus proyectos. Si no muestra todos los clientes 
			if(isset($_GET['idCliente'])){
				$nombreCliente = nombrarCliente($_GET['idCliente'], $conexionBD);
				$tabla = mostrarProyectosCliente($_GET['idCliente']);
				include '../../vista_cabecera.php';
			}else{
				$tabla = mostrarTodosClientes();
				include '../../vista_cabecera.php';
			}
			
					
			
			$conexionBD -> close();
			

		?>
