<?php

    #### CRUD de categorías
    function listarCategorias()
    {
        $link = conectar();
        $sql  = "SELECT idCategoria, catNombre 
                    FROM categorias";
        $resultado = mysqli_query( $link, $sql )
                        or die( mysqli_error($link) );
        return $resultado;
    }

    function verCategoriaPorID()
    {
        $idCategoria = $_GET['idCategoria'];
        $link = conectar();
        $sql  = "SELECT catNombre, idCategoria 
                    FROM categorias 
                    WHERE idCategoria = ".$idCategoria;
        $resultado = mysqli_query($link, $sql)
                        or die(mysqli_error($link));
        $categoria = mysqli_fetch_assoc($resultado);
        return $categoria;
    }

    function agregarCategoria()
    {
        $catNombre = $_POST['catNombre'];
        $link   = conectar();
        $sql    = "INSERT INTO categorias
                        VALUE ( DEFAULT, '".$catNombre."' )";
        $resultado = mysqli_query( $link, $sql )
                            or die( mysqli_error($link) );
        return $resultado;
    }

    function modificarCategoria()
    {
        $idCategoria = $_POST['idCategoria'];
        $catNombre   = $_POST['catNombre'];
        $link = conectar();
        $sql = "UPDATE categorias 
                    SET catNombre = '".$catNombre."' 
                    WHERE idCategoria = ".$idCategoria;
        $resultado = mysqli_query($link, $sql)
                        or die(mysqli_error($link));
        return $resultado;
    }