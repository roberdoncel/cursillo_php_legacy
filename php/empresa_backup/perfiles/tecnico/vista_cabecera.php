<!DOCTYPE html>

<html>
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

			include 'vista_entrada.php';


?>