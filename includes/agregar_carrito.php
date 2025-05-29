<?php
require_once('includes/oferta_productos.php');

$carrito_estatico = [
    1 => 2,
    3 => 1, 
    7 => 1  
];

function calcularTotalEstatico($productos, $carrito) {
    $total = 0;
    foreach ($carrito as $id => $cantidad) {
        if (isset($productos[$id])) {
            $total += $productos[$id]['precio_actual'] * $cantidad;
        }
    }
    return $total;
}