<?php

    require 'config/config.php';
    require 'funciones/autenticacion.php';
        autenticar();
    require 'funciones/conexion.php';
    require 'funciones/productos.php';
    $chequeo = modificarProducto();
    $css = 'danger';
    $mensaje = 'No se pudo modificar el producto.';
    if( $chequeo ){
        $css = 'success';
        $mensaje = 'Producto mofidicado correctamente.';
    }

    include 'includes/header.html';
    include 'includes/nav.php';
?>

    <main class="container">
        <h1>Modificación de un producto</h1>

        <div class="alert alert-<?= $css ?> col-8 mx-auto">
            <?= $mensaje ?>
            <a href="adminProductos.php" class="btn btn-light m-2">
                volver a panel de productos
            </a>
        </div>

    </main>

<?php  include 'includes/footer.php';  ?>