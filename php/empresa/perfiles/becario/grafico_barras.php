<?php
	require_once ('../../libs/jpgraph/jpgraph.php');
	require_once ('../../jpgraph_bar.php');
	require_once ('../../libs/jpgraph/jpgraph_line.php');

	function crearConexionBD(){
		$conexionBD = new mysqli('localhost', 'root', '','EMPRESA');
		$conexionBD -> query("SET NAMES 'utf8'");
		return $conexionBD;
	}

	function mostrarTodasGanancias($id){
		$tabla=array();
		$conexionBD = crearConexionBD();

		$resultados =$conexionBD ->query("SELECT * FROM GANANCIAS WHERE ID_CLIENTE=" .$id);
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

	$TBcliente1 = mostrarTodasGanancias(1);
	$TBcliente2 = mostrarTodasGanancias(2);


	$cliente1 = array();
	foreach ($TBcliente1 as $campo) {
		$cliente1[] = $campo['GANANCIAS'];
	}

	$cliente2 = array();
	foreach ($TBcliente2 as $campo) {
		$cliente2[] = $campo['GANANCIAS'];
	}

	$meses = array();
	foreach ($TBcliente1 as $campo) {
			$meses[]= $campo['MES'];
	}


	$graph->SetScale("textlin");
	$graph->SetY2Scale("lin",0,90);
	$graph->SetY2OrderBack(false);


	$graph->SetMargin(35,50,20,5);

	$graph->xaxis->SetTickLabels($meses);

	$b1plot = new BarPlot($cliente1);
	$b2plot = new BarPlot($cliente2;

	$gbbplot = new AccBarPlot(array($b1plot,$b2plot));

	$graph->Add($gbbplot);

	$graph->Stroke();

?>