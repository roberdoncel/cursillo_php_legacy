<?php

	function crearConexionBD(){
		$conexionBD = new mysqli('localhost', 'root', '','EMPRESA');
		$conexionBD -> query("SET NAMES 'utf8'");
		return $conexionBD;
	}

	function cargarEntorno($perfil){
		switch ($perfil) {
			case 1:
				header('Location:perfiles/direccion/entrada.php');			
				break;
			case 2:
				header('Location:perfiles/jefe/entrada.php');
				break;
			case 3:
				header('Location:perfiles/coordinador/entrada.php');
				break;
			case 4:
				header('Location:perfiles/tecnico/entrada.php');
				break;
			case 5:
				header('Location:perfiles/aprendiz/entrada.php');
				break;
			case 6:
				header('Location:perfiles/becario/entrada.php');
				break;
			default:
				echo "Perfil no identificado";
				break;
		}
	}

	function mostrarTodosEmpleados($nombreEmpleado){

		$conexionBD = crearConexionBD();

		/* En caso de introducir algún caracter, solo mostrar nombres o apellidos que los contengan. % lo que hace es que acepta los nombres que tengan otros caracteres antes del criterio de búsqueda, en caso de que lo pongamos antes y si lo ponemos detrás pues acepta los nombres o apellidos que tienen otros caracteres distintos detrás del criterio de búsqueda. */
		$resultados =$conexionBD ->query("SELECT * FROM EMPLEADOS WHERE NOMBRE LIKE " ."'%" .$nombreEmpleado ."%'" ." OR APELLIDOS LIKE " ."'%" .$nombreEmpleado ."%'");

		if(mysqli_num_rows($resultados)!= 0){

			echo "<table class='tabla'>";
			echo "<tr class='encabezadoTabla'>";
			echo "<td class='celdasEncabezado'>ID</td>";
			echo "<td class='celdasEncabezado'>NOMBRE</td>";
			echo "<td class='celdasEncabezado'>APELLIDOS</td>";
			echo "<td class='celdasEncabezado'>NIF</td>";
			echo "<td class='celdasEncabezado'>FECHA NACIMIENTO</td>";
			echo "<td class='celdasEncabezado'>DIRECCION</td>";
			echo "<td class='celdasEncabezado'>LOCALIDAD</td>";
			echo "<td class='celdasEncabezado'>PROVINCIA</td>";
			echo "<td class='celdasEncabezado'>USUARIO</td>";
			echo "<td class='celdasEncabezado'>PASSWORD</td>";
			echo "<td class='celdasEncabezado'>ESTADO CIVIL</td>";
			echo "<td class='celdasEncabezado'>DEPARTAMENTO</td>";
			echo "<td class='celdasEncabezado'>ANTIGÜEDAD</td>";
			echo "<td class='celdasEncabezado'>PERFIL</td>";
			echo "</tr>";
			while($reg = $resultados -> fetch_assoc()){
					echo "<tr>";
					echo "<td>" .$reg['ID'] ."</td>";
					echo "<td>" .$reg['NOMBRE']."</td>";
					echo "<td>" .$reg['APELLIDOS']."</td>";
					echo "<td>" .$reg['NIF']."</td>";
					echo "<td>" .$reg['FECHA_NAC']."</td>";
					echo "<td>" .$reg['DIRECCION']."</td>";
					echo "<td>" .$reg['LOCALIDAD']."</td>";
					echo "<td>" .$reg['PROVINCIA']."</td>";
					echo "<td>" .$reg['USUARIO']."</td>";
					echo "<td>" .$reg['PASSWORD']."</td>";
					echo "<td>" .$reg['EST_CIVIL']."</td>";
					echo "<td>" .nombrarDepartamento($reg['DEPARTAMENTO'], $conexionBD)."</td>";
					echo "<td>" .$reg['ANTIGUEDAD']."</td>";
					echo "<td>" .nombrarPerfil($reg['PERFIL'], $conexionBD)."</td>";
					echo "</tr>";
			}
			echo "</table>";
		}else{
			echo "Error al cargar los datos";
		}
		$conexionBD -> close();
	}

	function nombrarDepartamento($idDepartamento, $conexion){
		
		$resultados =$conexion ->query("SELECT NOMBRE FROM DEPARTAMENTOS WHERE ID=" .$idDepartamento);

		if(mysqli_num_rows($resultados)!= 0){
			while($reg = $resultados -> fetch_assoc()){
								
				return $reg['NOMBRE'];

			}
		}
	}

	function nombrarPerfil($idPerfil, $conexion){
		
		$resultados =$conexion ->query("SELECT NOMBRE FROM PERFILES WHERE ID=" .$idPerfil);

		if(mysqli_num_rows($resultados)!= 0){
			$reg = $resultados -> fetch_assoc();
								
				return $reg['NOMBRE'];
		}
	}


	function mostrarTodosProyectos(){
		$tabla=array();
		$conexionBD = crearConexionBD();

		$resultados =$conexionBD ->query("SELECT * FROM PROYECTOS");
		if(mysqli_num_rows($resultados)!= 0){


			while($reg = $resultados -> fetch_assoc()){
				$tabla[]=$reg;
			}
		}else{
			echo "No se han encontrado registros en la tabla proyectos <br />";
		}
		$conexionBD -> close();
		return $tabla;
	}

	function nombrarCliente($idCliente, $conexion){
		$resultados =$conexion ->query("SELECT NOMBRE FROM CLIENTES WHERE ID=" .$idCliente);

		if(mysqli_num_rows($resultados)!= 0){
			$reg = $resultados -> fetch_assoc();
								
				return $reg['NOMBRE'];
		}
		

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
			echo "No se han encontrado registros en la tabla clientes <br />";
		}
		$conexionBD -> close();	
		return $tabla;	
	}

	function mostrarEmpleadosDepartamento($nombreEmpleado, $idDep){
		$tabla=array();
		$conexionBD = crearConexionBD();

		/* En caso de introducir algún caracter, solo mostrar nombres o apellidos que los contengan. % lo que hace es que acepta los nombres que tengan otros caracteres antes del criterio de búsqueda, en caso de que lo pongamos antes y si lo ponemos detrás pues acepta los nombres o apellidos que tienen otros caracteres distintos detrás del criterio de búsqueda. INNER JOIN    ON sirve para combinar tablas. */
		$resultados =$conexionBD ->query("SELECT EMPLEADOS.*, DEPARTAMENTOS.NOMBRE AS NOMBRE_DEPARTAMENTO FROM EMPLEADOS INNER JOIN DEPARTAMENTOS ON EMPLEADOS.DEPARTAMENTO=DEPARTAMENTOS.ID WHERE EMPLEADOS.DEPARTAMENTO=" .$idDep ." AND (EMPLEADOS.NOMBRE LIKE " ."'%" .$nombreEmpleado ."%'" ." OR EMPLEADOS.APELLIDOS LIKE " ."'%" .$nombreEmpleado ."%')");

		if(mysqli_num_rows($resultados)!= 0){


			while($reg = $resultados -> fetch_assoc()){
					$tabla[]=$reg;


			}

		}else{
			echo "No se han encontrado registros";
		}
		$conexionBD -> close();
		return $tabla;
	}

	function subirArchivo($idEmpleado, $nombreEmpleado){

		$dir_destino = "archivos/";
		$extension_imagen = pathinfo(basename($_FILES["archivo_subir"]["name"]),PATHINFO_EXTENSION);
		$archivo_final = $dir_destino . $idEmpleado ."_" .$nombreEmpleado ."." .$extension_imagen;

		$uploadOk = 1; 
			

		if(isset($_POST["submit"])) {

			$check = getimagesize($_FILES["archivo_subir"]["tmp_name"]);
			if($check !== false) {
			    echo "El archivo es una imagen tipo - " . $check["mime"] . ".";
			    $uploadOk = 1;
			} else {
			    echo "El archivo no es una imagen.";
			    $uploadOk = 0;
			}
		}

		if (file_exists($archivo_final)) {
			echo "El archivo ya existe.";
			$uploadOk = 0;
		}

		if ($_FILES["archivo_subir"]["size"] > 500000) {
			echo "No se puede subir el fichero, es mayor de...";
			$uploadOk = 0;
		}

		if($extension_imagen != "jpg" && $extension_imagen != "jpeg" && $extension_imagen != "gif" ) {
			echo "Formato de imagen no válido, seleccionar imágenes jpg, jpeg o gif";
			$uploadOk = 0;
		}

		if ($uploadOk == 0) {
			echo "Archivo no subido";

		} else {
			if (move_uploaded_file($_FILES["archivo_subir"]["tmp_name"], $archivo_final)) {
			    actualizarDB($idEmpleado, $idEmpleado ."_" .$nombreEmpleado ."." .$extension_imagen);
			    echo "El archivo ". basename($_FILES["archivo_subir"]["name"]). " ha sido subido.";
			 } else {
			    echo "Lo siento, ha habido un error subiendo la imagen.";
			}
		}
	}

	function actualizarDB($ID, $nombreArchivo){
		/*Método que inserta el nombre del archivo en la base de datos*/
		$conexionDB = new mysqli('localhost', 'root', '','empresa');//servidor, user, password, base de datos.

		$conexionDB ->query("INSERT INTO FOTOS (ID_EMPLEADO, NOMBRE) VALUES(" .$ID .",'" .$nombreArchivo."')");
		$conexionDB->close();
	}

	function obtenerDatosEmpleado($idEmpleado){
		$texto="";
		$conexionBD = crearConexionBD();
		$resultados =$conexionBD ->query("SELECT * FROM EMPLEADOS WHERE ID=" .$idEmpleado);

		if(mysqli_num_rows($resultados)!= 0){
			while($reg=$resultados->fetch_assoc()){
				$texto = "Nombre:" .$reg['NOMBRE'] ."<br />"
					 ."Apellidos: " .$reg['APELLIDOS']."<br />"
					 ."NIF:" .$reg['NIF']."<br />"
					 ."FECHA DE NACIMIENTO: " .$reg['FECHA_NAC']."<br />"
					 ."DIRECCION: " .$reg['DIRECCION']."<br />"
					 ."LOCALIDAD: " .$reg['LOCALIDAD']."<br />"
					 ."PROVINCIA: " .$reg['PROVINCIA']."<br />"
					 ."ESTADO CIVIL: " .$reg['EST_CIVIL']."<br />"
					 ."DEPARTAMENTO: " .nombrarDepartamento($reg['DEPARTAMENTO'], $conexionBD)."<br />"
					 ."ANTIGÜEDAD: " .$reg['ANTIGUEDAD']."<br />"
					 ."PÉRFIL: " .nombrarPerfil($reg['PERFIL'], $conexionBD)."<br />"
					 .obtenerFotoEmpleado($idEmpleado);

			}

		}	
		return $texto;
	}

	function obtenerFotoEmpleado($idEmpleado){
		$dir_archivos = "archivos/";
		$archivo = "";
		$conexionBD = crearConexionBD();
		$resultados =$conexionBD ->query("SELECT * FROM FOTOS WHERE ID_EMPLEADO=" .$idEmpleado);

		if(mysqli_num_rows($resultados)!= 0){
			if($reg=$resultados ->fetch_assoc()){
				return $dir_archivos .$archivo = $reg['NOMBRE'];
			}
		}else{
			return $archivo="";
		}		
	}

	function mostrarProyectosCliente($idCliente){
		$tabla='';
		$conexionBD = crearConexionBD();
		$resultados =$conexionBD ->query("SELECT * FROM PROYECTOS WHERE ID_CLIENTE=" .$idCliente);
		if(mysqli_num_rows($resultados)!= 0){
			while($reg=$resultados ->fetch_assoc()){
				$tabla[]=$reg;
			}
		}else{
			
		}	

		return $tabla;
	}

	function registrarProyecto($nombre, $duracion, $fInicio, $fFin, $cliente){
		$conexionBD = crearConexionBD();
		$datosInsert = "'" .$nombre ."', '" .$duracion ."', '" .$fInicio ."', '" .$fFin ."'," .$cliente;
		$consultaCompleta = "INSERT INTO PROYECTOS (NOMBRE, DURACION, FECHA_INICIO, FECHA_FIN, ID_CLIENTE) VALUES (".$datosInsert .")";

		if($conexionBD ->query($consultaCompleta)){
			$mensaje = "Se ha insertado correctamente el Proyecto: " .$nombre .", Duración: " .$duracion .", Fecha de Inicio: " .$fInicio .", Fecha de Fin: " .$fFin .", para el Cliente: " .$cliente;
		}else{
			$mensaje="No se han podido introducir los datos";
		}		
		return $mensaje;
	}

?>
