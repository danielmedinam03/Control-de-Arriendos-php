<?php
class AptoController{

    public function __construct(){
        require_once "models/Apto.php";
    }

    public function listarAptoPpl(){
        $aptos = new Apto();
        $dataApto['titulo'] = "Mi arriendo";
        $dataApto['aptos'] = $aptos->listarApto();

        require_once "views/Apto/listAptoPpl.php";
    }

    public function listarApto(){
        $aptos = new Apto();
        $dataApto['titulo'] = "Apartamentos";
        $dataApto['aptos'] = $aptos->listarApto();

        require_once "views/Apto/listApto.php";
    }

    public function insertApto(){
        $dataApto['titulo'] = "Crear apartamento";
        require_once "views/Apto/insertApto.php";
    }

    public function storeApto(){
        
        $alias = $_POST['alias'];
        $direApto = $_POST['direApto'];
        $canCamas = $_POST['canCamas'];
        $capacidad = $_POST['capacidad'];
        $precioDia = $_POST['precioDia'];
       
        $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

        $apto = new Apto();
        $apto->insertApto($alias, $direApto, $canCamas, $capacidad, $precioDia, $imagen);
        $this->listarAptoPpl();
    }

    public function viewApto($idApto){
        $apto = new Apto();
        $dataApto['titulo'] = "Detalles del Apartamento";
        $dataApto['apto'] = $apto->getApto($idApto);

        require_once "views/Apto/viewApto.php";
    }

    public function editApto($idApto){
        $apto = new Apto();
        $dataApto['idApto'] = $idApto;
        $dataApto['apto'] = $apto->getApto($idApto);
        $dataApto['titulo'] = "Actualizar apartamento";
        require_once "views/Apto/editApto.php";
    }

    public function updateApto(){

        $idApto = $_POST['idApto'];
        $alias = $_POST['aliasApto'];
        $direApto = $_POST['direApto'];
        $canCamas = $_POST['canCamas'];
        $capacidad = $_POST['capacidad'];
        $precioDia = $_POST['precioDia'];
        $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

        $apto = new Apto();
        $apto->updateApto($idApto,$alias,$direApto,$canCamas,$capacidad,$precioDia, $imagen);
        $this->listarAptoPpl();

    }

    public function deleteApto($idApto){
        $apto = new Apto();
        $apto->deleteApto($idApto);
        $this->listarAptoPpl();
    }

}
?>