<?php
require_once('config/coneccion.php'); 
require_once('models/clientes.php');

class clientesController{


    public function registry()
    {
        if(isset($_POST)){

            $codigo = $_POST['txtCodigo'];
            $nombres = $_POST['txtNombres'];
            $paterno = $_POST['txtPaterno'];
            $materno = $_POST['txtMaterno'];
            $direccion = $_POST['txtDireccion'];
            $telefono = $_POST['txtTelefono'];
            $distro = $_POST['selDistro'];
            $correo = $_POST['txtCorreo'];

            if(isset($codigo) && isset($nombres) && isset($paterno) && isset($materno) && isset($direccion) &&
            isset($telefono) && isset($distro) && isset($correo)){

                $conexion = new  Conexion();
                $condb = $conexion->conecdb();
                
                $cliente = new Clientes();
                $cliente->setId_cliente($codigo);
                $cliente->setNombres($nombres);
                $cliente->setPaterno($paterno);
                $cliente->setMaterno($materno);
                $cliente->setDireccion($direccion);
                $cliente->setFono($telefono);
                $cliente->setId_distrito($distro);
                $cliente->setEmail($correo);
    
                
    
                    //Guardar los registros en la base de datos
                    $sql = "INSERT INTO cliente VALUES('{$cliente->getId_cliente()}',
                    '{$cliente->getNombres()}',
                    '{$cliente->getPaterno()}',
                    '{$cliente->getMaterno()}',
                    '{$cliente->getDireccion()}',
                    '{$cliente->getFono()}',
                    '{$cliente->getId_distrito()}',
                    '{$cliente->getEmail()}');";
                        /* var_dump($sql); */
                    //Guardamos en la base de datos
                    $condb->query($sql);

                    $_SESSION['registro'] = "exito";
            }else{
                $_SESSION['registro'] = "error";
            }
            $_SESSION['registro'] = "error";
      
        }   
        
        

        
    }


    public function getAll()
    {
        $conexion = new  Conexion();
        $con = $conexion->conecdb();
        $sql = "SELECT * FROM distro";
        return $con->query($sql);
        
        

    }






}



