<?php 

class casa{
    private $soles;
    private $dolares;
    private $marcos;
  

    /**
     * Get the value of soles
     */ 
    public function getSoles()
    {
        return $this->soles;
    }

    /**
     * Set the value of soles
     *
     * @return  self
     */ 
    public function setSoles($soles)
    {
        $this->soles = $soles;

        return $this;
    }

    /**
     * Get the value of dolares
     */ 
    public function getDolares()
    {
        return $this->dolares;
    }

    /**
     * Set the value of dolares
     *
     * @return  self
     */ 
    public function setDolares($dolares)
    {
        $this->dolares = $dolares;

        return $this;
    }

    /**
     * Get the value of marcos
     */ 
    public function getMarcos()
    {
        return $this->marcos;
    }

    /**
     * Set the value of marcos
     *
     * @return  self
     */ 
    public function setMarcos($marcos)
    {
        $this->marcos = $marcos;

        return $this;
    }

    public function euros()
    {
        $totalEuros = (($this->getSoles()/3.15) + $this->getDolares() + ($this->getMarcos()/2.12)) * 1.09;
        return $totalEuros;
    }
}


