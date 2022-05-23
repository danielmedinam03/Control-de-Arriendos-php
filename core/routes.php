<?php

function cargarControlador($controlador)
{
    $nombreControlador = ucwords($controlador) . "Controller";
    $archivoControlador = "controllers/$nombreControlador.php";

    //Si no existe el archivo
    if(!is_file($archivoControlador))
    {
        //Cargar un controlador por defecto
        $archivoControlador = "controllers/AptoController.php";
    }
    require_once $archivoControlador;
    $control = new $nombreControlador();
    return $control;
}


function cargarAccion($controlador, $accion, $id=null)
{
    //Revisar que la accion no sea nula y que el metodo exista en el controlador 
    if(isset($accion) && method_exists($controlador, $accion))
    {
        if ($id==null)
        {
            $controlador->$accion();
        } else{
            $controlador->$accion($id);
        }
        
    }else
    {
        //Ejecuta la accion principal
        $controlador ->listarAptoPpl();
    }
}

?>