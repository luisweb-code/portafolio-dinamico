<?php

class Contactos
{
    private $nombre;
    private $apellidos;
    private $telefono;
    private $correo;

    /**
     * Get the value of nombre
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of apellidos
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set the value of apellidos
     *
     * @return  self
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Get the value of telefono
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set the value of telefono
     *
     * @return  self
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get the value of correo
     */
    public function getCorreo()
    {
        return $this->correo;
    }

    /**
     * Set the value of correo
     *
     * @return  self
     */
    public function setCorreo($correo)
    {
        $this->correo = $correo;

        return $this;
    }

    /*
       Métodos propios
    
    */

    public function registrar($conexion){

        $nombre = $this->getNombre();
        $apellidos = $this->getApellidos();
        $telefono = $this->getTelefono();
        $correo = $this->getCorreo();

        if(!empty($nombre) && !empty($apellidos) &&!empty($telefono) &&!empty($correo)){
            //var_dump($nombre, $apellidos, $telefono, $correo);
            $sql = "INSERT INTO AGENDA VALUES(NULL, '${nombre}', '${apellidos}', '${telefono}', '${correo}');";
            $result = $conexion->query($sql);
            if($result){
                $mensaje = true;
                require_once '../view/agregar.php';
            }else{
                $mensaje = false;
                require_once '../view/agregar.php';
            }
        }else{
            $mensaje = false;
            require_once '../view/agregar.php';

        }
    }

    public function listar($conexion){
        $sql = "SELECT * FROM AGENDA;";
        $result = $conexion->query($sql);
        return $result;
    }

}
