<!DOCTYPE html>

<html>
	<head>
		<title></title>
	</head>
	<body>
		<?php

			$id = $_GET["item"];
			$nombre =$_GET["nombre"];
			$nif = $_GET["nif"];
			$edad = $_GET["edad"];
			$localidad = $_GET["localidad"];
			$provincia =$_GET["provincia"];
			$eCivil =$_GET["ecivil"];
		?>
		<form name="form1" action="ejercicio44g.php" method="post">
			<div>
				Id:<input type="number" name="id_num" value="<?php echo $id ?>" READONLY/>
				<!-- También se pueden enviar info de forma oculta con el atributo hidden -->
			</div>
			<div>
				Nombre:<input type="text" name="nombre_txt" value="<?php echo $nombre;?>"/>
			</div>
			<div>
				NIF:<input type="text" name="nif_txt" value="<?php echo $nif;?>"/>
			</div>
			<div>
				Edad:<input type="number" name="edad" value="<?php echo $edad;?>"/>
			</div>
			<div>
				Localidad:<input type="text" name="localidad_txt" value="<?php echo $localidad;?>"/> 
			</div>
			<div>
				Provincia 
				<select name="provincia" value="<?php echo $provincia;?>">
					<option value="Madrid">Madrid</option>
					<option value="Barcelona">Barcelona</option>
					<option value="Alicante">Alicante</option>
					<option value="A coruna">A Coruña </option>
				</select>
			</div>
			<div>
				Estado Civil
				<select name="codCivil" value="<?php echo $eCivil;?>">
					<option value="casado">Casado</option>
					<option value="soltero">Soltero</option>
					<option value="viudo">Viudo</option>
					<option value="divorciado">Divorciado</option>
				</select>
			</div>
			<input type="submit" value="Registrar" />
		</form>
	</body>
</html>