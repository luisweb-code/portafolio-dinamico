<?php 


class boletos{

   private $comprador;
   private $fecha_actual;
   private $entrada_adultos;
   private $entrada_ninos;

   /**
    * Get the value of comprador
    */ 
   public function getComprador()
   {
      return $this->comprador;
   }

   /**
    * Set the value of comprador
    *
    * @return  self
    */ 
   public function setComprador($comprador)
   {
      $this->comprador = $comprador;

      return $this;
   }

   /**
    * Get the value of fecha_actual
    */ 
   public function getFecha_actual()
   {
      return $this->fecha_actual;
   }

   /**
    * Set the value of fecha_actual
    *
    * @return  self
    */ 
   public function setFecha_actual($fecha_actual)
   {
      $this->fecha_actual = $fecha_actual;

      return $this;
   }

   /**
    * Get the value of entrada_adultos
    */ 
   public function getEntrada_adultos()
   {
      return $this->entrada_adultos;
   }

   /**
    * Set the value of entrada_adultos
    *
    * @return  self
    */ 
   public function setEntrada_adultos($entrada_adultos)
   {
      $this->entrada_adultos = $entrada_adultos;

      return $this;
   }

   /**
    * Get the value of entrada_ninos
    */ 
   public function getEntrada_ninos()
   {
      return $this->entrada_ninos;
   }

   /**
    * Set the value of entrada_ninos
    *
    * @return  self
    */ 
   public function setEntrada_ninos($entrada_ninos)
   {
      $this->entrada_ninos = $entrada_ninos;

      return $this;
   }

   public function pago()
   {
       $total = ($this->getEntrada_adultos() * 80) + ($this->getEntrada_ninos() * 32);
       return $total;
   }
}


