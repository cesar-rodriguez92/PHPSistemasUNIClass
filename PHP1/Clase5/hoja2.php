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


foreach ($dias as $dia) {
	echo "$dia <br>";
}

foreach ($frutas as $indice => $fruta) {
	echo "La fruta $fruta tiene el indice $indice <br>";
}

?>

