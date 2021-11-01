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

    function agregarUsuario()
    {
        $usuNombre   = $_POST['usuNombre'];
        $usuApellido = $_POST['usuApellido'];
        $usuEmail    = $_POST['usuEmail'];
        $usuPass     = $_POST['usuPass'];// clave enviada sin hash
        $pHash       = password_hash($usuPass, PASSWORD_DEFAULT);
        $link   = conectar();
        $sql = "INSERT INTO usuarios 
                                ( usuNombre, usuApellido, usuEmail, usuPass )
                            VALUE
                                ( 
                                  '".$usuNombre."',
                                  '".$usuApellido."',
                                  '".$usuEmail."',
                                  '".$pHash."'
                                 )";
        $resultado = mysqli_query( $link, $sql )
                        or die( mysqli_error( $link ) );
        return $resultado;
    }