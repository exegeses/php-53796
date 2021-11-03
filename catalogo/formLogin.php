<?php
    require 'config/config.php';
    include 'includes/header.html';
    include 'includes/nav.php';
?>

    <main class="container">
        <h1>Ingreso a sistema</h1>

        <div class="alert bg-light p-4 col-8 mx-auto shadow">
            <form action="login.php" method="post">

                <label for="usuEmail">Usuario (email)</label>
                <input type="email" name="usuEmail"
                       class='form-control' id="usuEmail" required>
                <br>
                <label for="usuPass">Contraseña</label>
                <input type="password" name="usuPass"
                       class='form-control' id="usuPass" required>
                <br>
                <button class="btn btn-dark my-2 px-4">
                    Ingresar
                </button>
            </form>
        </div>

<?php
        if( isset($_GET['error']) ) { // se está error en URL
            $error = $_GET['error']; // lo capturamos
            $mensaje = 'Debe estar logueado para la acción solicitada.';
            if( $error == 1 ) {
                $mensaje = 'Nombre de usuario y/o contraseña incorrectos.';
            }
?>
        <div class="alert alert-danger col-8 mx-auto p-3">
            <?= $mensaje ?>
        </div>
<?php
       }
?>

    </main>

<?php  include 'includes/footer.php';  ?>