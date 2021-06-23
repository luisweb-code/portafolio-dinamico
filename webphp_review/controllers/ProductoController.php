<?php
require_once 'model/producto.php';

class productoController
{

    public function index()
    {
        $product = new Producto();
        $listaProductos = $product->getAll();
        require_once 'views/productos/index.php';
    }
    public function actualizar()
    {
        require_once 'views/productos/actualizar.php';
    }

}
