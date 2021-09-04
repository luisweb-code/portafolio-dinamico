<?php

class Tareas
{
    private $id_tareas;
    private $descripcion;
    private $fecha;
    private $db;

    public function __construct()
    {
        $this->db = Database::connect();
    }

    /**
     * Get the value of id_tareas
     */
    public function getId_tareas()
    {
        return $this->id_tareas;
    }

    /**
     * Set the value of id_tareas
     *
     * @return  self
     */
    public function setId_tareas($id_tareas)
    {
        $this->id_tareas = $id_tareas;

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
     * Get the value of fecha
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set the value of fecha
     *
     * @return  self
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }
    /*
    Metodos propios
     */
    public function saveTarea()
    {

        $descripcion = $this->getDescripcion();

        $sql = "INSERT INTO tareas (descripcion, fecha) VALUES('{$descripcion}', CURDATE())";

        return $this->db->query($sql);

        $result = false;
        if ($save) {
            $result = true;
        }
        return $result;

    }
}
