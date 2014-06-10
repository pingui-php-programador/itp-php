<?php
/**
 * Pablo José de Jesús Carmona Ventura.
 * Comentario de verias lineas
 */
// Leccion 14 Parámetros de funciones.
function greet($name)
{
    echo "\nHello $name!";
}
greet('Janet');
echo "\n";
// Lección 15. Casting
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