<?php
require_once('model/Boletos.php');

class boletosController
{

    public function compra()
    {
        require_once("views/boletos/compra.php");
    }

    public function pago()
    {
        $comprador = $_POST['txtComprador'];
        $fecha_actual = $_POST['txtFecha'];
        $entradaAdultos = $_POST['txtEntradaAdultos'];
        $entradaNinos = $_POST['txtEntradaNinos'];


        if (!empty($comprador) && !empty($fecha_actual) && !empty($entradaAdultos) && !empty($entradaNinos)) {
            $dias = array("domingo", "lunes", "martes", "miércoles", "jueves", "viernes", "sábado");
            $diaPromocion = $dias[date("w")];
            $boleto = new boletos();

            $boleto->setComprador($comprador);
            $boleto->setFecha_actual($fecha_actual);
            $boleto->setEntrada_adultos($entradaAdultos);
            $boleto->setEntrada_ninos($entradaNinos);


            if ($diaPromocion == "miércoles") {
                $cliente = $boleto->getComprador();
                $boletos_adulto = $boleto->getEntrada_adultos();
                $boletos_nino = $boleto->getEntrada_ninos();
                $total = $boleto->pago();
                $descuento = $total * 12 / 100;
                $total = $total - $descuento;
                require_once('views/boletos/compra.php');
            } else {

                $cliente = $boleto->getComprador();
                $boletos_adulto = $boleto->getEntrada_adultos();
                $boletos_nino = $boleto->getEntrada_ninos();
                $total = $boleto->pago();
                require_once('views/boletos/compra.php');
            }
        } else {
            $mensaje_error = true;
            require_once('views/boletos/compra.php');
        }
    }
}
