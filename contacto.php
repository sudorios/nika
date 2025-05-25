<?php include_once("includes/head.php") ?>

<body>

    <?php include_once("includes/header.php") ?>

    <main class="main-contacto">
        <section class="contacto-section">
            <h2 class="titulo-contacto">Contáctanos</h2>
            <p class="parrafo-contacto">
                ¿Tienes preguntas, pedidos especiales o necesitas ayuda? Estamos aquí para ti.
                Escríbenos usando el formulario o contáctanos directamente por nuestros canales oficiales.
            </p>

            <div class="contacto-contenido">
                <form action="#" method="post" class="contacto-form">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" id="nombre" name="nombre" required />
                    </div>

                    <div class="form-group">
                        <label for="correo">Correo electrónico</label>
                        <input type="email" id="correo" name="correo" required />
                    </div>

                    <div class="form-group">
                        <label for="mensaje">Mensaje</label>
                        <textarea id="mensaje" name="mensaje" rows="5" required></textarea>
                    </div>

                    <button type="submit" class="btn-enviar">Enviar mensaje</button>
                </form>
            </div>
            <div class="contacto-info">
                <h3>📍 Nuestra dirección principal</h3>
                <p>Av. de la Marina 2000, San Miguel, Lima, Perú</p>
                <hr class="st-hr">

                <h3>📞 Teléfono</h3>
                <p>+51 949 968 914</p>
                <hr class="st-hr">

                <h3>📧 Correo</h3>
                <p>contactenos@nika.pe</p>
                <hr class="st-hr">

                <h3>📱 Redes Sociales</h3>
                <p>Síguenos en Instagram y Facebook para conocer nuestras últimas novedades.</p>
            </div>
        </section>
    </main>
</body>

<?php include_once("includes/footer.php") ?>