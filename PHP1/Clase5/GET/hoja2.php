<?php
var_dump($_GET);
$curso= !empty($_GET['curso']) ? $_GET['curso'] : '';
$lugar= !empty($_GET['lugar']) ? $_GET['lugar'] : '';
?>
<!DOCTYPE html>
<html>
<head>
	<title>GET | PHP</title>
	<link rel="stylesheet" type="text/css" href="../css/estilos.css">
</head>
<body>
<div id="contenedor">
	<div id="cabecera">GET - HOJA 2</div>
	<div id="contenido">
		<h1><?php echo $curso ?></h1>
		<h3><?php echo $lugar ?></h3>
		<p>
			<a href="hoja1.php">Hoja 1</a>
		</p>
	</div>

</div>

</body>
</html>