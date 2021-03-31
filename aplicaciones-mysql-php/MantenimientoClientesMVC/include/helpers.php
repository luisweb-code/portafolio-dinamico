<?php 
require_once'../config/conexion.php';


function listadoDistro(){
    $sql = "SELECT * FROM DISTRO;";

    $con = new Conexion();
    $condb = $con->conectar();

    $lis_distro = mysqli_query($condb, $sql);

    return $lis_distro;

}

function generarCodigo(){
    $sql = "SELECT ID_CLIENTE FROM CLIENTE ORDER BY ID_CLIENTE DESC LIMIT 1;";

    $con = new Conexion();
    $condb = $con->conectar();

    $rs = mysqli_query($condb, $sql);

    $fila = mysqli_fetch_row($rs);

    return 'C'.str_pad((substr($fila[0], -4)+1),4,'0', STR_PAD_LEFT);

}


