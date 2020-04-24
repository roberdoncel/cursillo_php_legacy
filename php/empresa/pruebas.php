<!DOCTYPE html>


<html>
	<head>
		<title></title>
	</head>
	<body>
		<?php
			include 'clases/clase_usuario.php';

			$usuario = 'ros';
			$pass ='azul';
			$idUsuario = 3;

			$conexionBD = crearConexionBD();

			$objUsuario = new Usuario();

			$usuarioValidado = $objUsuario -> login_mod2($usuario, $pass);

			if($usuarioValidado !=0){
				echo 'El Id del usuario es: ' .$usuarioValidado .'<br />';
			}else{
				echo 'Usuario o contraseña incorrecta<br />';
			}
			

			$perfil = $objUsuario -> obtenerPerfil($idUsuario);
			echo 'El número de perfil es: ' .$perfil .'<br />';

		?>
	</body>
</html>