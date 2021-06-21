<?php

require_once 'model/clientes.php';
require_once 'model/distro.php';

class registroController
{

    public function index()
    {
        $distro = new Distro();
        $allDistro = $distro->getAllDistrito();
        require_once "views/clientes/index.php";
    }

    public function savecliente()
    {
        $codigo = $_POST['txtCodigo'];
        $nombres = $_POST['txtNombres'];
        $paterno = $_POST['txtPaterno'];
        $materno = $_POST['txtMaterno'];
        $direccion = $_POST['txtDireccion'];
        $telefono = $_POST['txtTelefono'];
        $distro = $_POST['txtDistro'];
        $email = $_POST['txtEmail'];

        if (!empty($codigo) && !empty($nombres) && !empty($paterno) && !empty($materno) && !empty($direccion) && !empty($telefono) && !empty($distro) && !empty($email)) {
            $personal = new Clientes();
            $personal->setId_clientes($codigo);
            $personal->setNombres($nombres);
            $personal->setPaterno($paterno);
            $personal->setMaterno($materno);
            $personal->setDireccion($direccion);
            $personal->setFono($telefono);
            $personal->setId_distrito($distro);
            $personal->setEmail($email);

            $status = $personal->save();
            if ($status) {
                $registro = true;
                $this->mensaje($registro);
            } else {
                $registro = false;
                $this->mensaje($registro);
                
            }          
            
        } else {
            $registro = false;
            $this->mensaje($registro);
            
        }
    }

    public function mensaje($registro)
    {
        require_once "views/clientes/registro_completado.php";
    }

}
