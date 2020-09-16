<?php 


class Pago{

    private $nombre = '';
    private $categoria = '';
    private $horasTrabajadas = '';


    //Metodo constructor
    public function __construct($nombre, $categoria, $horasTrabajadas)
    {
        $this->nombre = $nombre;
        $this->categoria = $categoria;
        $this->horasTrabajadas = $horasTrabajadas;
        
    }

    //Encapslamiento y metodos set y get
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

     
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;

        return $this;
    }

    
    public function setHorasTrabajadas($horasTrabajadas)
    {
        $this->horasTrabajadas = $horasTrabajadas;

        return $this;
    }

        //Metodos propios de la clase
        public function determinarCostoHora()
        {
            if ($this->categoria == 'operario')
                return 10;
                elseif($this->categoria == 'administrador')
                    return 20;
                elseif($this->categoria == 'jefe')
                    return 40;
                else
                    return 0; 
                
            
        }

        public function calculaSubtotal(){
            return $this->determinarCostoHora()*$this->horasTrabajadas;
        }

        public function calculaDescuento(){
            if($this->calculaSubtotal() < 1000)
                return 0.075 * $this->calculaSubtotaL();
                elseif($this->calculaSubtotal()<= 2000)
                return 0.14 * $this->calculaSubtotal();
                elseif($this->calculaSubtotal()>2000)
                return 0.20 * $this->calculaSubtotal();
                else
                return 0;
        }


        public function calculaNeto(){
            return $this->calculaSubtotal() - $this->calculaDescuento();
        }



}

