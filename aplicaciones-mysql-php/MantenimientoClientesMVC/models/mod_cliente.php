<?php 


class mod_cliente{
    //Declaramos los atributos de la clase
    private $codigo;
    private $nombres;
    private $paterno;
    private $materno;
    private $direccion;
    private $fono;
    private $distrito;
    private $correo;

    /**
     * Get the value of codigo
     */ 
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set the value of codigo
     *
     * @return  self
     */ 
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get the value of nombres
     */ 
    public function getNombres()
    {
        return $this->nombres;
    }

    /**
     * Set the value of nombres
     *
     * @return  self
     */ 
    public function setNombres($nombres)
    {
        $this->nombres = $nombres;

        return $this;
    }

    /**
     * Get the value of paterno
     */ 
    public function getPaterno()
    {
        return $this->paterno;
    }

    /**
     * Set the value of paterno
     *
     * @return  self
     */ 
    public function setPaterno($paterno)
    {
        $this->paterno = $paterno;

        return $this;
    }

    /**
     * Get the value of materno
     */ 
    public function getMaterno()
    {
        return $this->materno;
    }

    /**
     * Set the value of materno
     *
     * @return  self
     */ 
    public function setMaterno($materno)
    {
        $this->materno = $materno;

        return $this;
    }

    /**
     * Get the value of direccion
     */ 
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set the value of direccion
     *
     * @return  self
     */ 
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get the value of fono
     */ 
    public function getFono()
    {
        return $this->fono;
    }

    /**
     * Set the value of fono
     *
     * @return  self
     */ 
    public function setFono($fono)
    {
        $this->fono = $fono;

        return $this;
    }

    /**
     * Get the value of distrito
     */ 
    public function getDistrito()
    {
        return $this->distrito;
    }

    /**
     * Set the value of distrito
     *
     * @return  self
     */ 
    public function setDistrito($distrito)
    {
        $this->distrito = $distrito;

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

    //metodo que permite buscar a un determinado cliente
    public function buscaCliente($condb)
    {

        $sql="SELECT * FROM CLIENTE WHERE ID_CLIENTE = '{$this->getCodigo()}'";
        $rs=mysqli_query($condb, $sql);
        $cliente = mysqli_fetch_array($rs);

        return $cliente;

    }

    public function registroCliente($condb)
    {
        $sql = "INSERT INTO CLIENTE VALUES ('{$this->getCodigo()}', '{$this->getNombres()}',
        '{$this->getPaterno()}', '{$this->getMaterno()}', '{$this->getDireccion()}', '{$this->getFono()}',
        '{$this->getDistrito()}', '{$this->getCorreo()}', null);";
        
        /* var_dump($sql);
        die(); */
           $rs =  mysqli_query($condb, $sql);

            header('Location: index.php');

    }
}



