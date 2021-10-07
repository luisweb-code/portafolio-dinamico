<?php

//Creamos nuestro modelo es como de la entidad tabla productos
class Producto
{

    //Encapsulación de nuestras variables
    private $id;
    private $nombre;
    private $descripcion;
    private $precio;
    private $stock;
    private $db;

    //Método construct para llamar a nuestra base de datos, esto sirve para evitar instanciar la clase 
    //el método es static de nuestra clase Database
    public function __construct()
    {
        $this->db = Database::connect();
    }

    /**
     * Obtener el valor de Id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Establecer el valor de Id
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Obtener el valor del nombre
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Establecer el valor del nombre
     */ 
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Obtener el valor de descripcion
     */ 
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Establecer el valor de descripcion
     */ 
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Obtener el valor de precio
     */ 
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Establecer el valor de precio
     */ 
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Obtener el valor del stock
     */ 
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * Establecer el valor del stock
     */ 
    public function setStock($stock)
    {
        $this->stock = $stock;

        return $this;
    }   

    /*
        Metodos propios que nos conectan a la base de datos
     */

     //Obtener todos los productos
     public function getAll()
     {
         $sql = "SELECT * FROM productos";
 
         return $this->db->query($sql);
 
         $result = false;
         if ($save) {
             $result = true;
         }
         return $result;
     }
 
     //Obtener un solo producto
     public function getProduct()
     {
         $sql = "SELECT * FROM productos WHERE id = '{$this->getId()}'";
         return $this->db->query($sql);
     }
 
     //Actualizar un producto
     public function update()
     {
        
        //Consulta a la base de datos
         $sql = "UPDATE productos
         SET
         nombre = '{$this->getNombre()}', 
         descripcion = '{$this->getDescripcion()}',
         precio = '{$this->getPrecio()}',
         stock = '{$this->getStock()}'
         WHERE id = '{$this->getId()}';";

       /*  var_dump($sql); */
        //Retornamos el valor realizando el query
         return $this->db->query($sql);
        
         //Redireccionamos un resultado que sea de ayuda si no se actualizo el producto
         $result = false;
         if ($save) {
             $result = true;
         }
         return $result;
 
     }
 
    //Eliminar un producto
     public function delete()
     {  
         //Consulta de la base de datos
         $sql = "DELETE FROM productos WHERE id = '{$this->getId()}';";
         return $this->db->query($sql);
        
         //Redireccionamos un resultado que sea de ayuda si no se elimino el producto
         $result = false;
         if ($save) {
             $result = true;
         }
         return $result;
     } 
 
     //Conteo de productos totales
     public function getRegistroTotal()
     {
         $sql = "SELECT (COUNT(id) + 1) AS total_registros FROM productos";
 
         return $this->db->query($sql);
     }
 
     //Guardar un producto
     public function guardar()
     {
        
        //Guardamos los valores en variables
         $code = $this->getId();
         $nombre = $this->getNombre();
         $descripcion = $this->getDescripcion();
         $precio = $this->getPrecio();
         $stock = $this->getStock();
         
         //Realizamos la consulta del query
         $sql = "INSERT INTO productos (id, nombre, descripcion, precio, stock) 
         VALUES('{$code}',
         '{$nombre}', 
         '{$descripcion}',
         '{$precio}',
         '{$stock}');";
       
    
        //Realizamos el query en la base de datos
         return $this->db->query($sql);
        
         //Redireccionamos un resultado que sea de ayuda si no se guardo el producto
         $result = false;
         if ($save) {
             $result = true;
         }
         return $result;
 
     } 
}
