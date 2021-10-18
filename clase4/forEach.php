<?php

    $autos = [
        'Aston Martin', 'Pagani', 'Bugatti',
        'Maseratti', 'Lotus', 'Ferrari',
        'Porsche', 'Tesla'
    ];

    //foreach ( $coleccion as $auxiliar )
    /*foreach ( $autos as $auto ){
        echo $auto, '<br>';
    }*/

    //foreach ( $coleccion as $clave=>$valor  )
    foreach ( $autos as $key=>$auto ){
        echo $key, ': ', $auto, '<br>';
    }