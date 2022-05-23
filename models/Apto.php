<?php

class Apto{

    private $db;
    private $aptos;

    public function __construct(){
        $this->db = Conexion::conectar();
        $this->aptos = array();
    }

    public function listarApto(){
        $sql = "SELECT * FROM apartamento";

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

            $this->aptos[] = $row;

        }

        return $this->aptos;
    }

    public function insertApto($alias, $direApto, $canCamas, $capacidad, $precioDia, $imagen){

        $sql = "INSERT INTO apartamento(ALIASAPTO,DIREAPTO,CANCAMAS,CAPACIDADAPTO,PRECIOXDIA,IMAGEN) 
        VALUES ('$alias', '$direApto', $canCamas, $capacidad, $precioDia, '$imagen')";

        $this->db->query($sql);

    }

    public function getApto($idApto){

        $sql = "SELECT * FROM apartamento WHERE IDAPTO = $idApto";
        $resultado = $this->db->query($sql);
        $row = $resultado->fetch_assoc();
        return $row;

    }

    public function updateApto($idApto, $alias, $direApto, $canCamas, $capacidad, $precioDia, $imagen){
        $sql = "UPDATE apartamento SET ALIASAPTO = '$alias', DIREAPTO = '$direApto', CANCAMAS = $canCamas, CAPACIDADAPTO=$capacidad,
        PRECIOXDIA = $precioDia, IMAGEN = '$imagen' WHERE IDAPTO = $idApto ";

        $resultado = $this->db->query($sql);
    }

    public function deleteApto($idApto){
        $sql = "DELETE FROM apartamento WHERE IDAPTO = $idApto ";
        
        $resultado = $this->db->query($sql);
    }

}

?>