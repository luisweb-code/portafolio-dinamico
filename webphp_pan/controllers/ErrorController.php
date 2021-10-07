<?php 

//Contiene la clase de error y el método index para darnos el mensaje de error
// de que el método o controllador no existe

class errorController{
    
    public function index()
    {
        echo"<h4>La pagina que buscas no existe 404</h4>";
    }
}