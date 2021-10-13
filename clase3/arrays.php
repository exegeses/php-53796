<?php

    $nombres = ['Lucas', 'Mateo', 'Juan', 'Marcos'];
    //echo $nombres; no se puede imprimir un array
    echo $nombres[1];
?>
<hr>
<?php
    #mostrar dia de la semana
    $nDiaSemana = date('w');
    //echo $nDiaSemana;
    /*
     * 0 -> Domingo
     * 1 -> Lunes
     * 2 -> Martes
     * ---
     * 6 -> Sábado
     * */
    $semana = [
                'Domingo', 'Lunes', 'Martes',
                'Miércoles', 'Jueves', 'Viernes',
                'Sábado'
              ];
    echo $semana[$nDiaSemana];
?>
<hr>
<?php
    /**
     * SÓLO EN TIEMPO DE DESARROLLO
     * */
    echo '<pre>';
    print_r($semana);
    echo '</pre>';
?>
<hr>
<?php
    $marcas = [
                11=>'Hermes', 'Nike',
                15=>'UniQlo',
                'Sony'=>'Playstation', 'Valve',
                21=>'Pepsi',
                'Mountain Dew', 'Dr pepper'
                ];
    echo '<pre>';
    print_r($marcas);
    echo '</pre>';
?>
<hr>
<?php
    //Array Asociativo
    $ciudades = [
                    'Chile'=>'Santiago',
                    'Buenos Aires'=>'Bahía Blanca',
                    'Alemania'=>'Berlin',
                    'Inglaterra'=>'Londres',
                    'Neuquén'=>'Neuquén',
                    'España'=>'Barcelona',
                    'Misiones'=>'Posadas'
                ];
    echo '<pre>';
    print_r($ciudades);
    echo '</pre>';
?>
