<?php
    require 'config/config.php';
    require 'funciones/autenticacion.php';
        autenticar();
    require 'funciones/conexion.php';
    require 'funciones/marcas.php';
    $chequeo = agregarMarca();
    $css = 'danger';
    $mensaje = 'No se pudo agregar la marca.';
    if( $chequeo ){
        $css = 'success';
        $mensaje = 'Marca agregada correctamente.';
    }

    include 'includes/header.html';
    include 'includes/nav.php';
?>

    <main class="container">
        <h1>Alta de una marca</h1>

        <div class="alert alert-<?= $css ?> col-8 mx-auto">
            <?= $mensaje ?>
            <a href="adminMarcas.php" class="btn btn-light m-2">
                volver a panel de marcas
            </a>
        </div>

    </main>

<?php  include 'includes/footer.php';  ?>