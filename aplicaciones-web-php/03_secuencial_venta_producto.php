<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/estilo_casa_cambio.css">
    <title>Venta de productos</title>
</head>
<body>

   <header>
       <h3 class="centrado">VENTA DE PRODUCTO</h3>
   </header>

   <section>
       <form action="" method="POST">
           <table class="tableInfo">
                <tr>
                    <td>Cantidad</td>
                    <td><input type="text" name="txtCantidad"></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="reset" value="Limpiar">
                        <input type="submit" value="Procesar">
                    </td>
                </tr>

                <?php
                    error_reporting(0);
                    define("COSTOUNITARIO", 20.55);
                    define("DESCUENTO", 0.10);

                    $cantidad = $_POST['txtCantidad'];

                    $importeCompra=COSTOUNITARIO*$cantidad;
                    $importeDescuento=$importeCompra*DESCUENTO;
                    $importePagar=$importeCompra-$importeDescuento;

                ?>

                <tr>
                    <td>Precio Producto</td>
                    <td><?= "$ ".COSTOUNITARIO?></td>
                </tr>
                <tr>
                    <td>Cantidad</td>
                    <td><?=$cantidad?></td>
                </tr>
                <tr>
                    <td>Importe de compra</td>
                    <td><?= "$ ".number_format($importeCompra, 2) ?></td>
                </tr>
                <tr>
                    <td>Importe descuento</td>
                    <td><?= "$ ".number_format($importeDescuento, 2) ?></td>
                </tr>
                <tr>
                    <td>Importe Neto</td>
                    <td><?= "$ ".number_format($importePagar, 2) ?></td>
                </tr>
           </table>
       </form>
   </section>

   <footer>
       <h5 class="centrado">Ing. Luis Alfredo Carrasco</h5>
   </footer>

    
</body>
</html>