<?php
/**
 * Pablo José de Jesús Carmona Ventura.
 * Comentario de verias lineas
 */
// Leccion 2: Un mensaje a travez de una veriable
$message = 'Hola Pablo\n'; // Comentario en linea.

# El punto y coma se puede omitir al final de un bloque.
echo $message;
// Leccion 3: Definir una constante.
define('PUBLISHER', 'SPRINGER');

echo PUBLISHER;
// Leccion 4: Escribir un número flotante.
$pi = 0.031416E2;
echo $pi;
// Leccion 5: Mediante comillas dobles se reemplazan los valores.
// Ahora es posible incluir secuencias de escape estilo C
echo "\n$message\n";
echo "PUBLISHER\n";
echo $pi;
// Leccion 8: Arreglos. Para versión 5.4 y posteriores.
 $people = ['Luis','Noé',1234, false, [2]];
// Para versiones 5.2 y anteriores:
// $people = array('Luis','Noe',1234,false);
print_r($people);
?>