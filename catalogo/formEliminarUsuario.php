<?php
    require 'config/config.php';
    include 'includes/header.html';
    include 'includes/nav.php';
?>

    <main class="container">
        <h1>Baja de un usuario</h1>

        <div class="alert bg-light p-4 col-6 mx-auto shadow text-danger">
            Se eliminará el usuario: <span class="lead">Nombre Apellido</span>
            <br>
            Email: email
            <form action="eliminarUsuario.php" method="post">
                <button class="btn btn-danger my-3 px-4">Confirmar baja</button>
                <a href="adminUsuarios.php" class="btn btn-outline-secondary">
                    Volver a panel de usuarios
                </a>
            </form>
        </div>

    </main>

<?php  include 'includes/footer.php';  ?>