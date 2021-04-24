<?php 

class listado{


    private $id;
    private $present_tense;
    private $past_tense;
    private $past_participe;
    private $gerund;
    private $spanish;
    private $db;

    //metodo constructor
    public function __construct()
    {
        $this->db = Database::connect(); 
    }

    //Metdo que trae todos los verbos de la base de datos
    public function getTodo()
    {
        $sql = "SELECT * FROM irregular;";
        $lista = $this->db->query($sql);
        return $lista;
    }

    public function getTodoRegular()
    {
        $sql = "SELECT * FROM regular";
        $resultList = $this->db->query($sql);
        return $resultList;
    }



}




