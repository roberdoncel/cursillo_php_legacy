<!DOCTYPE html>

<html lang="es">
	<head>
		<title>Uso de JSON y MySQL</title>
		<meta charset="UTF-8" />
	</head>
	<body>

		<?php

			//parámetros: servidor, usuario, password, base de datos
			$conexionBD = new mysqli('localhost', 'root', '','tutoriales');
			
			//Realizamos la consulta en la que pedimos que nos dé todos los campos de la tabla USUARIOS y la almacenamos en $resultado.
			$resultado =$conexionBD ->query("select * from FRUTAS");

			//array que contendrá todos los resultados de la consulta
			$arrayMultidimensional = array();
			$i=0;
			
			if(mysqli_num_rows($resultado) > 0){
					
				while($fila = mysqli_fetch_array($resultado)){
					$arrayMultidimensional[$i] = $fila;
					$i++;
				}
			}else{
				echo "Resusltado vacío";
			}
			$conexionBD->close();	

			echo "<h3>Consulta traducida a JSON: <br /></h3>";

			//mostramos los resultados de la matriz convertidos al formato json
			echo json_encode($arrayMultidimensional);

			echo "<br /><br /><h3>Consulta sin traducir a JSON, mostrando en pantalla por print_r(): <br /></h3>";
			print_r($arrayMultidimensional);


			echo "<br /><br /><h2>Mostrar los datos tras descodificar el json con json_decode() /></h2>";

			$arrayJSON = json_encode($arrayMultidimensional);
			$arrayJsonDecoded = json_decode($arrayJSON);

			echo "<br /><h3>Mostrar un elemento del array /></h3>";

			echo $arrayJsonDecoded[0] ->Nombre;

			echo "<br /><br /><h3>Mostrar todos elementos usando foreach /></h3>";
			foreach ($arrayJsonDecoded as $key) {
				$id = $key -> Id;
				$nombre_fruta = $key -> Nombre;
				$cantidad = $key -> Cantidad;
				echo $id ." " .$nombre_fruta ." " .$cantidad ."<br />";
			}

			echo "<br /><br /><h3>Mostrar todos elementos usando bucle for /></h3>";

			for($j=0; $j<count($arrayJsonDecoded);$j++){
				$id=$arrayJsonDecoded[$j] -> Id;
				$nombre_fruta = $arrayJsonDecoded[$j] -> Nombre;
				$cantidad = $arrayJsonDecoded[$j] -> Cantidad;
				echo $id ." " .$nombre_fruta ." " .$cantidad ."<br />";
			}
		?>
	</body>
</html>