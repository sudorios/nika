<?php include_once("includes/head.php") ?>
<?php include_once("includes/header.php") ?>
<?php include_once("includes/producto_dama.php") ?>
<script src="https://cdn.tailwindcss.com"></script>
<section class="py-12 px-8 max-w-6xl mx-auto font-sans">


    <h2 class="text-center text-4xl font-bold mb-8 text-red-700">

        ROPA DE DAMA
    </h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-4 gap-8">

        <?php foreach ($productos as $producto): ?>
            <div class="bg-white border border-gray-200 rounded-lg p-6 shadow-md text-center transition-transform duration-200 hover:-translate-y-1">

                <img src="./assets/images/dama/<?php echo $producto['imagen']; ?>"
                     alt="<?php echo $producto['alt']; ?>" 
                     class="w-full h-56 object-cover rounded-lg mb-4" />


                <h3 class="text-xl font-bold mb-2 text-black">

                    <?php echo $producto['nombre']; ?>
                </h3>

                <p class="text-lg text-black">

                    S/ <?php echo $producto['precio']; ?> 
                    
                </p>

                <button class=" mt-4 px-5 py-2 bg-red-700 text-white rounded-md cursor-pointer transition-colors duration-300 hover:bg-red-900" style="font-family:  var(--font-family);">

                    Añadir al carrito
                </button>
            </div>
        <?php endforeach; ?>
    </div>
</section>


<?php include_once("includes/footer.php") ?>