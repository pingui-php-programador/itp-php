<?php
/**
 * Pablo Jos� de Jes�s Carmona Ventura.
 * Comentario de verias lineas
 */
// Leccion 14 Par�metros de funciones.
function greet($name)
{
    echo "\nHello $name!";
}
greet('Janet');
echo "\n";
// Lecci�n 15. Casting
$age = 30;
var_dump($age);
$age =(string)$age;
var_dump($age);
// Leccion 16. Expresiones y tipos.
var_dump('10' == 10);   // bool true
var_dump('10' === 10);  // bool false
var_dump('5' . 5);      // string(2) "55""
var_dump('5' + 5);      // int 10
?>