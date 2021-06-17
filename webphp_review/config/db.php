<?php 

class Database{

    public static function connect()
    {
        $db = new mysqli('localhost', 'root', '', 'ventas2015');
        $db->query("SET NAMES 'utf8'");
        return $db;
    }


}


