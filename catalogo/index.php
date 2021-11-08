<?php
    require 'config/config.php';
    require 'funciones/conexion.php';
    require 'funciones/productos.php';
    $productos = listarProductos();
    include 'includes/header.html';
    include 'includes/nav.php';
?>

    <main class="container">
        <h1>Catálogo de productos</h1>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3">
<?php
        while ( $producto = mysqli_fetch_assoc( $productos ) ) {
?>
            <article class="card col">
                <img src="productos/<?= $producto['prdImagen'] ?>" class="card-img-top img-thumbnail">
                <div class="card-body text-secondary">
                    <h2><?= $producto['prdNombre'] ?></h2>
                    <?= $producto['catNombre'] ?> - <?= $producto['mkNombre'] ?>
                    <br>
                    <span class="lead text-info">$<?= $producto['prdPrecio'] ?></span>
                </div>
            </article>
<?php
        }
?>
        </div>


    </main>

<?php  include 'includes/footer.php';  ?>