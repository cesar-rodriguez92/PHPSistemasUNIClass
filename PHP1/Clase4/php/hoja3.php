<?php

$curso = 'PHP 1';
$lugar = 'Sistemas UNI';

$titulo = "$curso - $lugar";

$tabla = <<<FIN
<table>
<tr>
	<th>Columna 1</th>
	<th>Columna 2</th>
	<th>Columna 3</th>
</tr>
FIN;

for($i=1;$i<=15;$i++){
	if(($i % 3) == 1){
		$tabla.='<tr>';
	}

	$tabla.="<td>Dato $i</td>";
	if(($i % 3) == 0){
		$tabla.='</tr>';
		continue;
	}
}

$tabla.='</table>'

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
		<h1><?php echo $titulo; ?></h1>
		<p>
			Curso = <?php echo $curso ?><br>
			Lugar = <?php echo $lugar ?>
		</p>
		<?php echo $tabla ?>
	</div>
</div>
</body>
</html>