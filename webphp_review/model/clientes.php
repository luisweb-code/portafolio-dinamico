<?php

class Clientes
{

    private $id_clientes;
    private $nombres;
    private $paterno;
    private $materno;
    private $direccion;
    private $fono;
    private $id_distrito;
    private $email;
    private $db;

    public function __construct()
    {
        $this->db = Database::connect();
    }

    /**
     * Get the value of id_clientes
     */
    public function getId_clientes()
    {
        return $this->id_clientes;
    }

    /**
     * Set the value of id_clientes
     *
     * @return  self
     */
    public function setId_clientes($id_clientes)
    {
        $this->id_clientes = $id_clientes;

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
    /*
    Metodos propios
     */
    public function listar()
    {
        $sql = "SELECT * FROM cliente";
        return $this->db->query($sql);

        $result = false;
        if ($save) {
            $result = true;
        }
        return $result;
    }

    public function save()
    {
        $sql = "INSERT INTO cliente VALUES('{$this->getId_clientes()}',
        '{$this->getNombres()}',
        '{$this->getPaterno()}',
        '{$this->getMaterno()}',
        '{$this->getDireccion()}',
        '{$this->getFono()}',
        '{$this->getId_distrito()}',
        '{$this->getEmail()}')";

        return $this->db->query($sql);

        $result = false;
        if ($save) {
            $result = true;
        }
        return $result;
    }
}
