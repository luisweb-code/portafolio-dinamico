<?php 

require_once('models/regular.php');

class regularController{


    public function formulario()
    {
        $regular = new Regular();
        $regularVerb = $regular->getAleatorio(1);
        require_once('views/regular/formularioRegular.php');

  
    }


    public function evaluador()
    {
        //Evaluar los datos 
        $id = $_POST['txtcode'];
        $presentTense = $_POST['txtPresentTense'];
        $pastTense = $_POST['txtPastTense'];
        $pastParticipe = $_POST['txtPastParticipe'];

        if (isset($id) && isset($presentTense) && isset($pastTense) && isset($pastParticipe)) {
            
            //creamos el objeto y establecemos los datos

            $regular = new Regular();
            $regular->setId($id);
            $regular->setPresent_tense($presentTense);
            $regular->setPast_tense($pastTense);
            $regular->setPast_participe($pastParticipe);
            $regularVerb = $regular->getTresTiempos($regular->getId());
            $rowTiempo = $regularVerb->fetch_array(MYSQLI_NUM);
            
            if ($rowTiempo[0] == $regular->getPresent_tense() && $rowTiempo[1] == $regular->getPast_tense() && $rowTiempo[2] == $regular->getPast_participe()) {
                
                $acierto = true;
                $_SESSION['acierto'] = $acierto;
               
            }else{
                $error = false;
                $_SESSION['error'] = $error;
               
                
            }

            //Redireccion 
            header("Location:".base_url."regular/formulario");
        }
    }

    

    




}





