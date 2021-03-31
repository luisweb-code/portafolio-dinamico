<?php

//Evitar los errores
error_reporting(0);

//Crear fucniones
function muestraFecha(){
    return date('d/m/Y');
}

function muestraHora(){
    return date('h:i A');
}

function generarCodigo(){
    $n1 = 1;
    return str_pad($n,5,'0', STR_PAD_LEFT);
}

function getProducto(){
    return $_POST['selProducto'];
}

function getCantidad(){
    return $_POST['txtCantidad'];
}

function asignaPrecio($producto){
    switch ($producto) {
        case 'teclado':
            return 20;
            break;
        case 'mouse':
            return 30;
            break;
        case 'impresora':
            return 120;
            break;
        case 'discoDuro':
            return 270;
            break;
        case 'lectoraDVD':
            return 20;
            break;
        
        default:
            return 0;
            break;
    }
}


function productoxDefecto($producto){

    if ($producto == 'teclado') {
    $selT = 'SELECTED';
    }else{
        $selT="";
    }
    if ($producto == 'mouse') {
    $selM = 'SELECTED';
    }else{
        $selM="";
    }
    if ($producto == 'impresora') {
    $selI = 'SELECTED';
    }else{
        $selI="";
    }
    if ($producto == 'discoDuro') {
    $selD = 'SELECTED';
    }else{
        $selD="";
    }
    if ($producto == 'lectoraDVD') {
    $selL = 'SELECTED';
    }else{
        $selL="";
    }

    return array($selT,$selM, $selI, $selD, $selL);
}


function calculaSubtotal($precio, $cantidad){
    return $precio * $cantidad;
}



function calculaDescuento($subtotal){

    if($subtotal <= 300)
        return $subtotal * 0.08;
        elseif ($subtotal <= 500) 
            return $subtotal * 0.1;
    
        else
    
            return $subtotal*0.2;
        
        
    
}

function calculaNeto($subtotal, $descuento){
    return $subtotal - $descuento;
}










