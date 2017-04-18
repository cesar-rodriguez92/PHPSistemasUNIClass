<?php 
session_start();
$curso = !empty($_SESSION['curso']) ? $_SESSION['curso'] : 'No creada';
$lugar = !empty($_SESSION['lugar']) ? $_SESSION['lugar'] : 'No creada';
 ?>

<!DOCTYPE html>
 <html>
 <head>
 	<title>Sesiones | PHP</title>
 	<link rel="stylesheet" type="text/css" href="../css/estilos.css">
 </head>
 <body>
 <div id="contenedor">
 <div id="cabecera">Sesiones - Hoja 2</div>
 <div id="contenido">
 	<h1>Recuperacion de variables de sesion</h1>
 	<p>
 		Curso = <?php echo $curso ?> <br>
 		Lugar = <?php echo $lugar ?>
 	</p>
 	<p>
 		<a href="hoja1.php">Hoja 1</a>
 		<a href="hoja3.php">Cerrar Sesion</a>
 	</p>
 </div>
 	
 </div>
 </body>
 </html>