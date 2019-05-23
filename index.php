<?php 
	require_once("class/matriz.php");
	require_once("class/operaciones.php");
	require_once("class/datos_prueba_matriz.php");
	require_once("class/datos_prueba_operaciones.php");


//Punto 1
//llamo la clase para buscar el arreglo que voy a evaluar
// $o = new Matriz($m1); 
// $o = new Matriz($m2); 
// $o = new Matriz($m3); 
//$o = new Matriz($m4); 
// $o = new Matriz($m5); 
// $o = new Matriz($m2); 
// $o->showMatriz($m6);
// $o->dimension1();


//llamo el metodo para devoleer el entero que define la profundidad
//var_dump($o->dimension());
//llamo el metodo para devolever  el criterio de falso y verdadero que define la cantidad  delos elementos
//var_dump($o->straight());
//Devuelve el número entero resultado de la suma de todos los números incluídos en la matriz sin importar el tamaño o dimensión.
// var_dump($o->compute());




//Punto 2
//llamo la clase para buscar el arreglo que voy a evaluar

// $s = new Operacion($s1);
// $s = new Operacion($s2);
// $s = new Operacion($s3); se activa 
 $s = new Operacion($s4);


//Devuelve un booleano según el siguiente criterio -True: Si el texto recibido corresponde a una operación aritmética (+, -, /, *) matemática. -False:
 //var_dump($s->operation());  se activa resultado
 
 
 //Devuelve el valor computado de la operación aritmética, se deben considerar los paréntesis '(' ')' como agrupaciones de la operación. Devuelve false en el caso de que la operación no pueda ser computada por paréntesis mal agrupados o en el caso de que s.operation sea false.
 var_dump($s->compute());

?> 
