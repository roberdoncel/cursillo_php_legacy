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


			//Consulta para sacar el nombre del perfil del empleado
			$resPerfil =$conexionBD ->query("SELECT NOMBRE FROM PERFILES WHERE ID='" .$idPerfil ."'");
				if(mysqli_num_rows($resPerfil)!= 0){
					$reg2 = $resPerfil -> fetch_assoc();
					echo "<div class='borderBottom'>";
					echo "<label id='entornoTitle'>Entorno de ".$reg2["NOMBRE"] ."</label>";
					echo "<label id='nombreTitle'>" .$nombre ." " .$apellidos ."</label>";
					echo "</div>";

				}
			$conexionBD -> close();

			//Si estamos trabajando con la tabla empleados, cargar el form de búsqueda de nombre.
			if($enlaceSel==1){
				echo "<div>";
				echo "<form name='form1' action='entrada.php' method='post'>";
				echo "<label>Nombre</label>";
				echo "<input type='text' name='busqueda_txt' />";
				echo "<input type='submit' value='Buscar' />";
				echo "</form>";
				echo "</div>";
			}
		?>
			
		<div id='divEnlace'>
			<a class='enlaces' href='entrada.php?sel=1'>Empleados</a>
			<a class='enlaces'href='entrada.php?sel=2'>Proyectos</a>
			<a class='enlaces'href='entrada.php?sel=3'>Clientes</a>
		</div>

		<?php


			/* Recogemos el criterio de búsqueda introducido en el formulario, si es que existe.*/
			if(isset($_POST['busqueda_txt'])){
				$filtroNombre= $_POST['busqueda_txt'];
			}else{
				$filtroNombre="";
			}
			

			echo "<section id='seccionTabla'>";
			if($enlaceSel==1){
				mostrarTodosEmpleados($filtroNombre);
			}else if($enlaceSel==2){
				mostrarTodosProyectos();
			}else if($enlaceSel==3){
				mostrarTodosClientes();
			}
								
			echo "</section>";

		?>
		
	</body>
</html>