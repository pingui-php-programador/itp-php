<?php
/**
 * Pablo Jos� de Jes�s Carmona Ventura.
 * Comentario de verias lineas
 */
// Leccion 10 Alias de variables.
$bigVariable = 'PHP';
$short = &$bigVariable;
$bigVariable .= ' Rocks!';
echo "Short is $short";
echo "Long is $bigVariable";
// Leccion 11: Funciones y alcance de variables.
// Leccio�n 12: Acceso a variables globales desde funciones.
// Leccion 13: variables est�ticas.
function update_counter()
{
    static $counter = 0;
    $counter++;
    echo "\n$counter";
}
$counter = 10;
update_counter();
update_counter();
echo "\n$counter";
?>