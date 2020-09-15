<?php 

class Producto{


    //Propiedades
    private $descripcion='';
    private $cantidad=0;


    //Metodos get y set encapsulado de los atributos
       
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }

   
    public function getCantidad()
    {
        return $this->cantidad;
    }


    //Metodos propios
    public function determinarPrecio()
    {
        if($this->descripcion == 'videograbadora')
            return 1500;
            elseif($this->descripcion == 'camara')
                return 900;
            elseif($this->descripcion == 'televisor')
                return 2500;
            elseif($this-descripcion == 'radiograbadora')
                return 500;
            elseif($this->descripcion == '')
                return 0; 

        
    }

    public function calculaSubtotal()
    {
        return $this->determinarPrecio() * $this->cantidad;
    }

    public function calculaDescuento()
    {
        return $this->calculaSubtotal() * 0.1;
    }

 
    public function calculaNeto(){
        return $this->calculaSubtotal() - $this->calculaDescuento();
    }



}











