<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/estilos_arrays.css">
    <title>Control de Pago - Vendedores</title>
</head>
<body>

    <header>
        <h2 class="centrado">CONTROL DE PAGO - VENDEDORES</h2>
        <img src="./img/bannerVendedor.jpg" alt="vendedor" width="200px" heigth="200px">
    </header>
    
    <?php 
        error_reporting(0);
        require('./20_captura_pago_vendedores.php');
        require('./20_calculos_pagos_vendedores.php');
    ?>

    <form action="20_funciones_pago_vendedores.php" method="POST">
        <table border="1">
            <tr>
                <td>Vendedor</td>
                <td><input type="text" name="txtVendedor" size="70" value="<?=getVendedor()?>"></td>
            </tr>
            <tr>
                <td>Monto vendidio</td>
                <td><input type="text" name="txtMonto" size="30" value="<?=getMonto()?>"></td>
            </tr>
            <tr>
                <td>Monto vendidio</td>
                <td><input type="submit" value="PROCESAR"></td>
            </tr>
            <tr>
                <td>Monto por Comision</td>
                <td>
                    <?php $montoComision = determinaComision(getMonto());
                        echo "S/.".number_format($montoComision, '2', '.', '');
                    ?>
                </td>
            </tr>
            <tr>
                <td>Monto de descuento</td>
                <td>
                    <?php $montoDescuento = determinaDescuento($montoComision);
                        echo "S/.".number_format($montoDescuento, '2', '.', '');
                    ?>
                </td>
            </tr>
            <tr>
                <td>Monto neto</td>
                <td>
                    <?php $montoNeto = calculaMontoNeto($montoComision, $montoDescuento);
                        echo "S/.".number_format($montoNeto, '2', '.', '');
                    ?>
                </td>
            </tr>
        </table>
    </form>




    <footer>
        <h6 class="centrado">Ing. Luis Alfredo Carrasco Sánchez</h6>
    </footer>



    
</body>
</html>