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

    public function buscar()
    {

        $codigo = $_POST["txtCodigo"];

        if (!empty($codigo)) {
            $producto = new Producto();
            $producto->setId_producto($codigo);
            $producto->getId_producto();
            $getProducto = $producto->getProduct();
            require_once 'views/productos/actualizar.php';

        }

    }

    public function save()
    {
        $codigo = $_POST["txtCodigo"];
        $descripcion = $_POST["txtDescripcion"];
        $precio = $_POST["txtPrecio"];
        $stock = $_POST["txtStock"];
        $fecha = $_POST["txtFecha"];

        if (!empty($codigo) && !empty($descripcion) && !empty($precio) && !empty($stock) && !empty($fecha)) {
            $description = strtoupper($descripcion);
            $producto = new Producto();
            $producto->setDescripcion($description);
            $producto->setPrecio($precio);
            $producto->setStock($stock);
            $producto->setFecha_venc($fecha);
            $producto->setId_producto($codigo);
            $producto->update();

        }

        require_once 'views/productos/actualizar.php';
    }

    public function delete()
    {
        $codigo = $_POST['id'];
        
        if (!empty($codigo)) {
            $producto = new Producto();
            $producto->setId_producto($codigo);
            $producto->getDelete();

            require_once 'views/productos/eliminar.php';
        }
    }
}
