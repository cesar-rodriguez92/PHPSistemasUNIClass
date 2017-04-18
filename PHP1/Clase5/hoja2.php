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

/*
foreach ($dias as $dia) {
	echo "$dia <br>";
}

foreach ($frutas as $indice => $fruta) {
	echo "La fruta $fruta tiene el indice $indice <br>";
}

*/
$lista = '<ul>';

foreach ($dias as $dia) {
	$lista.="<li>$dia</li>";
}

$lista.= "</ul>";


function crearLista($arreglo){
	$lista = '<ul>';
	if (is_array($arreglo)) {
		foreach ($arreglo as $item) {
			$lista.="<li>$item</li>";
		}
	}
	$lista.="</ul>";
	return $lista;
}


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
			<?php echo $lista; ?>
			<?php echo crearLista($frutas); ?>
			<?php echo crearLista($destinos); ?>
		</div>

	</div>

</body>
</html>
