<?php

require_once 'model/tareas.php';

class tareasController
{

    public function save()
    {
        $tarea = $_POST["txtTask"];

        if (!empty($tarea)) {
            $tareas = new Tareas();
            $tareas->setDescripcion($tarea);
            $tareas->saveTarea();
            $registro_exitoso = true;
            $_SESSION["registro_exitoso"] = $registro_exitoso;
            header("Location:" . base_url);
        }

    }

    public function completed()
    {
        $id = $_GET["txtid"];
        if (!empty($id)) {
            $tareas = new Tareas();
            $tareas->setId_tareas($id);
            $tareas->delete();
            $completado = true;
            $_SESSION["completado"] = $completado;
            header("Location:" . base_url);
        }
    }

}
