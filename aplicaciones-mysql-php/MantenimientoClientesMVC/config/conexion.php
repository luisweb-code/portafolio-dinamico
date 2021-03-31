<?php 

class Conexion{


    private $cn= null;

    //metodo constructor para conectarce al servidor
    public function __construct()
    {
        $this->cn = mysqli_connect('Localhost', 'root', '', 'ventas2015');
    }

    public function conectar()
    {
        return $this->cn;
    }


    //creando un arreglo de los clientes
    public function listado()
    {
        $sql = "SELECT ID_CLIENTE , concat(NOMBRES,' ',PATERNO,' ',MATERNO), DIRECCION, FONO, DESCRIPCION, EMAIL
        FROM CLIENTE C
        JOIN DISTRO D ON C.ID_DISTRITO = D.ID_DISTRO;";
        $rs = mysqli_query($this->cn, $sql);
        while($misClientes = mysqli_fetch_array($rs)){
                $clientes[]=$misClientes;
        }
        return $clientes;
    }

    

}
