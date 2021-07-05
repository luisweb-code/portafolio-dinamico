<?php

require_once "model/grafico.php";
/*
Aqui van todas la funciones de la API
Estamos creando una API
 */

class apiController
{

    public function items()
    {   
        $api = new apiController();
        $res = $api->getAll();
        require_once "views/apifolder/items.php";
    }

    public function getAll()
    {
        $graf = new Graficos();
        $grafs = array();

        /*
        Se obtiene el objeto y se parsea a JSON
         */
        $grafs["items"] = array();

        $res = $graf->getDetailProduct();

       if ($res->num_rows > 0) { 
            while ($row = $res->fetch_assoc()) {
                $item = array(
                    'id_producto' => $row['id_producto'],
                    'descripcion' => $row['descripcion'],
                    'precio' => $row['precio'],
                    'stock' => $row['stock'],
                    'fecha_venc' => $row['fecha_venc'],
                );
                array_push($grafs['items'], $item);
            }
            //Parseamos el objeto de grafico
            echo json_encode($grafs);
         } else {
            //Metodo para parsear mensaje a tipo JSON
            echo json_encode(array('mensaje' => 'No hay elementos registrados'));
        } 
    }

}
