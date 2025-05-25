<?php include_once("includes/head.php") ?>
<?php include_once("includes/header.php") ?>
<?php include_once("includes/oferta_productos.php") ?>

<main class="main-index">
    <section class="ofertas-section">
        <h2 class="titulo-ofertas">APROVECHA NUESTRA OFERTAS DESTACADAS</h2>
        <div class="ofertas-grid">
            <?php foreach ($productos as $producto): ?>
                <div class="oferta-card">
                    <img src="./assets/images/productos/<?php echo $producto['imagen']; ?>"
                        alt="<?php echo $producto['alt']; ?>" class="oferta-img" />
                    <h3 class="oferta-nombre"><?php echo $producto['nombre']; ?></h3>
                    <p class="oferta-precio">S/ <?php echo $producto['precio_actual']; ?> <span class="precio-anterior">S/
                            <?php echo $producto['precio_anterior']; ?></span></p>
                    <button class="btn-comprar">Añadir al carrito</button>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
</main>

<?php include_once("includes/footer.php") ?>