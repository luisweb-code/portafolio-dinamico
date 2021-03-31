<?php 

require_once('models/listado.php');

class listadoController{


    public function listaIregulares()
    {
        $list = new listado();
        $resLista = $list->getTodo();
        require_once('views/listado/listirregular.php');
        /* echo "Vista listado Irregulares"; */

    }

    
    public function listaRegulares()
    {
        $list = new listado();
        $resLista = $list->getTodoRegular();
        require_once('views/listado/listregular.php');
    }









}



