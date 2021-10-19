<?php

    $link = mysqli_connect(
                    'localhost',
                    'root',
                    'root',
                    'catalogo'
    );
    $sql = "SELECT idMarca, mkNombre 
                FROM marcas";
    $resultado = mysqli_query( $link, $sql );
    //echo $resultado; //objeto mysqli_result

    /* función auxiliar: mysqli_fetch_assoc() */
    while( $marca = mysqli_fetch_assoc($resultado) ){
        echo $marca['idMarca'], ' ', $marca['mkNombre'], '<br>';
    }
