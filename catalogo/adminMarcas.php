<?php

    require 'config/config.php';
    require 'funciones/autenticacion.php';
        autenticar();
    require 'funciones/conexion.php';
    require 'funciones/marcas.php';
    $marcas = listarMarcas();
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Panel de administración de marcas</h1>

        <a href="admin.php" class="btn btn-outline-secondary btn-sm my-2">
            <i class="bi bi-chevron-left"></i>
            Volver a dashboard
        </a>

        <table class="table table-borderless table-striped table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Marca</th>
                    <th colspan="2">
                        <a href="formAgregarMarca.php" class="btn btn-outline-secondary btn-sm">
                            <i class="bi bi-plus-square"> </i>
                            Agregar
                        </a>
                    </th>
                </tr>
            </thead>
            <tbody>
<?php
        while ( $marca = mysqli_fetch_assoc( $marcas ) ){
?>            
                <tr>
                    <td><?= $marca['idMarca'] ?></td>
                    <td><?= $marca['mkNombre'] ?></td>
                    <td>
                        <a href="formModificarMarca.php?idMarca=<?= $marca['idMarca'] ?>" class="btn btn-outline-secondary btn-sm">
                            <i class="bi bi-pencil-square"> </i>
                            Modificar
                        </a>
                    </td>
                    <td>
                        <a href="formEliminarMarca.php?idMarca=<?= $marca['idMarca'] ?>" class="btn btn-outline-secondary btn-sm">
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