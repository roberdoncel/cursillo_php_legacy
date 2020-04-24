<!DOCTYPE html>

<html lang="es">
	<head>
		<title></title>
		<meta charset="UTF-8" />
		<link rel="stylesheet" href="../../css/empresa.css" />
	</head>
	<body>
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

			/* Recogemos el valor de sel de la url si es que se ha pulsado un enlace, o si es la primera vez que se accede se le asigna uno por defecto */
			if(isset($_GET['sel'])){
				$enlaceSel=$_GET['sel'];
			}else{
				$enlaceSel=1;
			}
			

			
			$conexionBD = crearConexionBD();

			//Nombre del entorno
			$entorno = nombrarPerfil($idPerfil,$conexionBD);

			


			/* Recogemos el criterio de búsqueda introducido en el formulario, si es que existe.*/
			if(isset($_POST['busqueda_txt'])){
				$filtroNombre= $_POST['busqueda_txt'];
			}else{
				$filtroNombre="";
			}


			/*Mostramos la tabla según la opción seleccionada */
			if($enlaceSel==1){
				$tabla = mostrarEmpleadosDepartamento($filtroNombre, $departamento);
			}else if($enlaceSel==2){
				$tabla = mostrarTodosProyectos();
			}else if($enlaceSel==3){
				$tabla = mostrarTodosClientes();
			}					
			
			$conexionBD -> close();
			include 'vista_entrada.php';

		?>

			
		
	</body>
</html>