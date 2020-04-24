
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


			$conexionBD ->close();


			include 'vista_entrada.php';


			/* Hay que cargar el gráfico como si fuese una imagen, enlazando al archivo .php */
			echo "<img src='grafico.php'>" ."<br/>";

			echo "<img src='grafico_barras.php'>";
		?>