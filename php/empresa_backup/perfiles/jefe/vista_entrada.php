<!DOCTYPE html>

<html lang="es">
	<head>
		<title></title>
		<meta charset="UTF-8" />
		<link rel="stylesheet" href="../../css/empresa.css" />
	</head>
	<body>

		<!-- Entorno de trabajo para alguien de dirección tras registrarse -->
		<?php

			

			/* Recogemos el valor de sel de la url si es que se ha pulsado un enlace, o si es la primera vez que se accede se le asigna uno por defecto */
			if(isset($_GET['sel'])){
				$enlaceSel=$_GET['sel'];
			}else{
				$enlaceSel=1;
			}
			


			echo "<div class='borderBottom'>";
			echo "<label id='entornoTitle'>Entorno de ".$entorno ."</label>";
			echo "<label id='nombreTitle'>" .$nombre ." " .$apellidos ."</label>";
			echo "</div>";

			//Si estamos trabajando con la tabla empleados, cargar el form de búsqueda de nombre.
			if($enlaceSel==1){
				echo "<div>";
				echo "<form name='form1' action='entrada.php' method='post'>";
				echo "<label>Nombre</label>";
				echo "<input type='text' name='busqueda_txt' />";
				echo "<input type='submit' value='Buscar' />";
				echo "</form>";
				echo "</div>";
			}
		?>
			
		<div id='divEnlace'>
			<a class='enlaces' href='entrada.php?sel=1'>Empleados</a>
			<a class='enlaces'href='entrada.php?sel=3'>Clientes</a>
		</div>
		
		<?php

			echo "<section id='seccionTabla'>";
			if($enlaceSel==1){
				/*Tabla Empleados */
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
			

			foreach ($tabla as $campo) {
					echo "<tr>";
					echo "<td>" .$campo['ID'] ."</td>";
					echo "<td>" .$campo['NOMBRE']."</td>";
					echo "<td>" .$campo['APELLIDOS']."</td>";
					echo "<td>" .$campo['NIF']."</td>";
					echo "<td>" .$campo['FECHA_NAC']."</td>";
					echo "<td>" .$campo['DIRECCION']."</td>";
					echo "<td>" .$campo['LOCALIDAD']."</td>";
					echo "<td>" .$campo['PROVINCIA']."</td>";
					echo "<td>" .$campo['USUARIO']."</td>";
					echo "<td>" .$campo['PASSWORD']."</td>";
					echo "<td>" .$campo['EST_CIVIL']."</td>";
					echo "<td>" .$campo['NOMBRE_DEPARTAMENTO']."</td>";
					echo "<td>" .$campo['ANTIGUEDAD']."</td>";
					echo "<td>" .$campo['PERFIL']."</td>";
					echo "<td>";
					echo "<a href='#'><img class='icoTablas' src='../../media/img/file_edit.png' title='Editar' alt='Icono Editar'></a>";
					echo "<a href='#'><img class='icoTablas' src='../../media/img/delete.png' title='Borrar' alt='Icono Borrar'></a>";
					echo "<a href='../../exportar_pdf.php?id=" .$campo['ID'] ."'><img class='icoTablas' src='../../media/img/export.png' title='Exportar' alt='Icono Exportar'></a>";
					echo "<a href='../../subirfoto.php?id=" .$campo['ID']  ."&init=0'><img class='icoTablas' src='../../media/img/subir_foto.png' title='Subir Foto' alt='Icono Subir foto'></a>";

					echo "</td>";
					echo "</tr>";
			}
			echo "</table>";
			
			}else if($enlaceSel == 2){
				/*Tabla Proyectos */
				echo "<table class='tabla'>";
				echo "<tr class='encabezadoTabla'>";
				echo "<td class='celdasEncabezado'>ID</td>";
				echo "<td class='celdasEncabezado'>NOMBRE</td>";
				echo "<td class='celdasEncabezado'>DURACIÓN</td>";
				echo "<td class='celdasEncabezado'>FECHA INICIO</td>";
				echo "<td class='celdasEncabezado'>FECHA FIN</td>";
				echo "<td class='celdasEncabezado'>CLIENTE</td>";
				echo "</tr>";
				echo "<tr>";
				foreach ($tabla as $campo) {
					echo "<td>" .$campo['ID'] ."</td>";
					echo "<td>" .$campo['NOMBRE']."</td>";
					echo "<td>" .$campo['DURACION']."</td>";
					echo "<td>" .$campo['FECHA_INICIO']."</td>";
					echo "<td>" .$campo['FECHA_FIN']."</td>";
					echo "<td>" .$campo['ID_CLIENTE']."</td>";
					echo "</tr>";
				}
				echo "</table>";

			}else if($enlaceSel == 3){
				/*Tabla Clientes */
				echo "<table class='tabla'>";
				echo "<tr class='encabezadoTabla'>";
				echo "<td class='celdasEncabezado'>ID</td>";
				echo "<td class='celdasEncabezado'>NOMBRE</td>";
				echo "<td class='celdasEncabezado'>DIRECCION</td>";
				echo "<td class='celdasEncabezado'>CONTACTO</td>";
				echo "</tr>";
				foreach ($tabla as $campo) {
					echo "<tr>";
					echo "<td>" .$campo['ID'] ."</td>";
					echo "<td>" .$campo['NOMBRE']."</td>";
					echo "<td>" .$campo['DIRECCION']."</td>";
					echo "<td>" .$campo['CONTACTO']."</td>";
					echo "</tr>";
				}
			}

			echo "</section>";

		?>
		
	</body>
</html>