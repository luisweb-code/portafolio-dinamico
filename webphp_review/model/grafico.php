<?php 

class Graficos{

    
    private $db;

    public function __construct()
    {
        $this->db = Database::connect();
    }

    public function getDetailProduct()
    {
        $sql = "SELECT p.id_producto, p.descripcion,p.precio, p.stock, de.cantidad FROM producto as p, detalleboleta as de
        WHERE p.id_producto = de.id_producto GROUP BY p.id_producto";

        return $this->db->query($sql);
    }



}


