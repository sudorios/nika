<?php 
$page_title = 'NIKA | Iniciar Sesión';
include_once('includes/head.php');
include_once('includes/header.php');
?>

<main class="auth-container py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="card shadow-sm border-0">
                    <div class="card-body p-4">
                        <!-- Logo NIKA centrado -->
                        <div class="text-center mb-4">
                            <img src="./assets/images/logo/nika.png" alt="Logo NIKA" style="height: 80px;">
                            <h2 class="mt-3 mb-0" style="color: #5e0606;">INICIAR SESIÓN</h2>
                        </div>

                        <!-- Formulario de Login -->
                        <form action="auth_process.php" method="POST">
                            <div class="mb-3">
                                <label for="email" class="form-label">Correo Electrónico</label>
                                <input type="email" class="form-control" id="email" name="email" required 
                                       placeholder="tu@email.com">
                            </div>
                            
                            <div class="mb-3">
                                <label for="password" class="form-label">Contraseña</label>
                                <input type="password" class="form-control" id="password" name="password" required 
                                       placeholder="••••••••">
                            </div>
                            
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="remember" name="remember">
                                    <label class="form-check-label" for="remember">Recordar sesión</label>
                                </div>
                                <a href="cambiar_contra.php" style="color: #5e0606; font-size: 0.9rem;">¿Olvidaste tu contraseña?</a>
                            </div>
                            
                            <button type="submit" class="btn w-100 py-2" 
                                    style="background-color: #5e0606; color: white;">INGRESAR</button>
                            
                            <div class="text-center mt-3">
                                <p class="mb-0">¿No tienes una cuenta? <a href="register.php" style="color: #5e0606;">Regístrate aquí</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<style>
    .auth-container {
        min-height: calc(100vh - 150px);
        display: flex;
        align-items: center;
        background-color: #f8f9fa;
    }
    
    .card {
        border-radius: 10px;
        border: none;
    }
    
    .form-control:focus {
        border-color: #5e0606;
        box-shadow: 0 0 0 0.25rem rgba(94, 6, 6, 0.15);
    }
    
    .btn:hover {
        background-color: #4a0505 !important;
        color: white;
    }
</style>

<?php include_once('includes/footer.php'); ?>