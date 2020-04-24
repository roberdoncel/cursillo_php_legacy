<!DOCTYPE html>

<html lang="es">
	<head>
		<title></title>
	</head>
	<body>
		<?php
			$idEmpleado = $_GET['id'];

			/*init señala si es la primera vez que se accede al php, si es así no efectúa automaticamente la función */
			$estado=$_GET['init'];
			if($_GET['init'] ==0){
				$estado=1;
			}
		?>
		<form name="form1" action="subirfoto.php?init=<?php echo $estado?>&id=<?php echo $idEmpleado ?>" method="post" enctype="multipart/form-data">
			<label>Subir Foto</label>
			<div>
				<input type='file' name='archivo_subir'/>
				<input type='text' name='estado_txt' hidden />
			</div>
			<input type='submit' value='Subir Foto'/>
		</form>
		<?php
			include 'funciones.php';

			
		$conexionBD = crearConexionBD();

		//Consulta para sacar el nombre del perfil del empleado
		$resNombre =$conexionBD ->query("SELECT NOMBRE FROM EMPLEADOS WHERE ID='" .$idEmpleado ."'");
			if(mysqli_num_rows($resNombre)!= 0){
				$reg = $resNombre -> fetch_assoc();
					
				$nombreEmpleado = $reg["NOMBRE"];
				$conexionBD -> close();
				
				if($_GET['init']==1){
					subirArchivo($idEmpleado, $nombreEmpleado);
				}
			}
			

		?>
	</body>
</html>