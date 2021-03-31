<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/estilos_funciones.css">
    <title>Fuente de Soda</title>
</head>
<body>
<?php 
    require('./11_header_fuente_soda.php');
    error_reporting(0);
    require('./11_calculos_fuente_soda.php');
?>


<table>
    <form action="11_funciones_fuente_soda.php" method="post">
        <tr>
            <td>Cliente</td>
            <td><input type="text" name="txtCliente" value="<?= $cliente ?>" size="100"></td>
        </tr>
        <tr>
            <td>Listas de Productos</td>
            <td>Cantidad</td>
            <td>Precio $</td>
            <td>Subtotal $</td>
        </tr>
        <tr>
            <td>Ensalada de frutas</td>
            <td><input type="text" name="txtEnsalada" value="<?= $cantidadEns?>"></td>
            <td><?= "$". number_format($ensalda,2)?></td>
            <td><?= "$". number_format($subtotalEns,2)?></td>
        </tr>
        <tr>
            <td>Jugo de frutas</td>
            <td><input type="text" name="txtJugo" value="<?= $cantidadJug?>"></td>
            <td><?= "$". number_format($jugo,2)?></td>
            <td><?= "$". number_format($subtotalJug,2)?></td>
        </tr>
        <tr>
            <td>Helado</td>
            <td><input type="text" name="txtHelado" value="<?= $cantidadHel?>"></td>
            <td><?= "$". number_format($helado,2)?></td>
            <td><?= "$". number_format($subtotalHel,2)?></td>
        </tr>
        <tr>
            <td>Sandwich</td>
            <td><input type="text" name="txtSandwich" value="<?= $cantidadSan?>"></td>
            <td><?= "$". number_format($sandwich,2)?></td>
            <td><?= "$". number_format($subtotalSan,2)?></td>
        </tr>
        <tr>
            <td></td>
            <td colspan="3"><input type="submit" value="Finalizar" name="btnFinalizar"></td>
        </tr>
        <?php 
            if($_POST['btnFinalizar']):
        ?>
        <tr>
            <td></td>
            <td></td>
            <td>TOTAL A PAGAR</td>
            <td id="codigo">$ <?= number_format($total, 2)?></td>

        </tr>
        <?php endif ?>

    </form>
</table>








<?php require('./11_footer_fuente_soda.php');?>    
 
</body>
</html>