<?php

    require 'config/config.php';
    require 'funciones/autenticacion.php';
        autenticar();
    require 'funciones/conexion.php';
    require 'funciones/usuarios.php';
    $chequeo = eliminarUsuario();
    $css = 'danger';
    $mensaje = 'No se pudo eliminar el usuario.';
    if( $chequeo ){
        $css = 'success';
        $mensaje = 'Usuario eliminado correctamente.';
    }

    include 'includes/header.html';
    include 'includes/nav.php';
?>

    <main class="container">
        <h1>Baja de un usuario</h1>

        <div class="alert alert-<?= $css ?> col-8 mx-auto">
            <?= $mensaje ?>
            <a href="adminUsuarios.php" class="btn btn-light m-2">
                volver a panel de usuarios
            </a>
        </div>

    </main>

<?php  include 'includes/footer.php';  ?>