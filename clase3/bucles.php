<?php

    $n = 1;
    while ( $n < 15 )
    {
        echo $n,'<br>';
        $n++;
    }
    echo 'fin de bucle';
?>
<hr>
<?php
    $semana = [
        'Domingo', 'Lunes', 'Martes',
        'Miércoles', 'Jueves', 'Viernes',
        'Sábado'
    ];

    $i = 0;
    $cantidad = count($semana);
    echo '<ul>';
    while( $i < $cantidad )
    {
        echo '<li>',$semana[$i],'</li>';
        $i++;
    }
    echo '</ul>';
?>
<hr>

    <ul>
<?php


    $i = 0;
    $cantidad = count($semana);
    while( $i < $cantidad ){
?>        
        <li><?= $semana[$i] ?></li>
<?php
        $i++;
    }
?>        
    </ul>
