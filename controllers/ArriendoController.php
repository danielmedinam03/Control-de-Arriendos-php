<?php
class ArriendoController{

    public function __construct(){
        require_once "models/Arriendo.php";
        
    }

    public function listarArriendos(){
        $arriendos = new Arriendo();
        $dataArriendo['titulo'] = "Arriendos activos";
        $dataArriendo['arriendos'] = $arriendos->listarArriendos();
    
        require_once "views/arriendo/listArriendo.php";
    }

    public function insertArriendo(){
        $dataArriendo['titulo']  = "Registrar un nuevo arriendo";
        require_once "views/arriendo/insertArriendo.php";
    }

    public function storeArriendo(){
        $idCliente = $_POST['idCliente'];
        $idApto = $_POST['idApto'];
        $fechaIngreso = $_POST['fechaIngreso'];
        $fechaSalida = $_POST['fechaSalida'];
        $arriendo = new Arriendo();
        $arriendo ->insertArriendo($idCliente, $idApto, $fechaIngreso, $fechaSalida);
        $this->listarArriendos();

    }

    public function viewArriendo($codArriendo){
        $arriendo = new Arriendo();
        $dataArriendo['titulo'] = "Detalle del Arriendo";
        $dataArriendo['arriendos'] = $arriendo->getArriendo($codArriendo);

        require_once "views/arriendo/viewArriendo.php";
    }

    public function deleteArriendo($id){
        $arriendo = new Arriendo();
        $arriendo ->deleteArriendo($id);
        $this->listarArriendos();
    }

    public function viewPago(){
        $arriendos = new Arriendo();
        $dataArriendo['titulo'] = "Informe de pagos";
        $dataArriendo['arriendos'] = $arriendos->viewPago();
    
        require_once "views/arriendo/viewPago.php";
    }

    
}
?>