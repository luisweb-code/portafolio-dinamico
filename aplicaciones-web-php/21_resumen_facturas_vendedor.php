<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/estilos_funciones.css">
    <title>Resumen de Facturacion</title>
</head>

<body>

    <header>
        <h2 class="centrado">Resumen de registros</h2>
        <h5 class="centrado">Facturas registradas por vendedor</h5>
        <img src="./img/factura.jpg" alt="factura">
    </header>

    <section>
        <?php 
            /* error_reporting(0); */
            require('./21_captura_facturas_vendedor.php');
        
        ?>
        <p class="centrado">EMPLEADO: <?= getVendedorOculto() ?></p>
        <form action="21_resumen_facturas_vendedor.php" method="POST">
            <p>
                <?php
                    $s = 0;
                    $monto = getMonto();//recibe un array
                    //var_dump($monto);
                    foreach ($monto as $acum) {
                        $s = $s + $acum;
                    }
                    $comision = $s*0.15;
                
                
                
                ?>
            </p>

            <table >
                <tr>
                    <td width="152">Total Ventas S/.</td>
                    <td width="135">
                        <?= 'S/.'.number_format($s, 2,'.','') ?>
                    </td>
                </tr>
                <tr>
                    <td>15% Comision S/.</td>
                    <td><?= 'S/.'. number_format($comision,2,'.','') ?></td>
                </tr>
            </table>
            <p class="centrado"> <a href="./21_funciones_facturas_vendedor.php">Retornar</a></p>
        </form>
    </section>

</body>

</html>