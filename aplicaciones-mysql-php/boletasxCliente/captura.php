<?php 

function getCodigo(){
    $codigo = 0;

    if (isset($_POST['txtCodigo']) && !empty($_POST['txtCodigo'])) {
        return $_POST['txtCodigo'];
    
    }else{
        return $codigo;
    }


}





