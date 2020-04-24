
<?php

	function crearConexionBD(){
		$conexionBD = new mysqli('localhost', 'root', '','EXAMEN');
		$conexionBD -> query("SET NAMES 'utf8'");
		return $conexionBD;
	}
	function mostrarTodosClientes(){
		$tabla=array();
		$conexionBD = crearConexionBD();

		$resultados =$conexionBD ->query("SELECT * FROM CLIENTES");
		if(mysqli_num_rows($resultados)!= 0){

			while($reg = $resultados -> fetch_assoc()){
				$tabla[]=$reg;
			}
		}else{
			//echo "No se han encontrado registros en la tabla CLIENTES <br />";
		}
		$conexionBD -> close();
		return $tabla;
	}

	function mostrarPedidosCliente($idCliente){
		$tabla=array();
		$conexionBD = crearConexionBD();

		$resultados =$conexionBD ->query("SELECT * FROM PEDIDOS WHERE ID_CLIENTE=" .$idCliente);
		if(mysqli_num_rows($resultados)!= 0){

			while($reg = $resultados -> fetch_assoc()){
				$tabla[]=$reg;
			}
		}else{
			//echo "No se han encontrado registros en la tabla CLIENTES <br />";
		}
		$conexionBD -> close();
		return $tabla;
	}

	function recuperarDatosCliente($idCliente){
		$tabla=array();
		$conexionBD = crearConexionBD();

		$resultados =$conexionBD ->query("SELECT * FROM CLIENTES WHERE ID=" .$idCliente);
		if(mysqli_num_rows($resultados)!= 0){

			while($reg = $resultados -> fetch_assoc()){
				$tabla[]=$reg;
			}
		}else{
			//echo "No se han encontrado registros en la tabla CLIENTES <br />";
		}
		$conexionBD -> close();
		return $tabla;
	}

	function actualizarDatosCliente($idCliente, $nombre, $apellidos, $nif, $fNacimiento,$direccion,$localidad, $provincia,$telefono){

		$mensaje='';
		$conexionBD = crearConexionBD();

		if($conexionBD ->query("UPDATE CLIENTES SET NOMBRE ='$nombre', APELLIDOS='$apellidos', NIF='$nif', FECHA_NACIMIENTO='$fNacimiento', DIRECCION='$direccion', LOCALIDAD='$localidad', PROVINCIA='$provincia', TELEFONO='$telefono' WHERE ID=" .$idCliente)){
			$mensaje='Se han actualizado los datos correctamente';
		}else{
			$mensaje='Error al actualizar los datos';
		}
		
		$conexionBD->close();
		return $mensaje;
	}

?>