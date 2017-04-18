<?php 

$cnumero = !empty($_GET['numero']) ? $_GET['numero'] : 0;
$numero = 0;
$mostrar =0;
switch ($cnumero) {
	case 0:
		$numero = 0;
		$mostrar = crearLista($numero);
		break;
	case 1:
		$numero = 1;
		$mostrar = crearLista($numero);
		break;
	case 2:
		$numero = 2;
		$mostrar = crearLista($numero);
		break;
	case 3:
		$numero = 3;
		$mostrar = crearLista($numero);
		break;
	case 4:
		$numero = 4;
		$mostrar = crearLista($numero);
		break;
	case 5:
		$numero = 5;
		$mostrar = crearLista($numero);
		break;
	case 6:
		$numero = 6;
		$mostrar = crearLista($numero);
		break;
	case 7:
		$numero = 7;
			$mostrar =	crearLista($numero);
		break;
	case 8:
		$numero = 8;
			$mostrar =	crearLista($numero);
		break;
	case 9:
		$numero = 9;
			$mostrar =	crearLista($numero);
		break;
	case 10:
		$numero = 10;
			$mostrar =	crearLista($numero);
		break;
}


function crearLista($arreglo){
	$numeros = array(0,1,2,3,4,5,6,7,8,9,10);

	$lista = '<ul>';

	foreach ($numeros as $item) {
		$lista.= "<li>$arreglo x $item = ";
		$lista.=($arreglo * $item);
		$lista.="</li>";	
	}
	$lista.="</ul>";
	return $lista;
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 2</title>
	<link rel="stylesheet" type="text/css" href="../css/estilos.css">
		<style type="text/css">
		#contenedor{width: 900px; margin: auto;}
		#barra, #contenido{text-align: center;}
		#barra a{margin: 15px;}

	</style>
</head>
<div id="contenedor">
<div id="barra">
	<a href="ejercicio2.php?numero=1">1</a>
	<a href="ejercicio2.php?numero=2">2</a>
	<a href="ejercicio2.php?numero=3">3</a>
	<a href="ejercicio2.php?numero=4">4</a>
	<a href="ejercicio2.php?numero=5">5</a>
	<a href="ejercicio2.php?numero=6">6</a>
	<a href="ejercicio2.php?numero=7">7</a>
	<a href="ejercicio2.php?numero=8">8</a>
	<a href="ejercicio2.php?numero=9">9</a>
	<a href="ejercicio2.php?numero=10">10</a>
</div>
<div id="contenido">
	<div id="tablamultiplicar">Tabla de multiplicar <br>
		<?php echo $mostrar ?>
	</div>
</div>
</div>
</html>

