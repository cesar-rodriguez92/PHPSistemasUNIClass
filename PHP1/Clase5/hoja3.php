<?php
/*Arreglos multidimensionales*/

$numeros = array(
		array(1, 2, 3),		//Indice 0
		array(4, 5, 6),		//Indice 1
		array(7, 8, 9)		//Indice 2
	//Indices 0--1--2
	);

//echo "El elemento [1][1] es= {$numeros[1][1]} <br>";

for($i=0; $i<3; $i++){
	for( $j=0; $j<3; $j++){
		echo "El elemento [$i][$j] es= {$numeros[$i][$j]}";
	}	
	 echo "<br>";
}



?>