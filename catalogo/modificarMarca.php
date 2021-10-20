<?php
    //require 'config/config.php';
    require 'funciones/conexion.php';
    require 'funciones/marcas.php';
    $chequeo = modificarMarca();
    $css = 'danger';
    $mensaje = 'No se pudo modificar la marca.';
    if( $chequeo ){
        $css = 'success';
        $mensaje = 'Marca modificada correctamente.';
    }

    include 'includes/header.html';
    include 'includes/nav.php';
?>

    <main class="container">
        <h1>Modificación de una marca</h1>

        <div class="alert alert-<?= $css ?> col-8 mx-auto">
            <?= $mensaje ?>
            <a href="adminMarcas.php" class="btn btn-light m-2">
                volver a panel de marcas
            </a>
        </div>

    </main>

<?php  include 'includes/footer.php';  ?>