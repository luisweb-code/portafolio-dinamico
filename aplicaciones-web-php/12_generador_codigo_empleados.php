<?php

error_reporting(0);

$apellidos = $_POST['txtApellidos'];
$nombres = $_POST['txtNombres'];
$fecnac = $_POST['txtFecnac'];
$estado = $_POST['selEstado'];
$sexo = $_POST['rdSexo'];

$mNombres = '';
$mApellidos = '';
$mFecha = '';
$permitidos = '/^[A-Z ñÑáéíóúÁÉÍÓÚüÜ]{1,100}$/i';

if (!preg_match($permitidos, $apellidos) || !is_string($apellidos)) {
    $mApellidos = "REGISTRE APELLIDOS";

}else{
    $mApellidos;
}

if (!preg_match($permitidos, $nombres) || !is_string($nombres)) {
    $mNombres = "REGISTRE NOMBRES";

}else{
    $mNombres;
}

if (!preg_match('/^\d{1,2}\/\d{1,2}\/\d{4}$/', $fecnac)) {
    $mFecha = "FECHA NO VALIDA";

}else{
    $mFecha;
}

if ($estado == 'soltero') {
    $selS = 'SELECTED';
} else {
    $selS = '';
}
if ($estado == 'casado') {
    $selC = 'SELECTED';
} else {
    $selC = '';
}
if ($estado == 'viudo') {
    $selV = 'SELECTED';
} else {
    $selV = '';
}
if ($estado == 'divorciado') {
    $selD = 'SELECTED';
} else {
    $selD = '';
}

switch ($estado) {
    case 'soltero':
        $cEstado = 1;
        break;
    case 'casado':
        $cEstado = 2;
        break;
    case 'viudo':
        $cEstado = 3;
        break;
    case 'divorciado':
        $cEstado = 4;
        break;

}

if ($sexo == 'M') {
    $cSexo = 1;
}
if ($sexo == 'F') {
    $cSexo = 2;
}

$aFecha = explode('/', $fecnac);
$anio = $aFecha[2];
$edad = date('Y') - $anio;
