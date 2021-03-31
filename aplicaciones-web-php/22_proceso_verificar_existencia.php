<?php

/* error_reporting(0); */

//Funcion para tomar el valor de la variable txtArchivo


function getArchivo(){
    return $_POST['txtArchivo'];
}

function existeArchivo($archivo){
    
    if (file_exists($archivo)) {
        return "Es correcto el archivo";
    }else{
        return "No es correcto el archivo";
    }
}

function ultimaModificacion($archivo){
    
    if (file_exists($archivo)) {
        return date("F d Y H:i:s.", filectime($archivo));
    }else{
        return '';
    }
}


function tipoArchivo($archivo){
        if (file_exists($archivo)) {
            return filetype($archivo);
        }else{
            return "No hay tipo";
        }
}


function tamanioArchivo($archivo){
    if (file_exists($archivo)) {
        return filesize($archivo);
    }else{
        return 0;
    }
}

function ejecutableArchivo($archivo){
    if (is_executable($archivo)) {
        return "Archivo Si ejecutable";
    }else{
        return "Archivo NO ejecutable";
    }
}














