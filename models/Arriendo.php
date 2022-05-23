<?php

class Arriendo{

    private $db;
    private $arriendo;

    public function __construct(){
        $this->db = Conexion::conectar();
        $this->arriendo = array();
    }

    public function listarArriendos(){
        $sql = "SELECT * FROM arriendo a INNER JOIN persona p ON a.IDPERSONA = p.IDPERSONA";
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

        while($row = $resultados->fetch_assoc()){
            $this->arriendo[] = $row;
        }
        return $this->arriendo;

    }

    public function insertArriendo($idPersona, $idApto, $fechaIngreso, $fechaSalida){
        
        $sql1 = "SELECT * FROM arriendo WHERE IDAPTO = $idApto";

        $resultado = mysqli_query($this->db,$sql1);

        $insertar =true;

        while($row = $resultado ->fetch_assoc()){
            if($fechaIngreso > $row['FECHAINGRESO'] and $fechaIngreso < $row['FECHASALIDA']){
                $insertar = false;
            }else if($fechaSalida>$row['FECHAINGRESO'] and $fechaSalida<$row['FECHASALIDA']){
                $insertar = false;
            }else if ($fechaIngreso<$row['FECHASALIDA'] and $row['FECHASALIDA']<$fechaSalida){
                $insertar = false;
            }else if($row['FECHAINGRESO'] < $fechaIngreso and $row['FECHASALIDA']>$fechaIngreso){
                $insertar = false;
            }else if($row['FECHAINGRESO'] == $fechaIngreso and $row['FECHASALIDA']==$fechaSalida){
                $insertar = false;
            }else{
                $insertar=true;
            }
        }

        if($insertar==true){
            
            $sql = "INSERT INTO arriendo (IDPERSONA, IDAPTO, FECHAINGRESO, FECHASALIDA)
                     VALUES ($idPersona, $idApto, '$fechaIngreso', '$fechaSalida')";
            
            $this->db->query($sql);
            
        }
    }

    public function getArriendo($idArriendo){
        
        $sql = "SELECT * FROM arriendo WHERE CODARRIENDO = $idArriendo";
        
        $resultado = $this->db->query($sql);
        $row = $resultado->fetch_assoc();
        return $row;

    }

    public function deleteArriendo($idArriendo){
        $sql = "DELETE FROM arriendo WHERE CODARRIENDO = $idArriendo";
        $resultado = $this->db->query($sql);
    }

    public function viewPago(){
        
        $sql = "SELECT * FROM arriendo";
        $resultados = $this->db->query($sql);

        while($row = $resultados->fetch_assoc()){
            $this->arriendo[] = $row;
        }
        return $this->arriendo;

    }

}

?>