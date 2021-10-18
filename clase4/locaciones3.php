<?php
    $locaciones3 =
        [
            'angkor'=>'Cambodia',
            'azul'=>'Turquía',
            'basil'=>'Rusia',
            'burj'=>'Dubai',
            'colosseo'=>'Italia',
            'easter'=>'Chile',
            'eiffel'=>'Francia',
            'gizah'=>'Egipto',
            'ha-long'=>'Vietnam',
            'liberty'=>'USA',
            'machu'=>'Peru',
            'opera'=>'Australia',
            'palace'=>'Tailandia',
            'petra'=>'Jordania',
            'sagrada'=>'España',
            'santorini'=>'Grecia',
            'taj'=>'India',
            'wall'=>'China'
        ];
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
        foreach ( $locaciones3 as $img=>$nombre ){
?>
        <article>
            <img src="locaciones/<?= $img ?>.jpg">
            <h2><?= $nombre ?></h2>
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