<?php
//Cragamos el modelo es la clase producto
require_once 'model/producto.php';

//Creamos nuestra clase productoController , con sus métodos propios
class productoController
{
    //Método que nos muestra todos los productos
    public function index()
    {
        $product = new Producto();
        $listaProductos = $product->getAll();
        require_once 'views/productos/index.php';
    }

    //Método que nos envia a una vista para actualizar
    public function actualizar()
    {
        require_once 'views/productos/actualizar.php';
    }

    //Método para buscar un producto por id
    public function buscar()
    {

        $codigo = $_POST["txtCodigo"];
        if (!empty($codigo)) {
            $producto = new Producto();
            $producto->setId($codigo);
            $getProducto = $producto->getProduct();
            require_once 'views/productos/actualizar.php';

        }

    }

    //Método para guardar
    public function guardar()
    {
        $codigo = $_POST["txtCodigo"];
        $nombre = $_POST["txtNombre"];
        $descripcion = $_POST["txtDescripcion"];
        $precio = $_POST["txtPrecio"];
        $stock = $_POST["txtStock"];

        //Muestra información de nuestras variables
        /* var_dump($codigo, $nombre, $descripcion, $precio, $stock); */

        //Evalua nuestras variables que no esten vacias
        if (!empty($codigo) && !empty($nombre) && !empty($descripcion) && !empty($precio) && !empty($stock)) {
            //Convertimos todas las mayusculas de descripcion a minusculas y se guardan en la variable
            $description = strtolower($descripcion);

            //Creamos la instancia del objeto y establecemos los valores los valores
            $producto = new Producto();
            $producto->setNombre($nombre);
            $producto->setDescripcion($description);
            $producto->setPrecio($precio);
            $producto->setStock($stock);
            $producto->setId($codigo);
            //Mandamos a llamar al método de update para actualizar en la base de datos este esta en nuestro modelo Productos
            $producto->update();

        }
        
        $actualizacion = true;
        $_SESSION["actualizacion"] = $actualizacion;

        //Incluimos la vista para retornar
        require_once 'views/productos/actualizar.php';
    }

    //Método que cuenta cuantos registros hay en la tabla 
    //genera el id en automatico sin remplazar ningun id 
    //de nuestra tabla , lo enviamos a la vista registro.php
    public function registro()
    {
        $producto = new Producto();
        $total_registros = $producto->getRegistroTotal();
        require_once "views/productos/registro.php";
    }

    //Metodo para guardar nuestro producto en la tabla productos
    public function guardar_producto()
    {
        $codigo = $_POST["txtCode"];
        $nombre = $_POST["txtNombre"];
        $descripcion = $_POST["txtDescripcion"];
        $precio = $_POST["txtPrecio"];
        $stock = $_POST["txtStock"];
        
        //Muestra información de nuestras variables
        /* var_dump($codigo, $nombre, $descripcion, $precio, $stock); */

        //Evalua nuestras variables que no esten vacias
        if (!empty($codigo) && !empty($nombre) && !empty($descripcion) && !empty($precio) && !empty($stock)) {
            //Convertimos todas las mayusculas de descripcion a minusculas y se guardan en la variable
            $description = strtolower($descripcion);
           /*  var_dump($codigo, $nombre, $descripcion, $precio, $stock);
            die(); */
            //Creamos la instancia del objeto y establecemos los valores los valores
            $producto = new Producto();
            $producto->setNombre($nombre);
            $producto->setDescripcion($description);
            $producto->setPrecio($precio);
            $producto->setStock($stock);
            $producto->setId($codigo);
            //Mandamos a llamar al método de guardarProducto() para actualizar en la base de datos este esta en nuestro modelo Productos
            $producto->guardar();

        }
        
        $guardar_exito = true;
        $_SESSION["guardar_exito"] = $guardar_exito;

        //Incluimos la vista para retornar
        $producto = new Producto();
        $total_registros = $producto->getRegistroTotal();
        require_once 'views/productos/registro.php';

        
    }

    //Metodo para eliminar un producto por su id
    public function eliminar()
    {
        $codigo = $_GET['id'];
        
        /* var_dump($codigo); que la variable $codigo no este vacia*/

        //Evaluamos la valor de la variable
      if (!empty($codigo)) {
          //Creamos la instancia
            $producto = new Producto();
            //Seteamos el valor
            $producto->setId($codigo);
            //LLamamos al metodo eliminar
            $producto->delete();

            //creamos una variable de session para dar un mensaje de eliminacion
            $eliminacion = true;
            $_SESSION["eliminacion"] = $eliminacion;
            $product = new Producto();
            $listaProductos = $product->getAll();

            //pasamos la variable de sesion a la vista index.php donde se ven los productos
            require_once 'views/productos/index.php';
        }
    }
}
