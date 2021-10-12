<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Condicionales con PHP</title>
</head>
<body>
    <h1>Condicionales con PHP</h1>

<?php
    #$numero = 50;//hardcoding
    $numero = $_POST['numero'];
    if( $numero < 100 ){
?>
        <img src="imagenes/ok.png">
<?php
    }
    else{
?>
        <img src="imagenes/error.png">
<?php
    }
?>
    <hr>
<?php
    //$numero = 50;//hardcoding
    if( $numero < 100 ){
        echo '<img src="imagenes/ok.png">';
    }
    else{
        echo '<img src="imagenes/error.png">';
    }
?>
    <hr>
<?php
    //$numero = 50;
    $img = 'error'; //valor predeterminado
    if( $numero < 100 ){
        $img = 'ok';
    }
?>
    <img src="imagenes/<?= $img; ?>.png">


</body>
</html>