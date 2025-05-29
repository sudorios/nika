<?php
include_once('includes/head.php');
include_once('includes/header.php');
include_once('includes/oferta_productos.php');
include_once('includes/agregar_carrito.php');
?>

<main class="carrito-container py-5">
    <div class="container">
        <h1 class="text-center mb-4" style="color: #5e0606;">TU CARRITO DE COMPRAS (DEMO)</h1>
        
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
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($carrito_estatico as $producto_id => $cantidad): 
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
                                            <?php echo $cantidad; ?>
                                        </td>
                                        <td>S/ <?php echo number_format($subtotal, 2); ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #5e0606;">Resumen de compra</h5>
                        <hr>
                        <div class="d-flex justify-content-between mb-2">
                            <span>Subtotal:</span>
                            <span>S/ <?php echo number_format(calcularTotalEstatico($productos, $carrito_estatico), 2); ?></span>
                        </div>
                        <div class="d-flex justify-content-between mb-3">
                            <span>Envío:</span>
                            <span>Gratis</span>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between fw-bold">
                            <span>Total:</span>
                            <span>S/ <?php echo number_format(calcularTotalEstatico($productos, $carrito_estatico), 2); ?></span>
                        </div>
                        <a href="confirmacion_pago.php" class="btn w-100 mt-3" style="background-color: #5e0606; color: white;">
                            Proceder al pago (Demo)
                        </a>
                        <a href="index.php" class="btn btn-outline-secondary w-100 mt-2">
                            Seguir comprando
                        </a>
                    </div>
                </div>
            </div>
        </div>
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