<?php 
$curso = 'PHP 1';
$lugar = 'Sistemas UNI';

//iniciamos la sesion
session_start();
//almacenamos las variables de sesion
$_SESSION['curso'] = $curso;
$_SESSION['lugar'] = $lugar;


 ?>

  <!DOCTYPE html>
 <html>
 <head>
 	<title>Sesiones | PHP</title>
 	<link rel="stylesheet" type="text/css" href="../css/estilos.css">
 </head>
 <body>
 <div id="contenedor">
 <div id="cabecera">Sesiones</div>
 <div id="contenido">
 	<p>
 		Curso = <?php echo $curso ?> <br>
 		Lugar = <?php echo $lugar ?>
 	</p>
 	<p>
 		<a href="hoja2.php">Hoja 2</a>
 		<a href="hoja3.php">Cerrar Sesion</a>
 	</p>
 </div>
 	
 </div>
 </body>
 </html>