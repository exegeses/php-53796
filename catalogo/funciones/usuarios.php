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

    function modificarClave()
    {
        //capturamos clave sin encriptar
        $usuPass = $_POST['usuPass'];
        /** obtenemos la clave encriptada en bdd **/
        $link = conectar();
        $sql  = "SELECT usuPass 
                    FROM usuarios
                      WHERE idUsuario = ".$_SESSION['idUsuario'];
        $resultado = mysqli_query( $link, $sql )
                            or die( mysqli_error( $link ) );
        //clave enciptada en bdd
        $auxiliar = mysqli_fetch_assoc($resultado);
        $pHash = $auxiliar['usuPass'];

        /** comparamos clave en bdd con clave enviada **/
        if ( password_verify( $usuPass, $pHash ) ){
            //si coinciden
                #encriptamos clave nueva
            $newPass = $_POST['newPass'];
            $newPassHash = password_hash( $newPass, PASSWORD_DEFAULT );
                #hacemos el update
            $sql = "UPDATE usuarios 
                        SET usuPass = '".$newPassHash."'
                        WHERE idUsuario = ".$_SESSION['idUsuario'];
            $resultado = mysqli_query( $link, $sql )
                            or die( mysqli_error( $link ) );
            return $resultado;
        }
        // si no coinciden
        header( 'location: formModificarClave.php?error=1' );
    }
