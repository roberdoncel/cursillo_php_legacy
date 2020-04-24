<!DOCTYPE html>

<html>
<head>
	<title></title>
</head>
<body>
	<?php

		$validacion =$_GET["ok"];
		$RegABorrar = $_GET["index"];

		//Si se ha pulsado Sí (ok=0) entonces se borra el registro del formulario. Si se ha pulsado No, se vuelve a la pantalla inicial.
		if($validacion ==0){
			borrarRegistro($RegABorrar);
			header('Location: ejercicio41.php');
		}else{
			header('Location: ejercicio41.php');
		}

		function borrarRegistro($index){
				$conexionBBDD = new mysqli('localhost', 'root', '','pruebas');
				$conexionBBDD ->query("DELETE FROM USUARIOS WHERE Id='" .$index ."'");

				$conexionBBDD->close();			
			}
	?>
</body>
</html>