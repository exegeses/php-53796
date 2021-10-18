<?php

    //declaración
    function hacerNegrita($frase)
    {
         $resultado = '<b>'. $frase. '</b><br>';
         return $resultado;
    }
    function sumar( $numero1, $numero2 )
    {

        if ( is_numeric($numero1) && is_numeric($numero2) ){
            $resultado = $numero1 + $numero2;
            return $resultado;
        }

        $mensaje = 'ambos deben ser números';
        return $mensaje;

    }


    //llamado a ejecución
    echo hacerNegrita('PHP y mySQL');
    echo hacerNegrita('PHP OOP');
    echo hacerNegrita('Laravel');
    echo '<hr>';
    echo sumar( 5, 10 );
    echo '<hr>';
    echo sumar( 20, 'manzana' );



