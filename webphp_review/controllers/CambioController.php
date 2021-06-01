<?php 

require_once("model/Casa.php");

class cambioController{

  public function monto()
  {
      $soles = $_POST['txtSoles'];
      $dolares = $_POST['txtDolares'];
      $marcos = $_POST['txtMarcos'];

      if(!empty($soles) && !empty($dolares) && !empty($marcos)){
        $casa = new casa();
        $casa->setSoles($soles);
        $casa->setDolares($dolares);
        $casa->setMarcos($marcos);

        //Pasamos los resultados a la vista campio
        $soles = $casa->getSoles();
        $dolares = $casa->getDolares();
        $marcos = $casa->getMarcos();
        $euros = $casa->euros();
        require_once('views/secuencial/cambio.php');
    }else{
        $mensaje = true;
        require_once('views/secuencial/cambio.php');
    }
  }

}

