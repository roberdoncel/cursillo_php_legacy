<?php
	include '../../funciones.php';

	if(isset($_GET['enviado'])){
		//Si el formulario ha sido enviado.
		$mensajeConfirm = registrarProyecto($_POST['nombre_txt'], $_POST['duracion'], $_POST['fInicio'], $_POST['fFin'], $_POST['cliente']);
		include 'vista_confirm_proyecto.php';
	}else{
		//Si venimos desde la tabla proyectos cargamos el formulario.
		$clientes=array();
		$clientes=mostrarTodosClientes();

		include 'nuevo_proyecto.php';
	}


?>