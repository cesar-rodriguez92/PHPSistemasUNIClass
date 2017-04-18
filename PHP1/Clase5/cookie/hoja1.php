<?php 
$curso = 'PHP 1';
$lugar = 'Sistemas UNI';

setcookie('curso', $curso);
setcookie('lugar', $lugar);
 ?>

  <!DOCTYPE html>
 <html>
 <head>
 	<title>Cookies | PHP</title>
 	<link rel="stylesheet" type="text/css" href="../css/estilos.css">
 </head>
 <body>
 <div id="contenedor">
 <div id="cabecera">Cookies</div>
 <div id="contenido">
 	<p>
 		Curso = <?php echo $curso ?> <br>
 		Lugar = <?php echo $lugar ?>
 	</p>
 	<p>
 		<a href="hoja2.php">Hoja 2</a>
 	</p>
 </div>
 	
 </div>
 </body>
 </html>