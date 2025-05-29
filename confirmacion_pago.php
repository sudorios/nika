<?php
// Iniciar sesión y verificar el carrito
require_once('init.php');
include_once('includes/carrito_functions.php');
include_once('includes/oferta_productos.php');

// Obtener total del carrito
$total = calcularTotal($productos);

// Vaciar el carrito después del pago (opcional)
// vaciarCarrito();

include_once('includes/head.php');
include_once('includes/header.php');
?>

<main class="confirmacion-container py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card shadow-sm border-0">
                    <div class="card-body p-5 text-center">
                        <!-- Icono de confirmación -->
                        <div class="mb-4" style="font-size: 3rem; color: #5e0606;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                            </svg>
                        </div>
                        
                        <h2 class="mb-3" style="color: #5e0606;">¡PAGO REALIZADO CON ÉXITO!</h2>
                        <p class="mb-4">Gracias por tu compra en NIKA. Tu pedido ha sido procesado correctamente.</p>
                        
                        <div class="confirmacion-details bg-light p-4 mb-4 rounded">
                            <h5 class="mb-3">Resumen de tu compra</h5>
                            <div class="d-flex justify-content-between mb-2">
                                <span class="fw-bold">Monto total:</span>
                                <span class="fw-bold">S/ <?php echo number_format($total, 2); ?></span>
                            </div>
                            <div class="d-flex justify-content-between mb-2">
                                <span>Método de pago:</span>
                                <span>Tarjeta de crédito</span>
                            </div>
                            <div class="d-flex justify-content-between">
                                <span>N° de transacción:</span>
                                <span>NIKA-<?php echo rand(100000, 999999); ?></span>
                            </div>
                        </div>
                        
                        <p class="mb-4">Hemos enviado un correo con los detalles de tu compra a tu dirección de email.</p>
                        
                        <div class="d-flex justify-content-center gap-3">
                            <a href="index.php" class="btn btn-outline-secondary px-4">
                                Volver al inicio
                            </a>
                            <a href="historial_compras.php" class="btn" style="background-color: #5e0606; color: white;">
                                Ver mis pedidos
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<style>
    .confirmacion-container {
        min-height: calc(100vh - 150px);
        background-color: #f8f9fa;
    }
    
    .confirmacion-details {
        border-left: 4px solid #5e0606;
    }
    
    .btn:hover {
        background-color: #4a0505 !important;
        color: white;
    }
</style>

<?php include_once('includes/footer.php'); ?>