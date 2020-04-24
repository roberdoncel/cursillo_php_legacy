
		<?php
			session_start();
			include '../../funciones.php';
			include '../../clases/clase_bd.php';

			$idUsuario = $_SESSION['idUser'];
			$nombre = $_SESSION['nombre'];
			$apellidos = $_SESSION['apellidos'];
			$departamento =$_SESSION['departamento'];
			$idPerfil =$_SESSION["idPerfil"];

			$tabla = array();
			$objBD = new Bd();
			$tabla = $objBD -> proyectosAprendiz();

			$conexionBD = crearConexionBD();

			//Nombre del entorno
			$entorno = nombrarPerfil($idPerfil,$conexionBD);

			//include '../../vista_cabecera.php';
			include 'vista_entrada.php';

		?>
