<?php
$ccolor = !empty($_GET['color']) ? $_GET['color'] : 'c3';
$color = '';
switch ($ccolor) {
	case 'c1':
		$color = 'red';
		break;
	case 'c2':
		$color = 'green';
		break;
	case 'c3':
		$color = 'blue';
		break;
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Hoja 4</title>
	<style type="text/css">
		#contenedor{width: 900px; margin: auto;}
		#barra, #contenido{text-align: center;}
		#barra a{margin: 15px;}
		#contenido #img{
			width: 200px;
			height: 200px;
			margin: 20px auto;
			background-color: <?php echo $color ?>;
		}

	</style>
</head>
<body>
<div id="contenedor">
<div id="barra">
	<a href="hoja4.php?color=c1">Rojo</a>
	<a href="hoja4.php?color=c2">Verde</a>
	<a href="hoja4.php?color=c3">Azul</a>
</div>
<div id="contenido">
	<div id="img"></div>
</div>
</div>
</body>
</html>