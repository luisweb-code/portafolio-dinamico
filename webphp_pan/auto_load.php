<?php 
//Una función para cargar las clases de tipo controller
function controllers_autoload($classname){
    include 'controllers/'. $classname . '.php';
}

//Carga nuestras funciones dadas en este caso nuestra controllers_autoload se agrega
spl_autoload_register('controllers_autoload');