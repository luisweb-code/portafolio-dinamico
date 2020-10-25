<?php
require_once('models/foto.php');
require_once('config/coneccion.php');

class fotoControllers{


    public function registro()
    {
         if(isset($_POST)){
           /*  var_dump($_POST);
            print_r($_FILES);    
            
            */
            $id_cliente = $_POST['txtCodigo'];
            $nombre = $_POST['txtNombre'];
            $paterno = $_POST['txtPaterno'];
            $materno = $_POST['txtMaterno'];
            $direccion = $_POST['txtDireccion'];
            $fono = $_POST['txtTelefono'];
            $id_distrito = $_POST['selDistro'];
            $email = $_POST['txtCorreo'];
            
            
            if(isset($id_cliente) && isset($nombre) && isset($paterno) && isset($materno) && isset($direccion)  && isset($fono)  && isset($id_distrito) && isset($email) ){
                $foto = new Foto();
                $foto->setId_cliente($id_cliente);
                $foto->setNombre($nombre);
                $foto->setPaterno($paterno);
                $foto->setMaterno($materno);
                $foto->setDireccion($direccion);
                $foto->setFono($fono);
                $foto->setId_distrito($id_distrito);
                $foto->setEmail($email);

                //guardar la imagen
    
                if (isset($_FILES['picImagen'])) {
                    $nuevoNombre = $foto->getId_cliente().'.jpg';
                    $file = $_FILES['picImagen'];
                    $filename = $file['name'];
                    $mimetype = $file['type'];
        
                    //comprobar si la imagen es un aimagen
                    if($mimetype == "image/jpg" || $mimetype == 'image/jpeg' || $mimetype == 'image/png' || $mimetype == 'imagen/gif'){
        
                        if (!is_dir('uploads/images')) {
                            mkdir('uploads/images', 0777, true);
                        }
        
                        $foto->setImagen($nuevoNombre);
                        move_uploaded_file($file['tmp_name'], 'uploads/images/'. $nuevoNombre);
                    } 
                    # code...
                    $conexion = new Conexion();
                    $conMysql = $conexion->conecdb();
                    //guardamos los datos en la base de datos
                    $sql = "INSERT INTO cliente VALUES ('{$foto->getId_cliente()}', 
                    '{$foto->getNombre()}', 
                    '{$foto->getPaterno()}', 
                    '{$foto->getMaterno()}', 
                    '{$foto->getDireccion()}', 
                    '{$foto->getFono()}', 
                    '{$foto->getId_distrito()}', 
                    '{$foto->getEmail()}', 
                    '{$foto->getImagen()}');";
    
                    //insertamos datos en la base de datos
                    $conMysql->query($sql);

                    return $_SESSION['registro'] = "exito";

                }


            }else{
                return $_SESSION['registro'] = "error"; 
                

            }
            

        } else{
           return $_SESSION['registro'] = "error";
            

        }

        
   
        
    }

    public function distrito()
    {
        $conexion = new Conexion();
        $conMyslq = $conexion->conecdb();
        $sql = "SELECT * FROM distro";
        $resultDistro = $conMyslq->query($sql);
        return $resultDistro;
        var_dump($resultDistro);
    }







}



