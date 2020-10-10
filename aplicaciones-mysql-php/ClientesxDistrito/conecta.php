<?php 

//Conexion ala base de datos
$server = 'localhost';
$user = "root";
$pass = "";
$baseDatos = "ventas2015";


$conexion = mysqli_connect($server, $user, $pass, $baseDatos);


if($conexion){
    echo "Hay conexion";
}else{
    echo "no hay conexion". mysqli_error($conexion);
}




