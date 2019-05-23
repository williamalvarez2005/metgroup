<?php
class Matriz {
	public $min;
	public $max;
	public $filas;
	public $columnas;
	
	public function __construct(){
		$this->min=1;
		$this->max=99;
		$this->filas=10;
		$this->columnas=8;
	}
	public function creacion_matrix(){
		$matrix=array();
		$posicion='';
		for ($i=0;$i<$this-fila;i++){
			$letra='A';
			for ($j=0;$j<$this-columna;j++){
				$matrix[$i][$j]=rand(this->$min,this->$max);
				$posicion=$letra.$i.'-'.$matrix[$i][$j].';';
				++$letra;
			}
		}
		return $posicion;
	}
}
?>


