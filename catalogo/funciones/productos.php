<?php

    ##########################
    ####### CRUD de productos

    function listarProductos()
    {
        $link = conectar();
/*      $sql  = "SELECT idProducto, prdNombre, prdPrecio,
                        mkNombre, catNombre,
                        prdPresentacion, prdImagen
                    FROM productos as p
                        JOIN marcas as m
                            ON p.idMarca = m.idMarca
                        JOIN categorias as c
                            ON p.idCategoria = c.idCategoria";*/

        $sql  = "SELECT idProducto, prdNombre, prdPrecio, 
                        p.idMarca,  mkNombre, 
                        p.idCategoria, catNombre,
                        prdPresentacion, prdImagen
                    FROM productos as p, marcas as m, categorias as c
                    WHERE  p.idMarca = m.idMarca
                      AND  p.idCategoria = c.idCategoria";
        $resultado = mysqli_query( $link, $sql )
                        or die( mysqli_error($link) );
        return $resultado;
    }

    function verProductoPorID()
    {
        $idProducto = $_GET['idProducto'];
        $link = conectar();
        $sql = "SELECT idProducto, prdNombre, prdPrecio, 
                        p.idMarca,  mkNombre, 
                        p.idCategoria, catNombre,
                        prdPresentacion, prdStock, prdImagen
                    FROM productos as p, marcas as m, categorias as c
                    WHERE  p.idMarca = m.idMarca
                      AND  p.idCategoria = c.idCategoria
                      AND  idProducto = ".$idProducto;
        $resultado = mysqli_query( $link, $sql )
                            or die( mysqli_error( $link ) );
        $producto = mysqli_fetch_assoc($resultado);
        return $producto;
    }

    function subirImagen()
    {
        // si no envian archivo en agregarProducto()
        $prdImagen = 'noDisponible.jpg';

        // si no envian archivo en modificarProducto()
        if ( isset( $_POST['imgActual'] ) ){
            $prdImagen = $_POST['imgActual'];
        }

        //enviaron archivo
        if( $_FILES['prdImagen']['error'] == 0 ){
            /* copiamos archivo desde el /tmp a productos/ */
            $tmp = $_FILES['prdImagen']['tmp_name']; //nombre termporal
            $dir = 'productos/';
            /* renombramos
                 time()  segundos desde 1/1/1970
                .extension */
            $extension = pathinfo( $_FILES['prdImagen']['name'], PATHINFO_EXTENSION );
            $prdImagen = time().'.'.$extension;
            move_uploaded_file( $tmp, $dir.$prdImagen );
        }
        return $prdImagen;
    }

    function agregarProducto()
    {
        /*capturamos datos enviados por el form*/
        $prdNombre = $_POST['prdNombre'];
        $prdPrecio = $_POST['prdPrecio'];
        $idMarca   = $_POST ['idMarca'];
        $idCategoria   = $_POST ['idCategoria'];
        $prdPresentacion = $_POST['prdPresentacion'];
        $prdStock = $_POST['prdStock'];
        /* subir archivo */
        $prdImagen = subirImagen();

        //nos conectamos...
        $link = conectar();
        $sql = "INSERT INTO productos
                    VALUES
                          ( 
                           DEFAULT,
                           '".$prdNombre."',
                           ".$prdPrecio.",
                           ".$idMarca.",
                           ".$idCategoria.",
                           '".$prdPresentacion."',
                           ".$prdStock.",
                           '".$prdImagen."'
                           )";
        $resultado = mysqli_query( $link, $sql )
                        or die( mysqli_error($link) );
        return $resultado;
    }

    function modificarProducto()
    {
        /*capturamos datos enviados por el form*/
        $prdNombre = $_POST['prdNombre'];
        $prdPrecio = $_POST['prdPrecio'];
        $idMarca   = $_POST ['idMarca'];
        $idCategoria   = $_POST ['idCategoria'];
        $prdPresentacion = $_POST['prdPresentacion'];
        $prdStock = $_POST['prdStock'];
        /* subir archivo */
        $prdImagen  = subirImagen();
        $idProducto = $_POST['idProducto'];

        $link = conectar();
        $sql  = "UPDATE productos
                    SET 
                        prdNombre       = '".$prdNombre."', 
                        prdPrecio       = ".$prdPrecio.", 
                        idMarca         = ".$idMarca.", 
                        idCategoria     = ".$idCategoria.",
                        prdPresentacion = '".$prdPresentacion."', 
                        prdStock        = ".$prdStock.", 
                        prdImagen       = '".$prdImagen."'
                    WHERE idProducto    = ".$idProducto;
        $resultado = mysqli_query( $link, $sql )
                        or die( mysqli_error( $link ) );
        return $resultado;
    }

    function eliminarProducto()
    {
        $idProducto = $_POST['idProducto'];
        $link = conectar();
        $sql  = "DELETE FROM productos
                        WHERE idProducto = ".$idProducto;
        $resultado = mysqli_query( $link, $sql )
                            or die( mysqli_error( $link ) );
        return $resultado;
    }