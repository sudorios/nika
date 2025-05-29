<?php

// Inicializar el carrito si no existe
if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = [];
}

/**
 * Agrega un producto al carrito
 */
function agregarAlCarrito($producto_id, $cantidad = 1) {
    if (isset($_SESSION['carrito'][$producto_id])) {
        $_SESSION['carrito'][$producto_id] += $cantidad;
    } else {
        $_SESSION['carrito'][$producto_id] = $cantidad;
    }
}
/**
 * Elimina un producto del carrito
 */
function eliminarDelCarrito($producto_id) {
    if (isset($_SESSION['carrito'][$producto_id])) {
        unset($_SESSION['carrito'][$producto_id]);
    }
}

/**
 * Actualiza la cantidad de un producto en el carrito
 */
function actualizarCantidad($producto_id, $cantidad) {
    if ($cantidad <= 0) {
        eliminarDelCarrito($producto_id);
    } else {
        $_SESSION['carrito'][$producto_id] = $cantidad;
    }
}

/**
 * Obtiene el contenido completo del carrito
 */
function obtenerCarrito() {
    return $_SESSION['carrito'] ?? [];
}

/**
 * Vacía el carrito completamente
 */
function vaciarCarrito() {
    $_SESSION['carrito'] = [];
}

/**
 * Calcula el total de productos en el carrito
 */
function contarProductosCarrito() {
    return array_sum($_SESSION['carrito'] ?? []);
}

/**
 * Calcula el total a pagar
 */
function calcularTotal($productos) {
    $total = 0;
    foreach ($_SESSION['carrito'] as $id => $cantidad) {
        if (isset($productos[$id])) {
            $total += $productos[$id]['precio_actual'] * $cantidad;
        }
    }
    return $total;
}
?>