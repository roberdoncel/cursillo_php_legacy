<!DOCTYPE html>

<html>
	<head>
		<title></title>
	</head>
	<body>
		
		<?php
			include 'clases/clase_usuario.php';

			$usuario= $_POST["user_txt"];
			$pass = $_POST["pass_txt"];

			$objUsuario = new Usuario();
			$objUsuario -> login($usuario, $pass);

		?>
	</body>
</html>