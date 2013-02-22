<?php
/**
 * Data types in PHP.
 *
 * @link		http://github.com/agustincl/zf2 for the canonical source repository
 * @author		Agustín F. Calderón M.
 * @copyright	Copyright (c) 2001-2013 Elemental Web. (http://www.elementalweb.net)
 * @license		http://www.elementalweb.net/licencia/new-bsd New BSD License
 * @package		Data Types
 *
 */


$name = "Agustin";
$edad = 123;
$direccion = array('Via Julia', 'Barcelona', 123);
$vacio = NULL;
$deporte = FALSE;


var_dump($name);
var_dump($edad);
var_dump($vacio);
var_dump($deporte);


echo $name[2];

echo @name;

echo "<hr/>";


var_dump($direccion);

echo "<pre>";
print_r($direccion);
echo "</pre>";

echo "<hr/>";


// echo "<pre>";
// print_r($_SERVER);
// echo "</pre>";

echo $_SERVER['DOCUMENT_ROOT'];
echo "<br/>";
echo 3-2*2*8/3*2-2*4-2;
/*
32.6
7.25
-28.3
12.33
*/

echo "<br/>";
echo 5<<2;









