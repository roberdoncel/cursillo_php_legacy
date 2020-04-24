<?php 

	class Bd{

		function proyectosAprendiz(){
			$tabla=array();
			$conexionBD = crearConexionBD();

			$resultados =$conexionBD ->query("SELECT * FROM PROYECTOS");
			if(mysqli_num_rows($resultados)!= 0){


				while($reg = $resultados -> fetch_assoc()){
					$tabla[]=$reg;
				}
			}else{
				echo "No se han encontrado registros en la tabla proyectos <br />";
			}
			$conexionBD -> close();
			return $tabla;
		}
	}

?>