<?php
    //require 'config/config.php';
    require 'funciones/conexion.php';
    require 'funciones/usuarios.php';
    $usuarios = listarUsuarios();
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Panel de administración de usuarios</h1>

        <a href="admin.php" class="btn btn-outline-secondary btn-sm my-2">
            <i class="bi bi-chevron-left"></i>
            Volver a dashboard
        </a>

        <table class="table table-borderless table-striped table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Email</th>
                    <th colspan="2">
                        <a href="formAgregarUsuario.php" class="btn btn-outline-secondary btn-sm">
                            <i class="bi bi-plus-square"> </i>
                            Agregar
                        </a>
                    </th>
                </tr>
            </thead>
            <tbody>
<?php
        while ( $usuario = mysqli_fetch_assoc($usuarios) ){
?>            
                <tr>
                    <td><?= $usuario['idUsuario'] ?></td>
                    <td><?= $usuario['usuNombre'] ?></td>
                    <td><?= $usuario['usuApellido'] ?></td>
                    <td><?= $usuario['usuEmail'] ?></td>
                    <td>
                        <a href="" class="btn btn-outline-secondary btn-sm">
                            <i class="bi bi-pencil-square"> </i>
                            Modificar
                        </a>
                    </td>
                    <td>
                        <a href="" class="btn btn-outline-secondary btn-sm">
                            <i class="bi bi-dash-square"> </i>
                            Eliminar
                        </a>
                    </td>
                </tr>
<?php
        }
?>            
            </tbody>
        </table>

        <a href="admin.php" class="btn btn-outline-secondary btn-sm my-2">
            <i class="bi bi-chevron-left"></i>
            Volver a dashboard
        </a>

    </main>

<?php  include 'includes/footer.php';  ?>