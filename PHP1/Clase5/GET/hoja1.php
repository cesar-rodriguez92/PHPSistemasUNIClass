<?php
$curso = 'PHP 1';
$lugar = 'Sistemas UNI';
?>
<!DOCTYPE html>
<html>
<head>
	<title>GET | PHP</title>
	<link rel="stylesheet" type="text/css" href="../css/estilos.css">
</head>
<body>
<div id="contenedor">
	<div id="cabecera">GET - HOJA 1</div>
	<div id="contenido">
		<h1><?echo $curso ?></h1>
		<h3><?echo $lugar ?></h3>
		<p>
			<a href="hoja2.php?curso=<?php echo $curso?>&lugar=<?php echo $lugar?>">Hoja 2</a>

	</div>

</div>
</body>
</html>