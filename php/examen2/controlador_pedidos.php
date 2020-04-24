<?php
	include 'funciones.php';

	$idCliente=$_GET['idCliente'];
	$pedidos = array();
	$pedidos = mostrarPedidosCliente($idCliente);

	include 'vista_pedidos.php';
?>