<?php 
require_once '../config/Conexion.php';
require_once '../model/Contactos.php';
$conexion = Conexion::conectar();
$contactos = new Contactos();
$resultado = $contactos->listar($conexion);
