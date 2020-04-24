<!DOCTYPE html>

<html lang='es'>
	<head>
		<title></title>
		<link rel="stylesheet" href="../../css/empresa.css" />
	</head>
	<body>

		<?php
			echo "<div class='borderBottom'>";
			echo "<label id='entornoTitle'>Entorno de ".$entorno ."</label>";
			echo "<label id='nombreTitle'>" .$nombre ." " .$apellidos ."</label>";
			echo "</div>";
			if(isset($_GET['idCliente'])){
				/* Añade la tabla con los proyectos de ese cliente */
				include 'perfiles/coordinador/vista_proyectos.php';
			}else{
				/* Muestra la tabla con todos los clientes*/
				include 'perfiles/coordinador/vista_entrada.php';
			}
		?>
			
		<div id='divEnlace'>
			<a class='enlaces'href='entrada.php'>Clientes</a>
		</div>
<!-- No tiene el las etiquetas de final del documento porque están incluidas en vista_proyectos.php y vista_entrada.php repectivamente -->