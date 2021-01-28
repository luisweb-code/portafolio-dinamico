<?php
    require_once("./Config/config.php");
    $url = !empty( $_GET['url']) ? $_GET['url'] : 'home/home';
    $arrUrl = explode("/", $url);
    //Se esta separando por un array
    $controller = $arrUrl[0];
    $method = $arrUrl[0];
    $params = "";

    if(!empty($arrUrl[1])){
        if($arrUrl[1] != ""){
            $method = $arrUrl[1];
        }
    }

    //Evaluamos los parametros
    if(!empty($arrUrl[2])){
        if ($arrUrl[2] != "") {
            for ($i=2; $i < count($arrUrl) ; $i++) { 
                $params .= $arrUrl[$i].',';
            }
            $params = trim($params, ',');
            
        }
    }

    require_once('./Libraries/Core/Autoload.php');
    require_once('./Libraries/Core/Load.php');

   /*  echo "<br>";
    echo "Controller".$controller;
    echo "<br>";
    echo "Metodos".$method;
    echo "<br>";
    echo "Parametros". $params; */
?>