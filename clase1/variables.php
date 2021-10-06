<?php

    $precio = 3000;
    $texto  = 'cadena de caractéres';
    const NOMBRE = 'Rick';
    //define('NOMBRE', 'Rick');
    const APELLIDO = 'Sánchez';

    $sql = "SELECT prdNombre, prdPrecio
                FROM productos
                WHERE prdPrecio < ".$precio;
?>
<br>
<?php
    echo $precio;
    $precio = $precio * 2;
    echo $precio;
    //NOMBRE = 'jhf'; no se puede porque es contante
?>
<br>
<?php
    echo NOMBRE, ' ', APELLIDO;// 1 op
    echo '<br>';
    echo NOMBRE. ' '. APELLIDO; // 3 ops
?>

