<?php
/**
 * Pablo José de Jesús Carmona Ventura.
 * Comentario de verias lineas
 */
// Estructuras de control.
$password = 'Letmein';
if($password === 'letmein')
{
    echo 'Password is correct';
}
else
{
    echo 'Password is incorrect';
}
echo "\n";
$color = 'red';
switch ($color) {
    case 'green':
    echo 'Green';
        break;
    case 'blue':
    echo 'Blue';
        break;

    default:
        echo $color;
        break;
} // end switch
$product = ['name' => 'Ajax', 'price' => 230, 'availale' => true];
foreach($product as $field => $value){
    echo "\n$field: $value";
}
function test()
{
    $parameter1 = 'foo';
    $parameter2 = 'bar';
    if($parameter1 === 'baz')
    {
        die('Terminate script');
    }
    return "\n$parameter1 $parameter2";
}
// return 'Luis';
echo test();
$configuration = require 'configuracion.php';
print_r($configuration);
exit(0);
?>