<?php 
/*
  Conexiona la base de datos
  Modelo de contactos
*/
require_once '../config/Conexion.php';
require_once '../model/Contactos.php';
$conexion = Conexion::conectar();
$contactos = new Contactos();

$nombre = $_POST['txtnombre'];
$apellidos = $_POST['txtapellidos'];
$telefono = $_POST['txttelefono'];
$correo = $_POST['txtcorreo'];

$contactos->setNombre($nombre);
$contactos->setApellidos($apellidos);
$contactos->setTelefono($telefono);
$contactos->setCorreo($correo);
$contactos->registrar($conexion);




