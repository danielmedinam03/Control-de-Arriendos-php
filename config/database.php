<?php

class Conexion{

    public static function conectar(){

        $server = "127.0.0.1";
        $db = "airbnb_imagen";
        $user = "root";
        $pass = "Dfmm.03112002";
        //Cadena de conexion
        $conexion = new mysqli($server, $user, $pass, $db);

        if (!$conexion){

            die("Conexion fallida" . mysqli_connect_error());

        }

        return $conexion;

    }


}

?>