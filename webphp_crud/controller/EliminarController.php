<?php 
/*Seccion para eliminar*/
require_once '../config/Conexion.php';
require_once '../model/Contactos.php';

$conexion = Conexion::conectar();
$contactos = new Contactos();
$correo = $_GET['correo'];
$contactos->eliminar($correo, $conexion);

