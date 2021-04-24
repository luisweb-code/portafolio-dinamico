<?php 


class Regular{


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
    
    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of present_tense
     */ 
    public function getPresent_tense()
    {
        return $this->present_tense;
    }

    /**
     * Set the value of present_tense
     *
     * @return  self
     */ 
    public function setPresent_tense($present_tense)
    {
        $this->present_tense = $this->db->real_escape_string($present_tense);

        return $this;
    }

    /**
     * Get the value of past_tense
     */ 
    public function getPast_tense()
    {
        return $this->past_tense;
    }

    /**
     * Set the value of past_tense
     *
     * @return  self
     */ 
    public function setPast_tense($past_tense)
    {
        $this->past_tense = $this->db->real_escape_string($past_tense);

        return $this;
    }

    /**
     * Get the value of past_participe
     */ 
    public function getPast_participe()
    {
        return $this->past_participe;
    }

    /**
     * Set the value of past_participe
     *
     * @return  self
     */ 
    public function setPast_participe($past_participe)
    {
        $this->past_participe = $this->db->real_escape_string($past_participe);

        return $this;
    }

    /**
     * Get the value of gerund
     */ 
    public function getGerund()
    {
        return $this->gerund;
    }

    /**
     * Set the value of gerund
     *
     * @return  self
     */ 
    public function setGerund($gerund)
    {
        $this->gerund = $gerund;

        return $this;
    }

    /**
     * Get the value of spanish
     */ 
    public function getSpanish()
    {
        return $this->spanish;
    }

    /**
     * Set the value of spanish
     *
     * @return  self
     */ 
    public function setSpanish($spanish)
    {
        $this->spanish = $spanish;

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

    //Métodos propios
    public function getAleatorio($limit)
    { 
        $irregularVerb = $this->db->query("SELECT * FROM regular ORDER BY rand() LIMIT $limit;");
        return $irregularVerb;
    }    


    public function getTresTiempos($id)
    {
        $tresTiempo = $this->db->query("SELECT prensent_tense, past_tense, past_participe FROM regular WHERE id = $id;");
        return $tresTiempo;
    }



}




