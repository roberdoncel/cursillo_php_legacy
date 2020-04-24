		<?php
			/*Tabla de proyectos */
			echo "<section id='seccionTabla'>";
			echo "<table class='tabla'>";
			echo "<tr class='encabezadoTabla'>";
			echo "<td class='celdasEncabezado'>ID</td>";
			echo "<td class='celdasEncabezado'>NOMBRE</td>";
			echo "<td class='celdasEncabezado'>DURACIÓN</td>";
			echo "<td class='celdasEncabezado'>FECHA INICIO</td>";
			echo "<td class='celdasEncabezado'>FECHA FIN</td>";
			echo "<td class='celdasEncabezado'>CLIENTE</td>";
			echo "</tr>";
			foreach ($tabla as $reg) {
					echo "<tr>";
					echo "<td>" .$reg['ID'] ."</td>";
					echo "<td>" .$reg['NOMBRE']."</td>";
					echo "<td>" .$reg['DURACION']."</td>";
					echo "<td>" .$reg['FECHA_INICIO']."</td>";
					echo "<td>" .$reg['FECHA_FIN']."</td>";
					echo "<td>" .$reg['ID_CLIENTE']."</td>";
					echo "</tr>";
			}
			echo "</table>";
			echo"</section>";
		?>
		<input type='button' value='Nuevo Proyecto' onclick="location.href='controlador_nuevo_proyecto.php'" />
	</body>
</html>