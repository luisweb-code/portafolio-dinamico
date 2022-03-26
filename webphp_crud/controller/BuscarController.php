<?php 
/*Seccion para eliminar*/
require_once '../config/Conexion.php';
require_once '../model/Contactos.php';

$conexion = Conexion::conectar();
$contactos = new Contactos();
$correo = $_GET['correo'];
$resultado = $contactos->buscar($correo, $conexion);

if($resultado){
    require_once '../view/editar.php';
}else{
    require_once '../view/listar.php';
}


