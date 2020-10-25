<?php 

class Conexion{

    public function conecdb()
    {
        $conn = new mysqli('Localhost', 'root', '', 'ventas2015');
        
        return $conn;


    }







}



