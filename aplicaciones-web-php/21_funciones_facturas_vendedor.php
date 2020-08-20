<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/estilos_funciones.css">
    <title>Control Facturas</title>
</head>

<body>

    <header>
        <h2 class="centrado">Control de facturas vendedor</h2>
        <h5 class="centrado">Proceso vendedor</h5>
        <img src="./img/factura.jpg" alt="factura">
    </header>

    <section>
        <?php
            error_reporting(0);
            require('./21_captura_facturas_vendedor.php');

        ?>

        <form action="21_funciones_facturas_vendedor.php" method="POST">
            <table >
                <tr>
                    <td width="264">Nombre del empleado</td>
                    <td width="164"><input type="text" name="txtVendedor" value="<?= getVendedor()?>"></td>
                </tr>
                <tr>
                    <td>Numero de Facturas a registrar</td>
                    <td aling="left"><input type="text" name="txtN" size="6" value="<?= getNumero()?>"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" value="Procesar" name="btnProcesar">
                        <input type="reset" value="Refrescar" name="btnRefrescar">
                    </td>
                </tr>

            </table>
            <br />
        </form>



        <form action="./21_resumen_facturas_vendedor.php" method="POST">
            <table >
                <tr>
                    <td width="42">N°</td>
                    <td width="112">Fecha de Registro</td>
                    <td width="132">Monto x Factura</td>
                </tr>
                <?php
                  //Mostrar las cajas de texto dinamicas
                  for ($i=1; $i <=  getNumero(); $i++) : 
                     
                  
                ?>

                <tr>
                    <td><?= $i ?></td>
                    <td>
                        <input type="text" name="txtFecha" value="<?= date("d/m/Y")?>">
                    </td>
                    <td><input type="text" name="txtMonto[]"></td>
                </tr>
                <?php endfor; ?>

            </table>

            <input type="hidden" name="txtNumeroOculto" value="<?= getNumero()?>">
            <input type="hidden" name="txtVendedorOculto" value="<?getVendedor()?>">
            <p class="centrado">
                <input type="submit" value="Resumen de venta" name="submit">
            </p>
        </form>

    </section>




    <footer>
        <h6 class="centrado">Ing. Luis Alfredo Carrasco Sánchez</h6>
    </footer>

</body>

</html>