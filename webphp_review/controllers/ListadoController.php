<?php 

require_once("model/clientes.php");

class listadoController{
    public function index()
    {
        $clientes = new Clientes();
        $mostrar_clintes = $clientes->listar();
        require_once("views/lista/index.php");
    }
}

