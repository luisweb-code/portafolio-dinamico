<?php
require_once 'model/personal.php';

class onixController
{

    public function registro()
    {
        require_once "views/onix/registro.php";
    }

    public function save()
    {
        $nombres = $_POST['txtNombres'];
        $apellido = $_POST['txtApellido'];
        $direccion = $_POST['txtDireccion'];
        $telefono = $_POST['txtTelefonos'];
        $telefonos = implode(",", $telefono);

        if (!empty($nombres) && !empty($apellido) && !empty($direccion) && !empty($telefonos)) {
            $personal = new Personal();
            $personal->setNombres($nombres);
            $personal->setApellido($apellido);
            $personal->setDireccion($direccion);
            $personal->setTelefonos($telefonos);

            $status = $personal->registroPersonal();
            if($status){
                $registro = true;
                require_once("views/onix/registro.php");
            }else{
                $registro = false;
                require_once("views/onix/registro.php");
            }

            header("Location:".base_url.'onix/registro');
           

        } else {
            $registro = false;
                require_once("views/onix/registro.php");
        }

    }
}
