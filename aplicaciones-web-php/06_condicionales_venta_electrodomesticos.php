<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/estilos_condicionales.css">
    <title>Ventas Electrodomesticos</title>
</head>
<body>



  <header>
    <h2 class="centrado">VENTA DE PRODUCTOS ELECTRICOS</h2>
    <img src="./img/comercial.jpg" alt="comercial">
  </header>

  <?php
    error_reporting(0);

    //Definimos las variables
    $cliente=$_POST['txtCliente'];
    $producto=$_POST['selProducto'];
    $cantidad=$_POST['txtCantidad'];

    /* var_dump($cliente, $producto, $cantidad); */

    //Area de decición
    if ($producto == 'cocina') {
        $selC='SELECTED';
    }else {
        $selC="";
    }
    
    if ($producto == 'refrigeradora') {
        $selR='SELECTED';
    }else {
        $selR="";
    }
    
    if ($producto == 'television') {
        $selT='SELECTED';
    }else {
        $selT="";
    }
    
    if ($producto == 'lavadora') {
        $selL='SELECTED';
    }else {
        $selL="";
    }
    
    if ($producto == 'radiograbadora') {
        $selRa='SELECTED';
    }else {
        $selRa="";
    }
  
  
  
  ?>

    <section>
        <form action="06_condicionales_venta_electrodomesticos.php" method="POST">
            <table>
                <tr>
                    <td>Cliente</td>
                    <td><input type="text" name="txtCliente" size="60" value="<?=$cliente?>" placeholder="Ingrese el nombre"></td>
                </tr>
                <tr>
                    <td>Producto</td>
                    <td>
                        <select name="selProducto">
                            <option value="cocina"><?=$selC?>Cocina 6 Hormillas</option>
                            <option value="refrigeradora" <?=selR?> > Refrigeradora </option>
                            <option value="television" <?=$selT?> > Television 42 </option>
                            <option value="television" <?=$selT?> > Television 42 </option>
                            <option value="lavadora" <?=$selL?> > Lavadora 10k </option>
                            <option value="radiograbadora" <?=$selRa?> > Radiograbadora USB </option>

                        </select>
                    </td>           
                </tr>
                <tr>
                    <td>Cantidad</td>
                    <td><input type="text" name="txtCantidad" value="<?= $cantidad ?>"></td>
                
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Procesar" name="btnProcesar">
                    </td>
                </tr>
                <?php

                    if($producto == 'cocina') $precio = 1200;
                    if($producto == 'refrigeradora') $precio = 2500;
                    if($producto == 'television') $precio = 3200;
                    if($producto == 'lavadora') $precio = 1000;
                    if($producto == 'radiograbadora') $precio = 700;

                    $subtotal = $precio * $cantidad;

                    if($subtotal > 10000)
                        $descuento = (10/100.0) * $subtotal;
                        else
                        $descuento = (5/100.0) * $subtotal;
                    
                    $monto = $subtotal - $descuento;             
                
                
                ?>

                    <tr>
                        <td>Precio del producto</td>
                        <td>
                            <?= "$". number_format($precio, 2, '.','')?>
                        </td>                                       
                    </tr>
                    <tr>
                        <td>Subtotal a pagar</td>
                        <td>
                            <?= "$". number_format($subtotal, 2, '.','')?>
                        </td>                                       
                    </tr>
                    <tr>
                        <td>Monto de descuento</td>
                        <td>
                            <?= "$". number_format($descuento, 2, '.','')?>
                        </td>                                       
                    </tr>
                    <tr>
                        <td>Monto a pagar</td>
                        <td>
                            <?= "$". number_format($monto, 2, '.','')?>
                        </td>                                       
                    </tr>
            </table>
        </form>
    </section>

    <footer>
        <h6 class="centrado">Ing. Luis Alfredo Carrasco Sánchez</h6>
    </footer>




    
</body>
</html>