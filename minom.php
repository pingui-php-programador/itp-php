<?php
/**
 * Pablo José de Jesús Carmona Ventura.
 * Comentario de verias lineas
 */

function total($empleado,$ganado)
{
    $iva = 0.15 * $ganado;
    $isr = 0.1 * $ganado;
    $neto = $ganado - $iva - $isr;
    return ['NomEmp' => $empleado,
        'Ganado' => $ganado,
        'IVA descontado' => $iva,
        'ISR descontado' => $isr,
        'sueldo neto' => $neto];
}

$configuration = total('Pablo',20000);
print_r($configuration);
exit(0);
?>