<?php

	require_once ('../../libs/jpgraph/jpgraph.php');
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
 
	$width=1000;
	$height=350;

	$graph = new Graph($width,$height);
	$graph->SetScale('intlin');
	$graph->SetShadow();

	$graph->SetMargin(40,40,20,40);
	$graph->title->Set('Ganancias por cada cliente');
	$graph->subtitle->Set('Año 2016');
	$graph->xaxis->title->Set('Mes');
	$graph->yaxis->title->Set('Miles de Euros');

	$graph->xaxis->SetTickLabels($meses);

	$graph->yaxis->title->SetFont( FF_FONT1 , FS_BOLD );
	$graph->xaxis->title->SetFont( FF_FONT1 , FS_BOLD );

	$lineplot=new LinePlot($cliente1);
	$lineplot->SetWeight( 2);
	$lineplot->SetLegend("Cliente 1");
	$graph->Add($lineplot);

	$lineplot2=new LinePlot($cliente2);
	$lineplot2->SetWeight( 2 );
	$lineplot2->SetLegend("Cliente 2");
	$graph->Add($lineplot2);

	$graph->Stroke();
?>