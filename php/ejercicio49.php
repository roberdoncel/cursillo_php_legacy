<?php


	class piedrecita{

		var $color;
		var $peso;
		var $velocidad;
		var $tamaño;

		function aumentarVelocidad(){

			$this -> velocidad = $this -> velocidad +1;
		}
		function aumentarVelocidadPersonalizado($incremento){
			$this -> velocidad = $this -> velocidad + $incremento;
		}
	}


	$piedrecita_uno = new piedrecita();
	$piedrecita_dos = new piedrecita();

	$piedrecita_dos -> color = 'azul';
	echo $piedrecita_dos -> color ."<br />";

	$piedrecita_dos -> velocidad = 3;
	$piedrecita_dos -> aumentarVelocidad();
	echo $piedrecita_dos -> velocidad ."<br />";


	$piedrecita_tres = new piedrecita();
	$piedrecita_tres -> velocidad = 2;
	$piedrecita_tres -> aumentarVelocidad();
	$piedrecita_tres -> aumentarVelocidad();
	$piedrecita_tres -> aumentarVelocidad();
	echo $piedrecita_tres -> velocidad ."<br />";



	$piedrecita_cinco = new piedrecita();
	$piedrecita_cinco -> velocidad = 3;
	echo "Velocidad inicial de la piedrecita: " .$piedrecita_cinco -> velocidad."km/h<br />";

	$piedrecita_cinco ->aumentarVelocidadPersonalizado(8);
	echo "Nueva velocidad de la piedrecita: " . $piedrecita_cinco -> velocidad ."km/h<br />";



	include 'classcoche.php';
	$coche = new coche('rojo','320', 'bmw', 80, 10);
	$coche -> echarGasolina(20);
	echo "Depósito tras echar gasolina: " .$coche -> gasolina ."L.<br />";
	$coche -> acelerar();
	echo "Cantidad de gasolina actual: " .$coche -> gasolina ."L.<br />";
	echo "Velocidad actual: " .$coche -> velocidad .".km/h<br /><br />";


	echo "Creación de un objeto coche utilizando constructores.<br />";
	$coche2 = new coche('rojo','320', 'bmw', 80, 10);
	echo "Color del coche: " .$coche2 -> color ."<br />";
	echo "Modelo del coche: " .$coche2 -> modelo ."<br />";
	echo "Marca del coche: " .$coche2 -> marca ."<br />";
	echo "Velocidad: " .$coche2 -> velocidad ."km/h.<br />";
	echo "Depósito: " .$coche2 -> gasolina ."L.<br /><br />";

	echo 'Crear 10 objetos del tipo piedrecita';
	$coleccion = array();
	for($i = 0; $i<10; $i++){
		$piedra = new piedrecita();
		$piedra -> peso = $i;
		$coleccion[]=$piedra;
	}
	var_dump($coleccion);

?>