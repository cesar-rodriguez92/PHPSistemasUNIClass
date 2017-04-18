<?php 
$curso = !empty($_COOKIE['curso']) ? $_COOKIE['curso'] : 'No asignado';
$lugar = !empty($_COOKIE['lugar']) ? $_COOKIE['lugar'] : 'No asignado';
 ?>

<!DOCTYPE html>
 <html>
 <head>
 	<title>Cookies | PHP</title>
 	<link rel="stylesheet" type="text/css" href="../css/estilos.css">
 </head>
 <body>
 <div id="contenedor">
 <div id="cabecera">Cookies - Hoja 2</div>
 <div id="contenido">
 	<p>
 		Curso = <?php echo $curso ?> <br>
 		Lugar = <?php echo $lugar ?>
 	</p>
 	<p>
 		<a href="hoja2.php">Hoja 1</a>
 	</p>
 </div>
 	
 </div>
 </body>
 </html>