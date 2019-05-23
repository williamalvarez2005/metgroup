<?php 

// /definimos la clase matriz para contruir los metodos de operacion y compute de la segunda pregunta

class Operacion{ 
    public $cadena; 
    
    function __construct($cadena) {
       $this->cadena = str_replace(' ', '', $cadena);
       // var_dump($cadena);
    }
    
    function operation() { 
        $tmp = str_split($this->cadena);
        $parentesis = 0;
        $numeros = array("1","2","3","4","5","6","7","8","9","0");
        $simbolos = array("+","-","/","*");
        if (in_array("+", $tmp) OR in_array("-", $tmp) OR in_array("/", $tmp) OR in_array("*", $tmp) OR in_array("(", $tmp) OR in_array(")", $tmp) OR in_array("0", $tmp) OR in_array("1", $tmp) OR in_array("2", $tmp) OR in_array("3", $tmp) OR in_array("4", $tmp) OR in_array("5", $tmp) OR in_array("6", $tmp) OR in_array("7", $tmp) OR in_array("8", $tmp) OR in_array("9", $tmp) ) {
            foreach($tmp as $key => $value)
            {
                // echo $value;
                // var_dump(array_search($tmp[$key], $numeros));
                // var_dump(array_search($tmp[$key], $simbolos));
                if($value == "(") {
                    if ($key > 0 AND $key < count($tmp)-1) {
                        if (array_search($tmp[$key+1], $numeros) === NULL AND array_search($tmp[$key-1], $simbolos) === NULL)
                            return false;
                    }
                    $parentesis++;
                }elseif($value == ")"){
                   if ($key > 1 AND $key < count($tmp)-1) {
                        if (array_search($tmp[$key+1], $numeros) === NULL AND array_search($tmp[$key-1], $simbolos) === NULL)
                            return false;
                    }
                    $parentesis--;
                }elseif(array_search($value, $numeros) === NULL OR array_search($value, $simbolos) === NULL){
                    return false;
                }    
            }
            if ($parentesis <> 0) 
                return false;
            return true;
        }else{
            return false;
        }
    } 
    function compute(){
        if ($this->operation()) {
            eval('$var = '.$this->cadena.';');
            return $var;
        }else{
            return false;
        }
    }
    function showCadena(){
        var_dump($this->cadena);
    }
} 

?>