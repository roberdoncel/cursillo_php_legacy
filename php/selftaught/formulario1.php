<!DOCTYPE html>

<html>
	<head>
		<title>Validación formulario</title>
	</head>
	<body>
		<!-- Es necesario incluir el php antes que el html porque si no dará error
			 diciendo que no están definidas las variables de error. -->
		<?php
			$name = $email = $gender = $comment = $website = "";
			$nameErr = $emailErr = $genderErr = $websiteErr ="";
			if($_SERVER["REQUEST_METHOD"] == "POST"){
				if(empty($_POST["name"])) $nameErr = "El nombre es requerido";
				else{
					$name = test_input($_POST["name"]);
					//preg_match comprueba que el segundo parámetro cumple las condiciones marcadas en el primero.
					if(!preg_match("/^[a-zA-Z ]*$/", $name)) $nameErr ="Solo se permiten letras y espacios en blanco";
				} 

				if(empty($_POST["email"])) $emailErr = "El email no es válido";
				else{
					$email = test_input($_POST["email"]);

					//Comprueba si el email cumple el formato adecuado.
					if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
						$emailErr = "Formato de email incorrecto";
					}
				} 

				if(empty($_POST["website"])) $website ="";
				else{
					$website = test_input($_POST["website"]);
					if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)){
						$websiteErr="URL no válida";
					}
				} 

				if(empty($_POST["comment"])) $comment="";
				else $comment = test_input($_POST["comment"]);
				
				if(empty($_POST["gender"])) $genderErr="Selecciona tu sexo";
				else $gender = test_input($_POST["gender"]);
			}

			function test_input($data){
				$data = trim($data); //Quita espacios, saltos de linea...
				$data = stripslashes($data);//Quita las barras \.
				$data = htmlspecialchars($data);//evita las inyecciones de código maliciosa.
				return $data;
			}
		?>


		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			<!-- PHP_SELF da el nombre de este archivo.
				 La combinación con $_SERVER dice que se valide este formulario
				 utilizando el código php contenido en este archivo.
				 htmlspecialchars lo que hace es sustituir caracteres especiales a 
				 elementos html para que no se pueda hackear la web haciendo una inyección php -->

				 <!-- Escribir la variable php en el value sirve para que al enviar el formulario, no se borren los datos de la caja de texto. -->
			Nombre: <input type="text" name="name" value="<?php echo $name; ?>">
			<span class="error">* <?php echo $nameErr;?></span>
			<br><br>
			E-mail: <input type="text" name="email" value="<?php echo $email; ?>">
			<span class="error">* <?php echo $emailErr;?></span>
			<br><br>
			Website: <input type="text" name="website" value="<?php echo $website; ?>">
			<span class="error"><?php echo $websiteErr;?></span>
			<br><br>
			Comentario: <textarea name="comment" rows="5" cols="40"><?php echo $comment; ?></textarea>
			<br><br>

			Género:
			<!-- Incluimos el extracto de php dentro de la etiqueta input y si el valor de la variable se corresponde con la opción le pasamos el checked para que mantenga marcada -->
			<input type="radio" name="gender"
			 <?php if(isset($gender)&& $gender=="mujer")echo "checked";?>
			 value="mujer">Mujer
			<input type="radio" name="gender"
			 <?php if(isset($gender) && $gender=="hombre") echo "checked"; ?>
			 value="hombre">Hombre
			<span class="error">* <?php echo $genderErr;?></span>
			<br><br>
			<input type="submit" name="submit" value="Submit"> 
		</form>



	</body>
</html>