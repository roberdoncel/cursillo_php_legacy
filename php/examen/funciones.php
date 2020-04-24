<?php
	function crearConexionBD(){
				$conexionBD = new mysqli('localhost', 'root', '','pruebas');
				$conexionBD -> query("SET NAMES 'utf8'");
				return $conexionBD;
	}

	function registrarCoche($mod, $mar, $col, $prec, $matr, $fMatDia, $fMatMes,$fMatYear ){

		$conexionBD = crearConexionBD();
		$fMat="";
		if(checkdate($fMatMes,$fMatDia ,$fMatYear)){
			$fMat = $fMatYear ."-" .$fMatMes ."-" .$fMatDia;
			$nuevosValores = "'" .$mod ."','" .$mar ."','" .$col ."'," .$prec .",'" .$matr ."','" .$fMat ."'";

				
			$conexionBD ->query("INSERT INTO COCHES (MODELO, MARCA, COLOR, PRECIO, MATRICULA, F_MATRICULACION) VALUES(" .$nuevosValores .")");

			echo "El vehículo ha sido registrado correctamente <br />";
			echo "<a href='regvehiculos.html'>Añadir otro vehículo</a>";
			echo "<a href='buscarmarca.html'>Realizar consulta de vehículo por marca</a>";
			$conexionBD -> close();

		}else{
			echo "Introduzca la fecha en un formato adecuado";
		}
	}

	function validarFecha($dia, $mes, $año){
		
	}

	function buscarCoche($mar){
		$conexionBD = crearConexionBD();

		$resultados = $conexionBD ->query("SELECT * FROM COCHES WHERE MARCA='" .$mar ."'");	
			if($resultados -> num_rows > 0){	

				while($reg = $resultados -> fetch_assoc()){

					echo "Modelo: " .$reg['MODELO'] .", Marca: " .$reg['MARCA'] .", Color: " .$reg['COLOR'] .", Precio: " .$reg["PRECIO"] .", Matricula: " .$reg["MATRICULA"] .", Fecha de Matriculación: ".$reg["F_MATRICULACION"] ."<br />";
					
				}
				echo "<a href='buscarmarca.html'>Realizar otra consulta de vehículo por marca</a>";
				echo "<a href='regvehiculos.html'>Añadir un vehículo</a>";
			}else{
				echo "No se ha encontrado ningún registro";
			}

		$conexionBD->close();
	}
?>