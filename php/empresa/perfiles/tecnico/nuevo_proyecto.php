<!DOCTYPE html>

<html>
	<head>
		<title></title>
	</head>
	<body>
		<form name='form1' action='controlador_nuevo_proyecto.php?enviado=true' method='post'>
			<div>
				<label>Nombre:</label>
				<input type='text' name='nombre_txt' />
			</div>
			<div>
				<label>Duración:</label>
				<input type='text' name='duracion' />
			</div>
			<div>
				<label>Fecha Inicio:</label>
				<input type='text' name='fInicio' placeholder='yyyy-mm-dd'/>
			</div>
			<div>
				<label>Fecha Fin:</label>
				<input type='text' name='fFin' placeholder='yyyy-mm-dd'/>
			</div>
			<div>
				<label>Cliente: </label>
				<?php
					echo "<select name='cliente'>";
					foreach ($clientes as $reg) {
						echo "<option value='".$reg['ID']."'>" .$reg['NOMBRE']."</option>";
					}
					echo "</select>";
				?>
			</div>
			<input type='submit' value='OK' />
		</form>

	</body>
</html>