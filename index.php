<?php

require_once "config/database.php";
require_once "core/routes.php";

require_once "controllers/AptoController.php";

// $control = new ProyectoController();
// $control->index();

if(isset($_GET["controlador"]))
{
    $controlador = cargarControlador($_GET["controlador"]);
    if(isset($_GET["accion"]))
    {
        if (isset($_GET["id"]))
        {
            cargarAccion($controlador, $_GET["accion"] , $_GET["id"]);
        }else{
            cargarAccion($controlador, $_GET["accion"]);
        }
    }else
    {
        cargarAccion($controlador,"listar");
    }
}else
{
    $controlador = cargarControlador("Apto");
    cargarAccion($controlador,"listar");

    //http://localhost/desarrolladores/index.php?controlador=proyecto&accion=insert url de prueba
}


?>

