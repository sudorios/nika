<?php 
$page_title = 'NIKA | Cambiar Contraseña';
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
                            <h2 class="mt-3 mb-0" style="color: #5e0606;">CAMBIAR CONTRASEÑA</h2>
                            <p class="text-muted mt-2">Ingresa tu nueva contraseña</p>
                        </div>

                        <!-- Formulario para cambiar contraseña -->
                        <form action="update_password_process.php" method="POST">
                            <div class="mb-3">
                                <label for="current_password" class="form-label">Contraseña Actual</label>
                                <input type="password" class="form-control" id="current_password" 
                                       name="current_password" required placeholder="••••••••">
                            </div>
                            
                            <div class="mb-3">
                                <label for="new_password" class="form-label">Nueva Contraseña</label>
                                <input type="password" class="form-control" id="new_password" 
                                       name="new_password" required placeholder="••••••••">
                                <small class="text-muted">Mínimo 8 caracteres (letras y números)</small>
                            </div>
                            
                            <div class="mb-4">
                                <label for="confirm_password" class="form-label">Confirmar Nueva Contraseña</label>
                                <input type="password" class="form-control" id="confirm_password" 
                                       name="confirm_password" required placeholder="••••••••">
                            </div>
                            
                            <button type="submit" class="btn w-100 py-2 mb-3" 
                                    style="background-color: #5e0606; color: white;">ACTUALIZAR CONTRASEÑA</button>
                            
                            <div class="text-center">
                                <a href="login.php" style="color: #5e0606;">
                                    <i class="bi bi-arrow-left"></i> Volver al inicio de sesión
                                </a>
                            </div>
                        </form>
                    </div>
                </div>  
            </div>
        </div>
    </div>
</main>

<style>
    /* Reutilizamos los estilos del login */
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
    
    /* Estilo específico para los mensajes de ayuda */
    .text-muted {
        font-size: 0.85rem;
        color: #6c757d !important;
    }
</style>

<?php include_once('includes/footer.php'); ?>