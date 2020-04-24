

		<!-- Entorno de trabajo para alguien de dirección tras registrarse. Hemos borrado la cabecera del html pues está está en vista_cabecera. -->
		
		<?php

			echo "<section id='seccionTabla'>";
			

				/*Tabla Clientes */
				echo "<table class='tabla'>";
				echo "<tr class='encabezadoTabla'>";
				echo "<td class='celdasEncabezado'>ID</td>";
				echo "<td class='celdasEncabezado'>NOMBRE</td>";
				echo "<td class='celdasEncabezado'>DIRECCION</td>";
				echo "<td class='celdasEncabezado'>CONTACTO</td>";
				echo "<td class='celdasEncabezado'>PROYECTOS</td>";
				echo "</tr>";
				foreach ($tabla as $campo) {
					echo "<tr>";
					echo "<td>" .$campo['ID'] ."</td>";
					echo "<td>" .$campo['NOMBRE']."</td>";
					echo "<td>" .$campo['DIRECCION']."</td>";
					echo "<td>" .$campo['CONTACTO']."</td>";
					echo "<td><a href='entrada.php?idCliente=".$campo['ID'] ."'>Ver</a></td>";
					echo "</tr>";
				}
			echo "</section>";

		?>
	</body>
</html>