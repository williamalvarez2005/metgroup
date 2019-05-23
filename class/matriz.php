<?php 

//definimos la clase matriz para contruir los metodos de dimension, straight y compute

class Matriz { 
    public $matriz; 
    public $multiUso;
    public $uniforme;
    
    function __construct($matriz) {
       $this->matriz = $matriz;
       // var_dump($matriz);
    }

    // function dimension(){
    //     $args = func_get_args();
    //     if ( count(func_get_args()) == 1){
    //         foreach($args[0] as $key=>$value){
    //             if (is_array($value)){
    //                 $this->multiUso++;
    //                 $this->dimension($value);
    //             }
    //         } 
    //     }elseif (count(func_get_args()) == 0){
    //         $this->multiUso = 0;
    //         $this->dimension($this->matriz);
    //         return ($this->multiUso == 0)?1:$this->multiUso;            
    //     }
    // }
     function dimension(){
        $this->multiUso = 0;
        $tmp = json_encode($this->matriz);
        $tmp = str_split($tmp);
        foreach($tmp as $key => $value){
            if ($value == "[") {
                $this->multiUso++;
            }else{
                return $this->multiUso; 
            }
        }
    }

    function straight(){
        $args = func_get_args();
        if ( count(func_get_args()) == 1){
            foreach($args[0] as $key=>$value){
                if (is_array($value)){
                    $this->straight($value);
                }else{  
                    if ($this->multiUso == 0){
                        $this->multiUso = count($args[0]);
                    }elseif ($this->multiUso <> count($args[0])) {
                        $this->uniforme = false;
                    }
                }
            } 
        }elseif (count(func_get_args()) == 0){
            $this->uniforme = true;
            $this->multiUso = 0;
            $this->straight($this->matriz);
            return $this->uniforme;
        }
    }

    function compute(){
        $args = func_get_args();
        if ( count(func_get_args()) == 1){
            foreach($args[0] as $key=>$value){
                if (is_array($value)){
                    $this->compute($value);
                }else{  
                    $this->multiUso += $value;
                }
            }
        }elseif (count(func_get_args()) == 0){
            $this->multiUso = 0;
            $this->compute($this->matriz);
            return $this->multiUso;
        }
    }
    function showMatriz($matriz){
        foreach($matriz as $key=>$value){
            if (is_array($value)){
                //si es un array sigo recorriendo
                echo 'key:'. $key;
                echo '<br>llamado<br>';
                $this->showMatriz($value);
            }else{  
                //si es un elemento lo muestro
                echo $key.': '.$value ;
                echo '<br>';
            }
        }
    }
} 

?>