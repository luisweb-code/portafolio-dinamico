<?php
require_once "model/clientes.php";
class eliminarController
{

    public function usuario()
    {
        $clientes = new Clientes();
        $mostrar_clintes = $clientes->listar();
        require_once 'views/clientes/eliminar.php';
    }
    
    public function delete()
    {
        
        $id = $_POST["id"];
        
        if (!empty($id)) {
            $clientes = new Clientes();
            $clientes->setId_clientes($id);
            $clientes->delete();
            $resultado = true;
            $this->index($resultado);
            
            
        }
        
    }
    
    public function index($resultado)
    {
        if ($resultado) {
            require_once 'views/clientes/eliminar_completado.php';
        }
    }
}
