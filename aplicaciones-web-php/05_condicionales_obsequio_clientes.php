<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/estilos_condicionales.css">
    <title>Obsequio Clientes</title>
</head>

<body>


    <header>
        <h2 class="centrado">Obsequio a Clientes</h2>
        <img src="./img/tienda.jpg" alt="">
    </header>

    <?php
    error_reporting(0);
    $nombre = $_POST['txtCliente'];
    $monto =  $_POST['txtMonto'];
    $ticket = $_POST['txtNumero'];

    /* var_dump($monto, $ticket, $nombre); */

    if($ticket >= 1 && $ticket <= 4){
        $obsequio = 'Canasta con productos diversos';
        $descuento = (16.0/100.0)*$monto;
        $nuevoMonto = $monto - $descuento;

        
    }

    if($ticket >= 5 && $ticket <= 9){
        $obsequio = 'Saco de azucar de 50kg';
        $descuento = (13.0/100.0)*$monto;
        $nuevoMonto = $monto - $descuento;
    }

    if($ticket >= 10 && $ticket <= 14){
        $obsequio = 'Aceite 5 litros';
        $descuento = (6.0/100.0)*$monto;
        $nuevoMonto = $monto - $descuento;
    }

    if($ticket >= 15 && $ticket <= 19){
        $obsequio = 'Caja de leche de 24 latas grande';
        $descuento = (12.0/100.0)*$monto;
        $nuevoMonto = $monto - $descuento;
    }

    if($ticket == 20){
        $obsequio = 'Saco de arroz de 50kg';
        $descuento = (10.0/100.0)*$monto;
        $nuevoMonto = $monto - $descuento;
    }

    if($ticket < 1 || $ticket > 20){
    echo '<script>alert("Tiket No Valido..");</script>';
    } 
    
  
  ?>

    <section>
        <form action="05_condicionales_obsequio_clientes.php" method="POST">
            <table>
                <tr>
                    <td>Nombre del cliente</td>
                    <td><input type="text" name="txtCliente" size="60" value="<?=$nombre?>"
                            placeholder="Ingrese el nombre del cliente"></td>

                </tr>
                <tr>
                    <td>Monto total</td>
                    <td><input type="text" name="txtMonto" value="<?=$monto?>" placeholder="Ingrese el monto total">
                    </td>
                </tr>
                <tr>
                    <td>numero de ticket</td>
                    <td><input type="text" name="txtNumero" value="<?=$ticket?>"
                            placeholder="Ingrese numero de ticket obtenido"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Procesar"></td>
                </tr>
                
                <tr>
                    <td>Monto a cancelar</td>
                    <td><?= "$".$nuevoMonto?></td>
                </tr>
                <tr>
                    <td>Obsequio</td>
                    <td>
                        <?= $obsequio ?>
                    </td>
                </tr>

            </table>
        </form>
    </section>

    <footer>
        <h6 class="centrado">Ing. luis Alfredo Carrasco</h6>
    </footer>



</body>

</html>