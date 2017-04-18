<?php

$dias= array('lunes', 'martes', 'miércoles','jueves', 'viernes','sábado','domingo');


$frutas[] = 'pera';			//Indice 0
$frutas[] = 'manzana';		//Indice 1
$frutas[] = 'naranja';		//Indice 2
$frutas[] = 'fresa';		//Indice 3
$frutas[] = 'durazno';		//Indice 4
$frutas[] = 'sandia';		//Indice 5
$frutas[] = 'maracuya';		//Indice 6
$frutas[] = 'chirimoya';	//Indice 7

$producto1 = array(
100 => 'Televisor',
200 => 'Radio',
1000=> 'CPU',
1   =>   'Disco Duro',
105 => 'Memoria'
);


$destinos[110] = 'Tumbes';
$destinos[10] ='Piura';
$destinos[20]='Chiclayo';
$destinos[666]= 'Trujillo';


$producto2 = array(
'nombre' =>'Monitor',
'codigo' => 'QCDDA%GD&',
'precio' => 1500,
'stock'  => 10);


$usuario['nombre']='cesar';
$usuario['clave']='dfdsfsdfsdfr';
$usuario['correo']='cvald@yahoo.es';





?>

<!DOCTYPE html>
<html>
<head>
	<title>Arreglos</title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>
<div id="contenedor">
	<div id="cabecera">Arreglos</div>
	<div id="contenido">
		<h1>Estructura de un arreglo</h1>
		<div class="panel">
			<h3>Dias</h3>
			<?php var_dump($dias)   ?>
		</div>
		<div class="panel">
			<h3>Frutas</h3>
			<?php   var_dump($frutas) ?>
		</div>
		<div class="panel">
			<h3>Producto 1</h3>
			<?php   var_dump($producto1) ?>
		</div>
		<div class="panel">
			<h3>Destinos</h3>
			<?php   var_dump($destinos) ?>
		</div>
		<div class="panel">
			<h3>Producto 2</h3>
			<?php   var_dump($producto2) ?>
		</div>
	</div>
</div>
</body>
</html>