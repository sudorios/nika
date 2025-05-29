<?php require_once('init.php'); ?><!<!-- NO BORRAR -->
    <header>
        <div class="logo-nika">
            <img src="./assets/images/logo/nika.png" alt="Logo NIKA" />
            <span>NIKA</span>
        </div>
        <nav>
            <a href="./index.php">INICIO</a>
            <a href="./nosotros.php">NOSOTROS</a>
            <a href="./envios.php">ENVIOS</a>
            <div class="categorias-contenedor">
                <a class="mx-3">CATEGORÍAS</a>
                <div class="categorias-enlaces">
                    <a href="dama.php" class="categoria-link">DAMA</a>
                    <a href="caballero.php" class="categoria-link">CABALLERO</a>
                    <a href="deportivo.php" class="categoria-link">DEPORTIVO</a>
                    <a href="urbano.php" class="categoria-link">URBANO</a>
                </div>
            </div>
            <a href="./contacto.php">CONTACTO</a>
        </nav>
        <div class="header-icons">
            <a href="login.php" aria-label="Login" class="icon-link login-link">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-login">
                    <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"></path>
                    <polyline points="10 17 15 12 10 7"></polyline>
                    <line x1="15" y1="12" x2="3" y2="12"></line>
                </svg>
            </a>
            <a href="carrito.php" aria-label="Carrito de compras" class="icon-link cart-link">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-cart">
                    <circle cx="9" cy="21" r="1"></circle>
                    <circle cx="20" cy="21" r="1"></circle>
                    <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                </svg>
            </a>
            <a href="/nika/carrito.php" aria-label="Historial de Compras" class="icon-link history-link">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-cart">
                    <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                </svg>
            </a>
        </div>
    </header>