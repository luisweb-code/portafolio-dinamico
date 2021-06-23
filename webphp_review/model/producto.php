<?php

class Producto
{

    private $id_producto;
    private $descripcion;
    private $precio;
    private $stock;
    private $fecha_venc;
    private $db;

    public function __construct()
    {
        $this->db = Database::connect();
    }

    /**
     * Get the value of fecha_venc
     */
    public function getFecha_venc()
    {
        return $this->fecha_venc;
    }

    /**
     * Set the value of fecha_venc
     *
     * @return  self
     */
    public function setFecha_venc($fecha_venc)
    {
        $this->fecha_venc = $fecha_venc;

        return $this;
    }

    /**
     * Get the value of stock
     */
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * Set the value of stock
     *
     * @return  self
     */
    public function setStock($stock)
    {
        $this->stock = $stock;

        return $this;
    }

    /**
     * Get the value of precio
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set the value of precio
     *
     * @return  self
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

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
     * Get the value of id_producto
     */
    public function getId_producto()
    {
        return $this->id_producto;
    }

    /**
     * Set the value of id_producto
     *
     * @return  self
     */
    public function setId_producto($id_producto)
    {
        $this->id_producto = $id_producto;

        return $this;
    }

    /*
      Metodos propios
    */ 

    public function getAll()
    {
        $sql = "SELECT * FROM producto";

        return $this->db->query($sql);

        $result = false;
        if($save){
           $result = true; 
        }
        return $result;
    }
}
