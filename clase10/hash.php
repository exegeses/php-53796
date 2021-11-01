<?php

    $clave = 'asdf';
    $pHash = password_hash($clave, PASSWORD_DEFAULT);
    echo $pHash;
    echo '<br>';
    $pHash = password_hash($clave, PASSWORD_DEFAULT);
    echo $pHash;