<?php

    require 'config/config.php';
    require 'funciones/autenticacion.php';
        autenticar();
    require 'funciones/conexion.php';
    require 'funciones/categorias.php';
    $chequeo = modificarCategoria();
    $css = 'danger';
    $mensaje = 'No se pudo modificar la categoría.';
    if( $chequeo ){
        $css = 'success';
        $mensaje = 'Categoría modificada correctamente.';
    }

    include 'includes/header.html';
    include 'includes/nav.php';
?>

    <main class="container">
        <h1>Modificación de una categoría</h1>

        <div class="alert alert-<?= $css ?> col-8 mx-auto">
            <?= $mensaje ?>
            <a href="adminCategorias.php" class="btn btn-light m-2">
                volver a panel de categorías
            </a>
        </div>

    </main>

<?php  include 'includes/footer.php';  ?>