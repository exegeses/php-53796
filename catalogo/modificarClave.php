<?php

    require 'config/config.php';
    require 'funciones/autenticacion.php';
        autenticar();
    require 'funciones/conexion.php';
    require 'funciones/usuarios.php';
    $chequeo = modificarClave();
    $css = 'danger';
    $mensaje = 'No se pudo modificar contraseña.';
    if( $chequeo ){
        $css = 'success';
        $mensaje = 'Contraseña modificada correctamente.';
    }

    include 'includes/header.html';
    include 'includes/nav.php';
?>

    <main class="container">
        <h1>Modificación de clave</h1>

        <div class="alert alert-<?= $css ?> col-8 mx-auto">
            <?= $mensaje ?>
            <a href="adminUsuarios.php" class="btn btn-light m-2">
                volver a panel de usuarios
            </a>
        </div>

    </main>

<?php  include 'includes/footer.php';  ?>