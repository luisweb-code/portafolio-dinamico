<?php 


class Clientes{

    //Atributos
    private $id_cliente;
    private $nombres;
    private $paterno;
    private $materno;
    private $direccion;
    private $fono;
    private $id_distrito;
    private $email;

    /**
     * Get the value of id_cliente
     */ 
    public function getId_cliente()
    {
        return $this->id_cliente;
    }

    /**
     * Set the value of id_cliente
     *
     * @return  self
     */ 
    public function setId_cliente($id_cliente)
    {
        $this->id_cliente = $id_cliente;

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
     * Get the value of id_distrito
     */ 
    public function getId_distrito()
    {
        return $this->id_distrito;
    }

    /**
     * Set the value of id_distrito
     *
     * @return  self
     */ 
    public function setId_distrito($id_distrito)
    {
        $this->id_distrito = $id_distrito;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    




}


