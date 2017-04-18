<?php 
$dias= array('Lunes', 'Martes', 'Miércoles','Jueves', 'Viernes','Sábado','Domingo');



function crearSelect($arreglo){

	$lista="<select>";
	$lista.="<option>Selecciona un dia</option>";

	if (is_array($arreglo)) {
		foreach ($arreglo as $item) {
			$lista.="<option value='$item'>$item</option>";
		}
	}
	$lista.="</select>";
	return $lista;
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 1</title>
	<link rel="stylesheet" type="text/css" href="../css/estilos.css">
</head>
<body>
	<div id="contenedor">
		<div id="cabecera">Ejercicio I</div><br>
		<div id="contenido">
			<?php echo crearSelect($dias); ?>
		</div>

	</div>

</body>
</html>

