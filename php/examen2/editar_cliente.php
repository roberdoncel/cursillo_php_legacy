<?php
	include 'funciones.php';
	$cliente = $_GET['idCliente'];

	$datos=array();
	$datos=recuperarDatosCliente($cliente);

	foreach ($datos as $campo) {
		$id= $campo['ID'];
		$nombre=$campo['NOMBRE'];
		$apellidos=$campo['APELLIDOS'];
		$nif = $campo['NIF'];
		$fNacimiento = $campo['FECHA_NACIMIENTO'];
		$direccion = $campo['DIRECCION'];
		$localidad = $campo['LOCALIDAD'];
		$provincia = $campo['PROVINCIA'];
		$telefono = $campo['TELEFONO'];
	}

	include 'vista_editar_cliente.php';

?>