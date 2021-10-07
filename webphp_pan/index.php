<?php 
//Cargamos los archivos de configuración
//Utilizaremos sessiones para pasar variables a las vistas
session_start();
require_once ('auto_load.php');
require_once ('config/db.php');
require_once ('config/parameters.php');
require_once ('views/layout/header.php');


//Funcion que nos muestra el el mensaje de error
function show_error(){
    $error = new errorController();
    $error->index();
} 

//Comprueba si el controlador y el método existen
//Si no nos devuelve el mensaje de error que creamos en nuestra función
if (isset($_GET['controller'])) {
    $nombre_controlador = $_GET['controller'].'Controller';
}elseif(!isset($_GET['controller']) && !isset($_GET['action'])){
    $nombre_controlador = controller_default;
}else{
    show_error();
    exit();
} 

//Si la clase controlador existe y el método tambien 
//Se ejecuta dicho método
//En caso de que la clase controlador exista pero el método no nos devuelve un mensaje de error
if (class_exists($nombre_controlador)) {

    $controlador = new $nombre_controlador();
    if (isset($_GET['action']) && method_exists($controlador, $_GET['action'])) {

        $action = $_GET['action'];
        $controlador->$action();

    }elseif(!isset($_GET['controller']) && !isset($_GET['action'])){
        $action_default = action_default;
        $controlador->$action_default();
    }else {
        show_error();
    }

}else{
    show_error();
}
//Carga el footer de nuestro proyecto
require_once ('views/layout/footer.php');
