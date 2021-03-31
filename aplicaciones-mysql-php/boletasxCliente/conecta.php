<?php 


$conexion = mysqli_connect('localhost', 'root', '', 'ventas2015');

if($conexion){
    echo "Hay conexion";
}else{
    echo "No hay conexion". mysqli_error();
}




