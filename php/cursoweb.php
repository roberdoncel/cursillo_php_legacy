<!DOCTYPE html>

<html>
	<head>
		<title></title>
	</head>
	<body>
		<a href="$reg['descripcion']"></a>
		<div>
		<form name='form1' action='cursoweb.php' method='post'>
			<label>Palabras claves </label>
			<input type='text' name='busqueda_txt' />
			<input type='submit' value='Buscar' />
			</form>
		</div>
		<?php
			function mostrarTabla($palabrasClave){

				$conexionBBDD = new mysqli('localhost','root', '', 'curso_web');
				$conexionBBDD ->query("SET NAMES 'UTF8'");
				$resultados= $conexionBBDD -> query("SELECT * FROM PHP WHERE Descripcion LIKE " ."'%" .$palabrasClave ."%'");

				if($resultados -> num_rows > 0){

					while($reg= $resultados -> fetch_assoc()){
						$link = "<a href='" .$reg['Nombre'] ."'>" .$reg['Nombre'] ."</a>";
						echo $link ."  " .$reg['Descripcion'] ."<br />"."<br />";
						
					}
				}else{
					echo "No se han encontrado registros";
				}

			}

			if(isset($_POST['busqueda_txt'])){
				$palabrasClave= $_POST['busqueda_txt'];
			}else{
				$palabrasClave="";
			}

			mostrarTabla($palabrasClave);
		?>
	</body>
</html>