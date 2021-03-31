<?php 


$conexion = mysqli_connect("Localhost", "root", "", "ventas2015");


if ($conexion) {
    echo "Hay conexion";
}else{
    echo"No hay conexion". mysqli_error();
}









