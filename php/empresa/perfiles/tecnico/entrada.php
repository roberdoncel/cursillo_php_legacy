<?php
	session_start();

	include '../../funciones.php';
			$idUsuario = $_SESSION['idUser'];
			$nombre = $_SESSION['nombre'];
			$apellidos = $_SESSION['apellidos'];
			$departamento =$_SESSION['departamento'];
			$idPerfil =$_SESSION["idPerfil"];	

	$conexionBD = crearConexionBD();

			//Nombre del entorno
	$entorno = nombrarPerfil($idPerfil,$conexionBD);

	$tabla= mostrarTodosProyectos();

	include 'vista_cabecera.php';
?>