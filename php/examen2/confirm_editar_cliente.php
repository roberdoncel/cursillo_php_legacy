
<?php
	include 'funciones.php';

	$mensaje=actualizarDatosCliente($_GET['idCliente'],$_POST['nombre_txt'],$_POST['apellidos_txt'],$_POST['nif_txt'], $_POST['fNacimiento'],$_POST['direccion_txt'],$_POST['localidad_txt'],$_POST['provincia_txt' ],$_POST['telefono_txt']);

	include 'vista_confirm_editar_cliente.php';
?>