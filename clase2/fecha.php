<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Trabajo con la fecha en PHP</title>
</head>
<body>
    <h1>Trabajo con la fecha en PHP</h1>

<?php
    #mostrar la fecha   12/08/2021
    $fecha = date('d/m/Y');
    echo $fecha;
?>
    <hr>
<?php
    #Mostrar día de la semana en expañol
    $diaIngles = date('l');
    switch ($diaIngles) {
        case 'Monday': $dia = 'Lunes'; break;
        case 'Tuesday': $dia = 'Martes'; break;
        case 'Wednesday': $dia = 'Miércoles'; break;
        case 'Thursday': $dia = 'Jueves'; break;
        case 'Friday': $dia = 'Viernes'; break;
        case 'Saturday': $dia = 'Sabaduki'; break;
        case 'Sunday': $dia = 'Domingol'; break;
    }

    echo $dia;
?>



</body>
</html>