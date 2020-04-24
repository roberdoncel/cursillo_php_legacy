<?php
	class coche{
		var $color = 'blanco';
		var $modelo = 'Seat León';
		var $marca = 'Seat';
		var $velocidad = 100;
		var $gasolina = 50;


		function  __construct($col, $mod, $mar, $vel, $gas){
			$this-> color = $col;
			$this-> modelo =$mod;
			$this-> marca= $mar;
			$this-> velocidad =$vel;
			$this-> gasolina = $gas;
		}

		function echarGasolina($litros){
			$this ->gasolina = $this -> gasolina + $litros;
		}
		
		function acelerar(){
			$this-> velocidad =$this -> velocidad + 2;
			$this -> gasolina =$this -> gasolina -1;
		}

	}

?>