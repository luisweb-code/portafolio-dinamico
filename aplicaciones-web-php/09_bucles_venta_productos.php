<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/estilos_bucles.css">
    <title>Venta de productos</title>
</head>

<body>

    <header>
        <img src="./img/cocina.jpg" alt="cocina">
        <h2 class="centrado">VENTA DE PRODUCTOS</h2>
    </header>

    <?php 
        error_reporting(0);

        $producto = $_POST['selProducto'];

        $precio = 0;

        switch ($producto) {
            case 'lavadora':
                $precio = 1500;
                break;
            case 'refrigeradora':
                $precio = 3500;
                break;
            case 'radiograbadora':
                $precio = 500;
                break;
            case 'tostadora':
                $precio = 150;
                break;
            
        }

        if ($producto == 'lavadora') {
            $selL = 'SELECTED';
        }else{
            $selL="";
        }
        if ($producto == 'refrigeradora') {
            $selRe = 'SELECTED';
        }else{
            $selRe="";
        }
        if ($producto == 'radiograbadora') {
            $selRa = 'SELECTED';
        }else{
            $selRa="";
        }
        if ($producto == 'tostadora') {
            $selT = 'SELECTED';
        }else{
            $selT="";
        } 
        
        $cantidad = $_POST['txtCantidad'];
        $subtotal = $cantidad * $precio;
    
    ?>



    <form action="09_bucles_venta_productos.php" method="post">
        <table>
            <tr>
                <td>Producto</td>
                <td><select name="selProducto" onchange="this.form.submit()">
                        <option value="lavadora" <?=$selL ?>>Lavadora</option>
                        <option value="refrigeradora" <?=$selRe ?>>Refrigeradora</option>
                        <option value="radiograbadora" <?=$selRa ?>>Radiograbadora</option>
                        <option value="tostadora" <?=$selT ?>>Tostadora</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Precio</td>
                <td>
                    <input type="text" name="txtPrecio" readonly="readonly" value="
                        <?php  
                            if($_POST[selProducto])
                            echo number_format($precio,'2','.','');
                        ?>
                    
                    ">

                </td>
            </tr>
            <tr>
                <td>Cantidad</td>
                <td>
                    <input type="text" name="txtCantidad" value="
                        <?= $cantidad ?>
                    ">
                </td>
                <td>
                    <input type="submit" value="Calcular" name="btnCalcular">
                </td>
            </tr>
            <tr>
                <td>Subtotal</td>
                <td>
                    <input type="text" name="txtSubtotal" value="
                        <?php
                            echo "$".number_format($subtotal, '2','.','');
                        ?>
                    
                    ">
                </td>

            </tr>
            <tr>
                <td>Cuotas</td>
                <td>
                    <select name="selCuotas">
                        <option value="3">3</option>
                        <option value="6">6</option>
                        <option value="9">9</option>
                        <option value="12">12</option>
                    </select>
                </td>


            </tr>
        </table>

        
           
    </form>


    <table>
        <thead>
            <th class="fila">N°Letras</th>
            <th class="fila">Monto</th>
        </thead>
        <tbody>
            <?php
                $cuotas = $_POST['selCuotas'];
                $i=1;
                $montoMensual = $subtotal/$cuotas;

                while ($i <= $cuotas) :       
            
            ?>
            <tr>
                <td><?=$i?></td>
                <td><?= "$".number_format($montoMensual, '2', '.', '')?></td>
            </tr>
                <?php 
                    $i++;
                    endwhile; 
                ?>
            
        </tbody>
    </table>



</body>

</html>