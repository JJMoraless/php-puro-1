<?php

/**
 * 
 * list($vars...); variabeles desestructuradas
 * parecida la desestructuracion de arrays en javascrip
 * 
*/

list($a, $b, $c) = [1, 2, 4];
echo $a, " ", $c;



/**
 * range($IntInicio, $Intfin) : array
 * 
 * parecida al range de python
 * 
*/

$array =  range(10, 30);
print_r($array);


/**
 * count($array): Int
 * 
 * parecida al lenght de javascript
*/


$arrayCount = range(10,20); // 11 elementos
echo count($arrayCount);
print_r($arrayCount);


/**
 * in_array($needle, $array): boolean
 * en javacript = array.includes(elemento)
*/

$array = ["jhon","simon"];
$array1 = ["chunchumaru","chanchito feliz"];
$arrayMulti = [$array, $array1, "chanchito title"];
var_dump(in_array(["jhon","simon"],$arrayMulti));
var_dump(in_array("chanchito title",$arrayMulti));
var_dump([1,2,3] === [1,2,3]);


/**
 * unset(array[index]);
 * 
 */

$array = ["jhon", "simon", "chanchito"];
unset($array[2]);
var_dump($array);






