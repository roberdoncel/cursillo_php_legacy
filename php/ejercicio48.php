
<?php
	function subirArchivo(){

		$dir_destino = "ficheros/";
		$archivo_final = $dir_destino . basename($_FILES["archivo_seleccionado"]["name"]);
		$uploadOk = 1; //Si está en 1 es apto el archivo para subirlo, sino, dará error
		$extension_imagen = pathinfo($archivo_final,PATHINFO_EXTENSION);
		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
			//tmp_name es el nombre del archivo en la carpeta temporal del servidor.
		    $check = getimagesize($_FILES["archivo_seleccionado"]["tmp_name"]);
		    if($check !== false) {
		        echo "El archivo es una imagen tipo - " . $check["mime"] . ".";
		        $uploadOk = 1;
		    } else {
		        echo "El archivo no es una imagen.";
		        $uploadOk = 0;
		    }
		}
		// Comprobamos si existe el archivo
		if (file_exists($archivo_final)) {
		    echo "El archivo ya existe.";
		    $uploadOk = 0;
		}
		// Comprobamos que el tamaño no supera un tamaño máximo fijado
		if ($_FILES["archivo_seleccionado"]["size"] > 500000) {
		    echo "No se puede subir el fichero, es mayor de...";
		    $uploadOk = 0;
		}
		// Si el archivo no tiene ninguna de las siguientes extensiones
		if($extension_imagen != "jpg" && $extension_imagen != "png" && $extension_imagen != "jpeg"
		&& $extension_imagen != "gif" ) {
		    echo "Formato de imagen no válido, seleccionar imágenes jpg, png, jpeg o gif";
		    $uploadOk = 0;
		}
		// Si uploadOk es 0 entonces no se sube ya que no ha cumplido alguna de las condiciones
		if ($uploadOk == 0) {
		    echo "Archivo no subido";
		//Si no hay ningún problema pasamos a subir el archivo
		} else {
		    if (move_uploaded_file($_FILES["archivo_seleccionado"]["tmp_name"], $archivo_final)) {
		    	actualizarDB($_POST["id_txt"], $_FILES["archivo_seleccionado"]["name"]);
		        echo "El archivo ". basename( $_FILES["archivo_seleccionado"]["name"]). " ha sido subido.";
		    } else {
		        echo "Lo siento, ha habido un error subiendo la imagen.";
		    }
		}
	}
	function actualizarDB($ID, $nombreArchivo){
		/*Método que registra el archivo en la base de datos*/
		$conexionDB = new mysqli('localhost', 'root', '','pruebas');//servidor, user, password, base de datos.

		$conexionDB ->query("INSERT INTO FICHEROS (ID, NOMBRE) VALUES(" .$ID .",'" .$nombreArchivo."')");
		$conexionDB->close();
	}

	subirArchivo();

?>
