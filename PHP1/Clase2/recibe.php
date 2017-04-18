<!DOCTYPE html>
<html>
<head>
	<title>Recepcion de datos</title>
</head>
<body>
<h2>Recepcion de datos</h2>

<h4>Datos enviados con GET</h4>
<?php var_dump($_GET) ?>
<h4>Datos enviados con POST</h4>
<?php var_dump($_POST) ?>
<h4>Archivos enviados</h4>
<?php var_dump($_FILES) ?>
<h4>Arreglo request</h4>
<?php var_dump($_REQUEST) ?>
</body>
</html>