<?php

class Distro
{

    private $id_distro;
    private $descripcion;
    private $db;

    public function __construct()
    {
        $this->db = Database::connect();
    }

    /**
     * Get the value of id_distro
     */
    public function getId_distro()
    {
        return $this->id_distro;
    }

    /**
     * Set the value of id_distro
     *
     * @return  self
     */
    public function setId_distro($id_distro)
    {
        $this->id_distro = $id_distro;

        return $this;
    }

    /**
     * Get the value of descripcion
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set the value of descripcion
     *
     * @return  self
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get the value of db
     */
    public function getDb()
    {
        return $this->db;
    }

    /**
     * Set the value of db
     *
     * @return  self
     */
    public function setDb($db)
    {
        $this->db = $db;

        return $this;
    }

    /* Metdos propios */
    public function getAllDistrito()
    {
        $sql = "SELECT * FROM distro";
        return $this->db->query($sql);

        $result = false;
        if ($save) {
            $result = true;
        }
        return $result;
    }

    public function getNombreDistro()
    {
        $sql = "SELECT descripcion FROM distro WHERE id_distro = '{$this->getId_distro()}'";
        return $this->db->query($sql);
        $result = false;
        if ($save) {
            $result = true;
        }
        return $result;
    }

    public function getDistro()
    {
        $sql = "SELECT id_cliente, concat(nombres,' ', paterno,' ',materno) as nombre_completo, fono, descripcion FROM cliente
        INNER JOIN distro ON id_distrito = id_distro
        WHERE id_distrito = '{$this->getId_distro()}'";

        return $this->db->query($sql);

        $result = false;
        if ($save) {
            $result = true;

        }
        return $result = true;
    }
}
