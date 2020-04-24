<!DOCTYPE html>

<html>
	<head>
		<title></title>
	</head>
	<body>
		<?php
			$datosForm = array($_POST["usuario_txt"], $_POST["pass_txt"]);

			$datosBBDD = array("Gerardo", "Verde");

			if($datosForm[0] == $datosBBDD[0] && $datosForm[1] == $datosBBDD[1]){
				echo "Hola " .$datosForm[0];
			}else{
				echo "Datos incorrectos";
			}

			/*if($_POST["usuario_txt"]=="Gerardo" && $_POST["pass_txt"]=="Verde" ){
				echo "Hola " .$_POST["usuario_txt"];

			}else{
				echo "Datos incorrectos";
			}*/
		?>
	</body>
</html>