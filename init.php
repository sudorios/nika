<?php
// Iniciar sesión al principio de todo
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Inicializar carrito si no existe
if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = [];
}

// Depuración (puedes eliminar esto después)
error_log('Session ID: ' . session_id());
error_log('Carrito contenido: ' . print_r($_SESSION['carrito'], true));
?>