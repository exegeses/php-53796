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
