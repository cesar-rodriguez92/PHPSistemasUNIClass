<?php

$dLista=['lunes','martes','miercoles','jueves','viernes','sabado','domingo'];

$lista = '<ul>';

foreach ($dLista as $item) {
	$lista.="<li>$item</li>";
}

$lista.='</ul>'
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>PHP</title>
	<link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
<div id="contenedor">
	<div id="cabecera"><h1>Cabecera</h1></div>
	<div id="contenido">
		<?php echo $lista; ?>
	</div>
</div>
</body>
</html>