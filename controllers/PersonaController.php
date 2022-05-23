<?php

class PersonaController{

    public function __construct(){
        require_once "models/Persona.php";
    }

    public function listar(){
        $personas = new Persona();
        $data["titulo"] = "Clientes registrados";
        $data["personas"] = $personas->listar();

        require_once "views/persona/list.php";
    }

    public function insert(){
        $data['titulo'] = "Registrar un nuevo cliente";

        require_once "views/persona/insert.php";
    }

    public function store(){
        $nombre = $_POST["nombre"];
        $direccion = $_POST["direccion"];
        $origen = $_POST["origen"];
        $numAcompanantes = $_POST["numAcompanantes"];

        $persona = new Persona();
        $persona->insert($nombre, $direccion, $origen, $numAcompanantes);

        $this->listar();
    }

    public function view($id){
        $persona = new Persona();
        $data['titulo'] = "Detalle del cliente";
        $data['persona'] = $persona->getPersona($id);

        require_once "views/persona/view.php";

    }

    public function edit($id){

        $persona = new Persona();
        $data['id'] = $id;
        $data['persona'] = $persona->getPersona($id);
        $data['titulo'] = "Actualizar datos del cliente";
        require_once "views/persona/edit.php";

    }

    public function update(){

        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $direccion = $_POST['direccion'];
        $origen = $_POST['origen'];
        $numAcompanantes = $_POST['numAcompanantes'];

        $persona = new Persona();
        $persona->update($id, $nombre, $direccion, $origen, $numAcompanantes);
        $this->listar();

    }

    public function delete($id){
        $persona = new Persona();
        $persona ->delete($id);
        $this->listar();
    }

}

?>
