<?php
    //require 'config/config.php';
    include 'includes/header.html';
    include 'includes/nav.php';
?>

    <main class="container">
        <h1>Baja de una marca</h1>

        <div class="alert alert-danger col-6 mx-auto">
            <i class="bi bi-exclamation-triangle"></i>
            No se puede eliminar la marca ya que tiene productos relacionados
            <br>
            <a href="adminMarcas.php" class="btn btn-light mt-3">
                Volver a panel de marcas
            </a>
        </div>

        <div class="alert bg-light p-4 col-6 mx-auto shadow text-danger">
            Se eliminará la marca: <span class="lead">mkNombre</span>
            <form action="eliminarMarca.php" method="post">
                <button class="btn btn-danger my-3 px-4">Confirmar baja</button>
                <a href="adminMarcas.php" class="btn btn-outline-secondary">
                    Volver a panel de marcas
                </a>
            </form>
        </div>

    </main>

<?php  include 'includes/footer.php';  ?>