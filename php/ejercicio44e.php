<!DOCTYPE html>

<html>
	<head>
		<title></title>
	</head>
	<body>

		<!-- DOCUMENTO PHP NO VÁLIDO. REVISAR -->
		<?php
			$id = "";
			$nombre ="";
			$nif = "";
			$edad = "";
			$localidad = "";
			$provincia ="";
			$eCivil ="";
		?>

		<form name="form1" action="ejercicio44e.php" method="post">
			<div>
				Id:<input type="number" name="id" />
			</div>
			<div>
				Nombre:<input type="text" name="nombre_txt" />
			</div>
			<div>
				NIF:<input type="text" name="nif_txt" />
			</div>
			<div>
				Edad:<input type="number" name="edad" />
			</div>
			<div>
				Localidad:<input type="text" name="localidad_txt" /> 
			</div>
			<div>
				Provincia 
				<select name="provincia">
					<option value="Madrid">Madrid</option>
					<option value="Barcelona">Barcelona</option>
					<option value="Alicante">Alicante</option>
					<option value="A coruna">A Coruña </option>
				</select>
			</div>
			<div>
				Estado Civil
				<select name="codCivil">
					<option value="casado">Casado</option>
					<option value="soltero">Soltero</option>
					<option value="viudo">Viudo</option>
					<option value="divorciado">Divorciado</option>
				</select>
			</div>
			<input type="submit" value="Registrar" />
		</form>

		<?php

			if(!empty($_GET["item"])){
				$idSelected = $_GET["item"];
			}

			echo $idSelected;


			if(!empty($_POST["id"]) && !empty($_POST["nombre_txt"]) && !empty($_POST["nif_txt"]) && !empty($_POST["edad"]) && !empty($_POST["localidad_txt"]) && !empty($_POST["provincia"]) && !empty($_POST["codCivil"])){

					$id = $_POST["id"];
					$nombre =$_POST["nombre_txt"];
					$nif = $_POST["nif_txt"];
					$edad = $_POST["edad"];
					$localidad = $_POST["localidad_txt"];
					$provincia =$_POST["provincia"];
					$eCivil =$_POST["codCivil"];

				echo $id .$nombre .$nif .$edad ."<br />";
				echo $idSelected;
				//echo "UPDATE USUARIOS SET Id='".$id ."', Nombre='" .$nombre ."', Nif='" .$nif ."', Edad= '" .$edad ."', Localidad='" .$localidad ."', Provincia='" .$provincia ."', E_civil='" .$eCivil ."' WHERE Id='" .$idSelected"'";
			}

		//	echo $id .$nombre .$nif .$edad;
			//echo "UPDATE USUARIOS SET Id='".$id ."', Nombre='" .$nombre ."', Nif='" .$nif ."', Edad= '" .$edad ."', Localidad='" .$localidad ."', Provincia='" .$provincia ."', E_civil='" .$eCivil ."' WHERE Id='" .$idSelected"'";

			function actualizarDatos($id, $campo, $valor){

				$conexionBBDD = new mysqli('localhost', 'root', '','pruebas');
			//	$conexionBBDD ->query("UPDATE USUARIOS SET " .$campo ."='" .$valor ."' WHERE Id='" .$id ."'");

				//echo "UPDATE USUARIOS SET Id='".$id ."', Nombre='" .$nombre ."', Nif='" .$nif ."', Edad= '" .$edad ."', Localidad='" .$localidad ."', Provincia='" .$provincia ."', E_civil='" .$eCivil ."' WHERE Id='" .$idSelected"'";

				$conexionBBDD->close();
			
			}
		?>
	</body>
</html>