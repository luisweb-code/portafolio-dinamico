<?php
require_once 'model/tareas.php';

class mainController
{

    public function index()
    {
        $tareas = new Tareas();
        $listaTareas = $tareas->getTareas();

        require_once 'views/layout/main.php';

    }

}
