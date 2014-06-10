<?php
/**
 * Pablo José de Jesús Carmona Ventura.
 * Comentario de verias lineas
 */
// Leccion 10 Alias de variables.
$bigVariable = 'PHP';
$short = &$bigVariable;
$bigVariable .= ' Rocks!';
echo "Short is $short";
echo "Long is $bigVariable";
// Leccion 11: Funciones y alcance de variables.
function update_counter()
{
    global $counter;
    $counter++;
}
$counter = 10;
update_counter();
echo $counter;
?>