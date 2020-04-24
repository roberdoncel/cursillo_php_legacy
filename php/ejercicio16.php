<!DOCTYPE html>

<html>
<head>
	<title></title>
</head>
<body>
	<?php
	
	echo "Buenos días " . $_POST["nombre_txt"] . " " .$_POST["apellidos_txt"] . " y NIF " . $_POST["nif_txt"] . "<br />" ; 
	
	$datos_form = array($_POST["nombre_txt"], $_POST["apellidos_txt"], $_POST["nif_txt"]);

	echo "Usando array. Nombre: " . $datos_form[0] . ". Apellidos: " . $datos_form[1] . ". NIF: " . $datos_form[2];
	?>
</body>
</html>