<?php

    function login()
    {
        $usuEmail = $_POST['usuEmail'];
        $usuPass = $_POST['usuPass'];
        $link = conectar();
        $sql  = "SELECT idUsuario, usuNombre, usuApellido, usuPass
                    FROM usuarios
                    WHERE usuEmail = '".$usuEmail."'";
        $resultado = mysqli_query( $link, $sql )
                            or die( mysqli_error($link) );
        $cantidad = mysqli_num_rows($resultado);
        //si cantidad es == 0  -> usuario mal
        //si cantidad es == 1  -> usuario ok
        if ( $cantidad == 0 ){
            // redirección a formLogin -> mensaje de error
            header('location: formLogin.php?error=1');
            return;
        }
        else{
            /* acá ya sabemos que el email está bien */
            $usuario = mysqli_fetch_assoc($resultado);
            ## verificar contraseña
            if ( !password_verify( $usuPass, $usuario['usuPass'] ) ){
                // redirección a formLogin -> mensaje de error
                header('location: formLogin.php?error=1');
                return;
            }
            /* acá ya sabemos que se logueó bien */
            ###### RUTINA DE AUTENTICACIÓN #######
            # sesiones
            $_SESSION['login'] = 1;
            $_SESSION['usuNombre'] = $usuario['usuNombre'];
            $_SESSION['usuApellido'] = $usuario['usuApellido'];
            $_SESSION['idUsuario'] = $usuario['idUsuario'];

            //redirección a admin
            header( 'location: admin.php' );
        }

    }

    function logout()
    {
        session_unset();
        session_destroy();
        header('refresh:3;url=formLogin.php');
    }

    /**
     * función para chequear
     * si el usuario no está logueado
     * y entonces no dejarlo ver contenido
     */
    function autenticar()
    {
        if ( !isset( $_SESSION['login'] ) ){
            header('location: formLogin.php?error=2');
        }
    }
