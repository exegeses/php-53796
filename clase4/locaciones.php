<?php
    $locaciones =
        [
            'angkor', 'azul', 'basil', 'burj',
            'colosseo', 'easter', 'eiffel',
            'gizah', 'ha-long', 'liberty',
            'machu', 'opera', 'palace', 'petra',
            'sagrada', 'santorini', 'taj',
            'wall'
        ];
    $cantidad = count($locaciones);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Locaciones</title>
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
    <main>

<?php
    for( $i = 0; $i < $cantidad; $i++ ){
?>
        <article>
            <img src="locaciones/<?= $locaciones[$i] ?>.jpg">
            <h2>Nombre</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet architecto, deserunt exercitationem harum impedit labore mollitia obcaecati provident sit tempore?
            </p>
        </article>
<?php
    }
?>

    </main>
</body>
</html>