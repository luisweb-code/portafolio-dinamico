<?php

require_once "model/clientes.php";
require_once "model/distro.php";

class listadoController
{
    public function index()
    {
        $clientes = new Clientes();
        $mostrar_clintes = $clientes->listar();
        require_once "views/lista/index.php";
    }

    public function distro()
    {
        $distro = new Distro();
        $allDistro = $distro->getAllDistrito();
        $id_distro = $_POST['distro'];

        $distro = new Distro();
        $distro->setId_distro($id_distro);
        $get_Distro = $distro->getDistro();
        $descripcion = $distro->getNombreDistro();
        $row_cnt = $distro->getDistro()->num_rows;

        require_once "views/lista/buscar.php";

    }

}
