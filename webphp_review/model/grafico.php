<?php 

class Graficos{

    
    private $db;

    public function __construct()
    {
        $this->db = Database::connect();
    }

    public function getDetailProduct()
    {
        $sql = "SELECT * FROM producto";

        return $this->db->query($sql);
    }



}


