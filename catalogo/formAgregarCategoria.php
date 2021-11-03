<?php

    require 'config/config.php';
    require 'funciones/autenticacion.php';
        autenticar();
    include 'includes/header.html';
    include 'includes/nav.php';
?>

    <main class="container">
        <h1>Alta de una categoría</h1>

        <div class="alert bg-light p-4 col-8 mx-auto shadow">
            <form action="agregarCategoria.php" method="post">
                <div class="form-group">
                    <label for="catNombre">Nombre de la categoría</label>
                    <input type="text" name="catNombre"
                           class="form-control" id="catNombre" required>
                </div>

                <button class="btn btn-dark my-3 px-4">Agregar categoría</button>
                <a href="adminCategorias.php" class="btn btn-outline-secondary">
                    Volver a panel de categoría
                </a>
            </form>
        </div>

    </main>

<?php  include 'includes/footer.php';  ?>