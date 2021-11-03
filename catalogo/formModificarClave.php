<?php

    require 'config/config.php';
    require 'funciones/autenticacion.php';
        autenticar();
    include 'includes/header.html';
    include 'includes/nav.php';
?>

    <main class="container">
        <h1>Cambio de contraseña</h1>

        <div class='alert bg-light p-4 col-8 mx-auto shadow'>
            <form action="modificarClave.php" method="post" class="validarForm">

                <div class='form-group mb-4 has-validation'>
                    <label for="usuPass">Contraseña actual</label>
                    <input type="password" name="usuPass"
                           class='form-control' id="usuPass">
                    <div class="text-danger fs-6" id="cUsuPass">
                        Debe completar el campo Contraseña actual
                    </div>
                </div>
                <div class='form-group mb-2'>
                    <label for="newPass">Nueva contraseña</label>
                    <input type="password" name="newPass"
                           class='form-control' id="newPass">
                    <div class="text-danger fs-6" id="cNewPass">
                        Debe completar el campo Nueva contraseña
                    </div>
                </div>
                <div class='form-group mb-3'>
                    <label for="newPass2">Repita contraseña</label>
                    <input type="password" name="newPass2"
                           class='form-control' id="newPass2">
                    <div class="text-danger fs-6" id="cNewPass2">
                        Debe completar el campo Repita contraseña con un valor igual a Nueva contraseña
                    </div>
                </div>

                <button class='btn btn-dark my-3 px-4'>Modificar contraseña</button>
                <a href="adminUsuarios.php" class='btn btn-outline-secondary'>
                    Volver a panel de usuarios
                </a>
            </form>

        </div>

<?php
        if( isset( $_GET['error'] ) ){
?>
            <div class="alert alert-danger col-8 mx-auto">
                Las credenciales no coinciden.
            </div>
<?php
        }
?>

        <script>
            let form = document.querySelector('.validarForm');
            let usuPass = document.querySelector('#usuPass');
            let newPass = document.querySelector('#newPass');
            let newPass2 = document.querySelector('#newPass2');
            let cUsuPass = document.querySelector('#cUsuPass');
                cUsuPass.style.display = 'none';
            let cNewPass = document.querySelector('#cNewPass');
                cNewPass.style.display = 'none';
            let cNewPass2 = document.querySelector('#cNewPass2');
                cNewPass2.style.display = 'none';

            form.addEventListener('submit', validarFormulario );
            function validarFormulario( evento) {
                let flag = true;
                evento.preventDefault();
                cUsuPass.style.display = 'none';
                if( checkVacio( usuPass ) ){
                    cUsuPass.style.display = 'block';
                    flag = false;
                }
                cNewPass.style.display = 'none';
                if( checkVacio( newPass ) ){
                    cNewPass.style.display = 'block';
                    flag = false;
                }
                cNewPass2.style.display = 'none';
                if( checkVacio( newPass2 ) ){
                    cNewPass2.style.display = 'block';
                    flag = false;
                }
                if( checkRepite() ){
                    cNewPass2.style.display = 'block';
                    flag = false;
                }
                if( flag ){
                    form.submit();
                }

            }
            function checkVacio(campo)
            {
                if( campo.value == '' || campo.value == null ){
                    return true;
                }
                return false;
            }
            function checkRepite()
            {
                if( newPass.value != newPass2.value ){
                    //console.log('no coinciden');
                    return true;
                }
                return false;
            }

        </script>

    </main>

<?php  include 'includes/footer.php';  ?>