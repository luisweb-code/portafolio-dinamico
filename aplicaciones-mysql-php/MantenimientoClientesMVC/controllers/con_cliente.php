<?php 
require_once('../models/mod_cliente.php');
require_once('../config/conexion.php');


class con_cliente{

    public function buscarCliente()
    {
        if(isset($_POST['txtCodigo'])){
            $codigo = $_POST['txtCodigo'];

            $cliente = new mod_cliente();
            $cliente->setCodigo($codigo);
            
            $con = new Conexion();
            $condb = $con->conectar();
            
            $codCliente = $cliente->buscaCliente($condb);
            
            return $codCliente;

        }
    }


    public function registrarCliente()
    {
       
        $codigo = isset($_POST['txtCodigo']) ? $_POST['txtCodigo'] : false;
        $nombres= isset($_POST['txtNombres']) ? $_POST['txtNombres'] : false;
        $paterno = isset($_POST['txtPaterno']) ? $_POST['txtPaterno'] : false;
        $materno = isset($_POST['txtMaterno']) ? $_POST['txtMaterno'] : false;
        $direccion = isset($_POST['txtDireccion']) ? $_POST['txtDireccion'] : false;
        $telefono = isset($_POST['txtTelefono']) ? $_POST['txtTelefono'] : false;
        $distro = isset($_POST['selDistro']) ? $_POST['selDistro'] : false;
        $email = isset($_POST['txtEmail']) ? $_POST['txtEmail'] : false;
        
        //var_dump($codigo , $nombres, $paterno, $materno, $direccion, $telefono, $distro , $email);
        if($codigo && $nombres && $paterno && $materno && $direccion && $telefono && $distro && $email){
            
            $cliente = new mod_cliente();
            $cliente->setCodigo($codigo);
            $cliente->setNombres($nombres);
            $cliente->setPaterno($paterno);
            $cliente->setMaterno($materno);
            $cliente->setDireccion($direccion);
            $cliente->setFono($telefono);
            $cliente->setDistrito($distro);
            $cliente->setCorreo($email);
            
            $con = new Conexion();
            $condb = $con->conectar();

            $regCliente = $cliente->registroCliente($condb);
            
            return $regCliente;
        }
    }

    public function eliminarCliente()
    {
        if (isset($_POST['txtCodigo'])) {
            $codigo = $_POST['txtCodigo'];

            $cliente = new mod_cliente();
            $cliente->setCodigo($codigo);
            
            $con = new Conexion();
            $condb = $con->conectar();
            
            $cliente->eliminaCliente($condb);

            header("Location:./listado.php");
            
        }
    }

    public function actualizarCliente()
    {
       
        $codigo = isset($_POST['txtCodigo']) ? $_POST['txtCodigo'] : false;
        $nombres= isset($_POST['txtNombres']) ? $_POST['txtNombres'] : false;
        $paterno = isset($_POST['txtPaterno']) ? $_POST['txtPaterno'] : false;
        $materno = isset($_POST['txtMaterno']) ? $_POST['txtMaterno'] : false;
        $direccion = isset($_POST['txtDireccion']) ? $_POST['txtDireccion'] : false;
        $telefono = isset($_POST['txtTelefono']) ? $_POST['txtTelefono'] : false;
        $distro = isset($_POST['selDistro']) ? $_POST['selDistro'] : false;
        $email = isset($_POST['txtEmail']) ? $_POST['txtEmail'] : false;
        
       
        if($codigo && $nombres && $paterno && $materno && $direccion && $telefono && $distro && $email){
            
            $cliente = new mod_cliente();
            $cliente->setCodigo($codigo);
            $cliente->setNombres($nombres);
            $cliente->setPaterno($paterno);
            $cliente->setMaterno($materno);
            $cliente->setDireccion($direccion);
            $cliente->setFono($telefono);
            $cliente->setDistrito($distro);
            $cliente->setCorreo($email);
            
            $con = new Conexion();
            $condb = $con->conectar();

            $regCliente = $cliente->actualizaCliente($condb);
           
            
            header("Location:./listado.php");
        }
        
    }






}









