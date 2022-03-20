<?php

class Conexion
{

    public static function conectar()
    {

        $servidor = "localhost";
        $usuario = "root";
        $pass = "";
        $base_datos = "examen";

        $conexion = new mysqli($servidor, $usuario, $pass, $base_datos);

        /*if($conexion){
        echo "<h2 style='color:#fff;'>Conexion</h2>";
        }*/

        return $conexion;
    }

}
