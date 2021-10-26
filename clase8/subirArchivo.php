<?php

    //capturamos
    $prdImagen = $_FILES['prdImagen'];
    //echo $prdImagen;
    /*mostramos el contenido del array*/
    echo '<pre>';
    print_r($prdImagen);
    echo '</pre>';

    /* copiamos archivo desde el /tmp a productos/ */
    $tmp = $_FILES['prdImagen']['tmp_name'];
    $dir = 'productos/';
    //$prdImagen = $_FILES['prdImagen']['name'];
    /*
    renombramos
        time()  segundos desde 1/1/1970
        .extension
    */
    $extension = pathinfo( $_FILES['prdImagen']['name'], PATHINFO_EXTENSION );
    $prdImagen = time().'.'.$extension;
    //echo $prdImagen;  //16494655765.jpg
    move_uploaded_file( $tmp, $dir.$prdImagen );

