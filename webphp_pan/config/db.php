<?php 
//Creamos una clase y un método estatico para 
//Conectarnos a la base de datos
class Database{

    public static function connect()
    {
        $db = new mysqli('localhost', 'root', '', 'panaderia');
        //Configuracion que nos acepte caracteres especiales Ñ Ü etc...
        $db->query("SET NAMES 'utf8'");
        return $db;
    }


}


