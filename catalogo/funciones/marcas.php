<?php

    #### CRUD DE marcas

    function listarMarcas()
    {
        $link = conectar();
        $sql  = "SELECT idMarca, mkNombre 
                    FROM marcas";
        $resultado = mysqli_query($link, $sql);
        return $resultado;
    }

    function verMarcaPorID()
    {
    }
    function agregarMarca()
    {
    }
    function modificarMarca()
    {
    }
    function eliminarMarca()
    {
    }