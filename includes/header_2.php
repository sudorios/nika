<?php require_once('init.php'); ?><!-- NO BORRAR -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<header>
    <div class="logo-nika">
        <img src="./assets/images/logo/nika.png" alt="Logo NIKA" />
        <span>NIKA</span>
    </div>
    <nav>
        <a href="./index.php">INICIO</a>
        <a href="./nosotros.php">NOSOTROS</a>
        <a href="./envios.php">ENVIOS</a>
        <div class="relative group ml-7 mr-7">
                <a href="#" class="cursor-pointer">
                    CATEGORIAS
                    <svg class="inline-block ml-1 w-4 h-4 transition-transform group-hover:rotate-180" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </a>
                
                 <!--Menú desplegable--> 
                <div class="absolute left-0 mt-3 w-48 bg-black border border-gray-600 rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50" style="background-color: var(--color-bg);">
                    <div class="py-2">
                        <a href="dama.php" class="block  px-7 py-3 text-sm text-left hover:bg-red-800 transition-colors" style="color: var(--color-text); font-weight: var(--font-weight-semibold); font-size: var(--font-size-nav);">DAMA</a>
                        <a href="caballero.php" class="block  px-1 py-3 text-sm text-left hover:bg-red-800 transition-colors" style="color: var(--color-text); font-weight: var(--font-weight-semibold); font-size: var(--font-size-nav);">CABALLERO</a>
                        <a href="deportivo.php" class="block  px-1 py-3 text-sm text-left hover:bg-red-800 transition-colors" style="color: var(--color-text); font-weight: var(--font-weight-semibold); font-size: var(--font-size-nav);">DEPORTIVO</a>
                        <a href="urbano.php" class="block  px-1 py-3 text-sm text-left hover:bg-red-800 transition-colors" style="color: var(--color-text); font-weight: var(--font-weight-semibold); font-size: var(--font-size-nav);">URBANO</a>
                    </div>
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
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#fff"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-cart">
                <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
            </svg>
        </a>
    </div>
    
</header>