<?php

    ########################
    #### CRUD de usuarios

    function listarUsuarios()
    {
        $link = conectar();
        $sql  = "SELECT idUsuario, usuNombre, usuApellido, usuEmail 
                    FROM usuarios";
        $resultado = mysqli_query( $link, $sql )
                            or die( mysqli_error( $link ) );
        return $resultado;
    }