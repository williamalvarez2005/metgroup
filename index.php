<?php 
	require_once("class/matriz.php");
	require_once("class/operaciones.php");
	require_once("class/datos_prueba_matriz.php");
	require_once("class/datos_prueba_operaciones.php");


//Punto 1
//$o = new Matriz($m1); 
// $o = new Matriz($m2); 
// $o = new Matriz($m3); 
//$o = new Matriz($m4); 
// $o = new Matriz($m5); 
// $o = new Matriz($m2); 
// $o->showMatriz($m6);
// $o->dimension1();
//var_dump($o->dimension());
//var_dump($o->straight());
// var_dump($o->compute());




//Punto 2
//$s = new Operacion($s1);
// $s = new Operacion($s2);
// $s = new Operacion($s3); se activa 
// $s = new Operacion($s4);
 //var_dump($s->operation());  se activa resultado
// var_dump($s->compute());

?> 
<html lang="es">
	<head>
		<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
		<title>Matriz</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/validador.js"></script>
	</head>
<body>
	<div class="container">
		<div class="row">
			<h2 style="text-align:center">Prueba</h2>
			<h4 style="text-align:center" >Met 2019</h4>
		</div>
		<div class="row">
			<h5 style="text-align:center" >Prueba 1</h5>

					<label for="prueba1" class="col-sm-8 control-label">Elige la Dimesión</label>
					<div class="col-sm-8">
						 <select id="ddimension" onchange="ddimension();">" 
							<option>Dimesion a: <?php $o = new Matriz($m1);
												    var_dump($o->dimension()); ?>
							</option>
							<option>Dimesion b: <?php $o = new Matriz($m2); 
													  var_dump($o->dimension());?>
							</option>
							<option>Dimesion c: <?php $o = new Matriz($m3);  
													var_dump($o->dimension());?></option>
							<option>Dimesion d: <?php $o = new Matriz($m4);  
													var_dump($o->dimension());?></option>
							<option>Dimesion e: <?php $o = new Matriz($m5);  
													var_dump($o->dimension());?></option>
							<option>Dimesion f: <?php $o = new Matriz($m6);  
													var_dump($o->dimension());?></option>
						</select>
					</div>

						<label for="Straight" class="col-sm-8 control-label">Elige la Straight</label>
					<div class="col-sm-8">
								
						 <select id="dstraight" onchange="dstraight();">" 
						 
							<option>straight a: <?php $o = new Matriz($m1);
												    var_dump($o->straight()); ?>
							</option>
							<option>straight b: <?php $o = new Matriz($m2); 
													  var_dump($o->straight());?>
							</option>
							<option>straight c: <?php $o = new Matriz($m3);  
													var_dump($o->straight());?></option>
							<option>straight d: <?php $o = new Matriz($m4);  
													var_dump($o->straight());?></option>
							<option>straight e: <?php $o = new Matriz($m5);  
													var_dump($o->straight());?></option>
							<option>straight f: <?php $o = new Matriz($m6);  
													var_dump($o->straight());?></option>
						</select>
					</div>

						<label for="Compute1" class="col-sm-8 control-label">Elige Compute</label>
					<div class="col-sm-8">
						 <select id="dcompute" onchange="dcompute();">" 
							<option>compute a: <?php $o = new Matriz($m1);
												    var_dump($o->compute()); ?>
							</option>
							<option>compute b: <?php $o = new Matriz($m2); 
													  var_dump($o->compute());?>
							</option>
							<option>compute c: <?php $o = new Matriz($m3);  
													var_dump($o->compute());?></option>
							<option>compute d: <?php $o = new Matriz($m4);  
													var_dump($o->compute());?></option>
							<option>compute e: <?php $o = new Matriz($m5);  
													var_dump($o->compute());?></option>
							<option>scompute f: <?php $o = new Matriz($m6);  
													var_dump($o->compute());?></option>
						</select>
					</div>
		</div>
		<div class="row">
							<h5 style="text-align:center" >Prueba 2</h5>

					<label for="Operacion" class="col-sm-8 control-label">Elige la Operacion</label>
					<div class="col-sm-8">
						 <select id="doperacion" onchange="doperacion();">" 
							<option>Operacion a: <?php $s = new Operacion($s1);
												    var_dump($s->operation()); ?>
							</option>
							<option>Operacion b: <?php $s = new Operacion($s2);
												    var_dump($s->operation()); ?>
							</option>
							<option>Operacion c: <?php $s = new Operacion($s3);
												    var_dump($s->operation()); ?>
							</option>
							<option>Operacion d: <?php $s = new Operacion($s4);
							var_dump($s->operation()); ?>
							</option>
						</select>
					</div>

					<label for="Computo" class="col-sm-8 control-label">Elige la Computo</label>
					<div class="col-sm-8">
						 <select id="dcomputo" onchange="dcomputo();">" 
							<option>Operacion a: <?php $s = new Operacion($s1);
												    var_dump($s->compute()); ?>
							</option>
							<option>Operacion b: <?php $s = new Operacion($s2);
												    var_dump($s->compute()); ?>
							</option>
							<option>Operacion c: <?php $s = new Operacion($s3);
												    var_dump($s->compute()); ?>
							</option>
							<option>Operacion d: <?php $s = new Operacion($s4);
							var_dump($s->compute()); ?>
							</option>
						</select>
					</div>
		</div>

</div>
</body>
