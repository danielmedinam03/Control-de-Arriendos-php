<?php

class Persona{

    private $db;
    private $personas;

    public function __construct(){
        $this->db = Conexion::conectar();
        $this->clientes = array();
    }

    public function listar(){
        $sql = "SELECT * FROM persona";

        $resultados = $this->db->query($sql);

        if(!$resultados){
            echo "Estamos experimentando problemas";

            //OJO no hacer esto cuando la aplicacion este en produccion
            echo "Error: Laejecucion fallo debido a: \n";
            echo "Query: $sql\n";
            echo "Errno: $mysqli->errno\n";
            echo "Error: $mysqli->error\n";
            exit;
        }
        while ($row = $resultados->fetch_assoc() )
        {

            $this->personas[] = $row;

        }

        return $this->personas;
    }

    public function insert($nombre, $direccion, $origen, $numAcompanantes){
        $sql = "INSERT INTO persona(NOMBRE, DIREPERSONA,ORIGENPERSONA,NUMACOMPANANTES)
                VALUES ('$nombre','$direccion','$origen',$numAcompanantes)";
        
        $this->db->query($sql);
    }

    public function getPersona($id){
        $sql = "SELECT * FROM persona WHERE IDPERSONA = $id";
        $resultado = $this->db->query($sql);
        $row = $resultado->fetch_assoc();
        return $row;
    }

    public function update($id, $nombre, $direccion, $origen, $numAcompanantes){
        $sql = "UPDATE persona SET NOMBRE = '$nombre', DIREPERSONA = '$direccion',
                ORIGENPERSONA = '$origen', NUMACOMPANANTES = $numAcompanantes WHERE IDPERSONA = $id";
        
        $resultado = $this->db->query($sql);
    }

    public function delete($id){
        $sql = "DELETE FROM persona WHERE IDPERSONA=$id";
        $resultado = $this->db->query($sql);
    }

}

?>