<?php

//Implementaciones para los calculos en el proceso

function determinaComision($monto){
    if($monto <= 5000){
        return $monto * 0.10;
    }elseif($monto <= 10000){
        return $monto * 0.20;
    }elseif($monto <= 15000){
        return $monto * 0.30;

    }else{
        return $monto * 0.5;
    }

}


function determinaDescuento($comision){
        if ($comision<1800) {
            return 0;
        }else{
            return $comision*0.12;
        }
}

function calculaMontoNeto($comision, $descuento){
    return $comision - $descuento;
}

