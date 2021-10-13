<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Login</title>
</head>
<body>
<?php
    //capturamos datos enviados por el form
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];
    if( $usuario == 'admin' && $clave == 'asdfg' ){
        echo 'Bienvenido Matías';
    }
    else{
        echo 'Usuario y/o contraseña incorrectos';
    }
?>

</body>
</html>