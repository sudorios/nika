<?php
// Esto debe ser lo PRIMERO en el archivo
require_once('init.php');
require_once('includes/carrito_functions.php');
require_once('includes/oferta_productos.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['producto_id'])) {
    $producto_id = (int)$_POST['producto_id'];
    
    // Verificar que el producto existe
    if (isset($productos[$producto_id])) {
        agregarAlCarrito($producto_id);
        
        // Depuración
        error_log('Producto agregado: ' . $producto_id);
        error_log('Carrito después de agregar: ' . print_r($_SESSION['carrito'], true));
    }
}

// Redirigir de vuelta con parámetro de éxito
header('Location: ' . $_SERVER['HTTP_REFERER'] . '?added=' . $producto_id);
exit;
?>