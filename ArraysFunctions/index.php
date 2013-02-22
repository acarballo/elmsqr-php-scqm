<?php

$alumno = array(
		'nombre' => 'Agustin',
		'apellidos'	=> 'Calderon',
		'email' => 'agustincl@gmail.com',
		'edad' => 123,
		'algo',
		'estudiante' => TRUE,
		FALSE => 'cosa',
		'algo mas',
		1.7 => 'y este',
		6 => 'mas aun',		
		123,
		array ('rojo','verde', 'naranja')
		
				
);

// echo "<pre>";
// print_r($alumno);
// echo "</pre>";


// foreach ($alumno as $key => $value)
// {
// 	echo $key.": ".$value;
// 	echo "<br/>";	
// }

echo "<hr/>";


require_once 'functions.php';


$otro = array(
		'algo mas',
		array ('gato','leon', 'tigre')
);

muestraArray($alumno);
echo "<hr/>";
muestraArray($otro);







