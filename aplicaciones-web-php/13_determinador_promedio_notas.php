<?php
error_reporting(0);

//Determinar las variables
$alumno = $_POST['txtAlumno'];
$nota1 = $_POST['txtNota1'];
$nota2 = $_POST['txtNota2'];
$nota3 = $_POST['txtNota3'];
$nota4 = $_POST['txtNota4'];

//Validación del formulario para nombres y notas
$mAlumno = "";
$permitidos = '/^[A-Z ÜüáéíóúÁÉÍÓÚñÑ]{1,100}$/i';

if (!preg_match($permitidos, $alumno) || !is_string($alumno)) {
    $mAlumno = "Registre nombre... ";
}


$mNota1 = "";
$mNota2 = "";
$mNota3 = "";
$mNota4 = "";

if (empty($nota1) || !is_numeric($nota1)) {
    $mNota1 = "Error en NOTA 1";
}elseif($nota<0 || $nota>20){
    $mNota1 = "Error en NOTA 1";

}
if (empty($nota2) || !is_numeric($nota2)) {
    $mNota2 = "Error en NOTA 2";
}elseif($nota<0 || $nota>20){
    $mNota2 = "Error en NOTA 2";

}
if (empty($nota3) || !is_numeric($nota3)) {
    $mNota3 = "Error en NOTA 3";
}elseif($nota<0 || $nota>20){
    $mNota3 = "Error en NOTA 3";

}
if (empty($nota4) || !is_numeric($nota4)) {
    $mNota4 = "Error en NOTA 4";
}elseif($nota<0 || $nota>20){
    $mNota4 = "Error en NOTA 4";

}


//Array de notas y determina el promedio max, min , condicion

$notas = array($nota1,$nota2,$nota3,$nota4);

$mayor = max($notas);
$menor = min($notas);

$promedio = round(($nota1 + $nota2 + $nota3 + $nota4-$menor)/3,0);

if ($promedio >= 13) {
    $condicion = 'Aprobado';
}else{
    $condicion = 'Desaprobado';
}