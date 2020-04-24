<!DOCTYPE html>

<html>
	<head>
		<title></title>
	</head>
	<body>
		<form name='form1' action='confirm_editar_cliente.php?idCliente=<?php echo $id ?>' method='post'>
			<div>
				<label>NOMBRE:</label>
				<input type='text' name='nombre_txt' value="<?php echo $nombre ?>" />
			</div>
			<div>
				<label>APELLIDOS:</label>
				<input type='text' name='apellidos_txt'  value="<?php echo $apellidos ?>"/>
			</div>
			<div>
				<label>NIF:</label>
				<input type='text' name='nif_txt' value="<?php echo $nif ?>"/>
			</div>
			<div>
				<label>FECHA_NACIMIENTO:</label>
				<input type='text' name='fNacimiento' placeholder='yyyy-mm-dd' value="<?php echo $fNacimiento ?>"/>
			</div>
			<div>
				<label>DIRECCION:</label>
				<input type='text' name='direccion_txt' value="<?php echo $direccion ?>"/>
			</div>
			<div>
				<label>LOCALIDAD</label>
				<input type='text' name='localidad_txt' value="<?php echo $localidad ?>"/>
			</div>
			<div>
				<label>PROVINCIA</label>
				<input type='text' name='provincia_txt' value="<?php echo $provincia ?>" />
			</div>
			<div>
				<label>TELEFONO</label>
				<input type='text' name='telefono_txt' value="<?php echo $telefono ?>" />
			</div>
			<input type='submit' value='Actualizar' />
		</form>
	</body>
</html>