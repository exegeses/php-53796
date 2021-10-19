<?php

    require 'conexion.php';
    require 'marcas.php';
    $marcas = listarMarcas();
    include 'header.html';
?>
    <main class="container">
        <h1>Listado de marcas</h1>

        <ul class="list-group">
<?php
        while ( $marca = mysqli_fetch_assoc( $marcas ) ){
?>
            <li class="list-group-item list-group-item-action">
                <?= $marca['mkNombre'] ?>
            </li>
<?php
        }
?>
        </ul>

    </main>
<?php
    include 'footer.html'
?>