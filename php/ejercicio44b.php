<!DOCTYPE html>

<html>
	<head>
		<title></title>
	</head>
	<body>
		<?php
		$registroABorrar = $_GET["item"];
			
		function borrarRegistro($index){
				$conexionBBDD = new mysqli('localhost', 'root', '','pruebas');
				$conexionBBDD ->query("DELETE FROM USUARIOS WHERE Id='" .$index ."'");

				$conexionBBDD->close();			
		}

		borrarRegistro($registroABorrar);
		header('Location: ejercicio44.php');
			
		?>
	</body>
</html>