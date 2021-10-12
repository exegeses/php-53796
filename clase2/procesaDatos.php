<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Proceso de datos desde un formulario</h1>

<?php
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    echo 'Tu nombre es: ', $nombre;
    echo '<br>';
    echo 'Tu email es: ', $email;
?>

</body>
</html>