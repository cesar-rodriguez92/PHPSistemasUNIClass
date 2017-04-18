<!DOCTYPE html>
<html>
<head>
	<title>Recepcion de DV</title>
</head>
<body>
<h2>Recepcion de datos de CV</h2>

<h4>Datos enviados con POST</h4>
<?php var_dump($_POST) ?>
<h4>Archivos enviados</h4>
<?php var_dump($_FILES) ?>
<h4>Arreglo request</h4>
<?php var_dump($_REQUEST) ?>
</body>
</html>