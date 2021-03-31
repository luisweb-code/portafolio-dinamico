<?php 


function contador($archivo){
    $clintes = fopen($archivo, 'r');
    $leer = fread($clintes, filesize($archivo));
    $linea = explode(chr(13).chr(10), $leer);
    $numero = count($linea);
    return $numero;

}


//Crear funciones para los elementos de captura 

function getCliente(){
    return $_POST['txtCliente'];
}
function getDireccion(){
    return $_POST['txtDireccion'];
}
function getTelefono(){
    return $_POST['txtTelefono'];
}
function getNacimiento(){
    return $_POST['txtNacimiento'];
}



//Crear una funcion de registro 

function registrar($cod, $cli, $dir, $tel, $fec){

    $abrirArchivo = fopen('./clientes.txt', 'a+');
    $unCliente = $cod.'|'.$cli.'|'.$dir.'|'.$tel.'|'.$fec.chr(13).chr(10);

    fwrite($abrirArchivo, $unCliente);
    fclose($abrirArchivo);
    header('Location: ./index.php');

}


















