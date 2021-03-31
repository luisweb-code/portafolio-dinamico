<?php

require_once('models/irregular.php');

class irregularController{
    public function index()
    {
        require_once('views/irregular/inicio.php');
    }

    public function formulario()
    {   
        $irregular = new Irregular();
        $irregularVerb = $irregular->getAleatorio(1);
        
        require_once('views/irregular/formulario.php');

   }

        
    

    public function consultar(){
        
     //var_dump($_POST);
     $codigoId = $_POST['txtcode'];
     $presentTense = $_POST['txtPresentTense'];
     $pastTense = $_POST['txtPastTense'];
     $pastParticipe = $_POST['txtPastParticipe'];

     
     
     if(isset($codigoId) && isset($presentTense) && isset($pastTense) && isset($pastParticipe)){
       
        //creamos el objeto para establecer los datos
        $irregular = new Irregular();
        $irregular->setId($codigoId);
        $irregular->setPresent_tense($presentTense);
        $irregular->setPast_tense($pastTense);
        $irregular->setPast_participe($pastParticipe);
        
        //Aqui se llama al metodo que evalua si es correcto o no
        $irregularVerb = $irregular->getComparador($irregular->getId());
        $rowV = $irregularVerb->fetch_array(MYSQLI_NUM);
       
        if ($irregular->getPresent_tense() == $rowV[0] && $irregular->getPast_tense() == $rowV[1] && $irregular->getPast_participe() == $rowV[2]) {
            
            $acierto = true;
           $_SESSION["acierto"] = $acierto;
           
    
            
        }else{
            
            $error = false;
            $_SESSION["error"] = $error;
          
        }
        
       //Redireccion 
       header("Location:".base_url."irregular/formulario");  

     }
        
    }

   

   
}