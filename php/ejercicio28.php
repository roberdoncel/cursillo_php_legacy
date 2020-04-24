
<?php
	
	$nombre=$_POST["nombre_txt"];
	$localidad=$_POST["localidad_txt"];
	$pais = $_POST["pais_txt"];

	
	//ucwords() transforma la primera letra de cada palabra en mayúsculas.
	$nombre= "Nombre completo: " .ucwords($nombre);
	echo $nombre ."<br/>";

	//strtolower() transforma todas las letras de la cadena de texto a minúsculas.
	$localidad = "Localidad: " .strtolower($localidad);
	echo $localidad."<br/>";

	//strtoupper() transforma todas las letras de la cadena de texto a mayúsculas.
	$pais = "Pais: " .strtoupper($pais);
	echo $pais ."<br/>";

?>