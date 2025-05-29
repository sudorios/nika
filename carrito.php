<?php
include_once('includes/head.php');
include_once('includes/header.php');
include_once('includes/oferta_productos.php');
include_once('includes/carrito_functions.php');

$carrito = obtenerCarrito();
?>

<main class="carrito-container py-5">
    <div class="container">
        <h1 class="text-center mb-4" style="color: #5e0606;">TU CARRITO DE COMPRAS</h1>
        
        <?php if (empty($carrito)): ?>
            <div class="alert alert-info text-center">
                Tu carrito está vacío. <a href="index.php" style="color: #5e0606;">¡Empieza a comprar!</a>
            </div>
        <?php else: ?>
            <div class="row">
                <div class="col-lg-8">
                    <div class="card shadow-sm mb-4">
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Producto</th>
                                        <th>Precio</th>
                                        <th>Cantidad</th>
                                        <th>Subtotal</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($carrito as $producto_id => $cantidad): 
                                        $producto = $productos[$producto_id];
                                        $subtotal = $producto['precio_actual'] * $cantidad;
                                    ?>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="./assets/images/productos/<?php echo $producto['imagen']; ?>" 
                                                         alt="<?php echo $producto['alt']; ?>" 
                                                         style="width: 60px; height: 60px; object-fit: cover; margin-right: 15px;">
                                                    <?php echo $producto['nombre']; ?>
                                                </div>
                                            </td>
                                            <td>S/ <?php echo number_format($producto['precio_actual'], 2); ?></td>
                                            <td>
                                                <form method="post" action="actualizar_carrito.php" class="d-inline">
                                                    <input type="hidden" name="producto_id" value="<?php echo $producto_id; ?>">
                                                    <input type="number" name="cantidad" value="<?php echo $cantidad; ?>" 
                                                           min="1" class="form-control form-control-sm" style="width: 70px;">
                                            </td>
                                            <td>S/ <?php echo number_format($subtotal, 2); ?></td>
                                            <td>
                                                <button type="submit" class="btn btn-sm btn-outline-secondary">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                                    </svg>
                                                </button>
                                                </form>
                                                <form method="post" action="eliminar_carrito.php" class="d-inline">
                                                    <input type="hidden" name="producto_id" value="<?php echo $producto_id; ?>">
                                                    <button type="submit" class="btn btn-sm btn-outline-danger">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                                        </svg>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                    <div class="text-end">
                        <form method="post" action="vaciar_carrito.php">
                            <button type="submit" class="btn btn-outline-danger">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" class="me-1">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                </svg>
                                Vaciar carrito
                            </button>
                        </form>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title" style="color: #5e0606;">Resumen de compra</h5>
                            <hr>
                            <div class="d-flex justify-content-between mb-2">
                                <span>Subtotal:</span>
                                <span>S/ <?php echo number_format(calcularTotal($productos), 2); ?></span>
                            </div>
                            <div class="d-flex justify-content-between mb-3">
                                <span>Envío:</span>
                                <span>Por calcular</span>
                            </div>
                            <hr>
                            <div class="d-flex justify-content-between fw-bold">
                                <span>Total:</span>
                                <span>S/ <?php echo number_format(calcularTotal($productos), 2); ?></span>
                            </div>
                                <a href="confirmacion_pago.php" class="btn w-100 mt-3" style="background-color: #5e0606; color: white;">
                                Proceder al pago
                            </a>
                            <a href="index.php" class="btn btn-outline-secondary w-100 mt-2">
                                Seguir comprando
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</main>

<style>
    .carrito-container {
        min-height: calc(100vh - 150px);
        background-color: #f8f9fa;
    }
    
    .table th {
        background-color: #f0f0f0;
    }
    
    .btn:hover {
        background-color: #4a0505 !important;
        color: white;
    }
</style>

<?php include_once('includes/footer.php'); ?>