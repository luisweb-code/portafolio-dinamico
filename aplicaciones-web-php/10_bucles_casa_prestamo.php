<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/estilos_bucles.css">
    <title>Casa Prestamo</title>
</head>

<body>

    <header>
        <h2 class="centrado">CASA PRESTAMO</h2>
        <img src="./img/prestamo.jpg" alt="">
    </header>

    <?php 
    error_reporting(0);

    $cliente = $_POST['txtCliente'];
    $monto = $_POST['txtMonto'];
    $cuotas = $_POST['selCuotas'];

    /* var_dump($cliente, $monto, $cuotas); */

    if ($cuotas == 3) {
        $sel3 = 'SELECTED';
    }else{
        $sel3 = "";
    }
    if ($cuotas == 6) {
        $sel6 = 'SELECTED';
    }else{
        $sel6 = "";
    }
    if ($cuotas == 9) {
        $sel9 = 'SELECTED';
    }else{
        $sel9 = "";
    }
    if ($cuotas == 12) {
        $sel12 = 'SELECTED';
    }else{
        $sel12 = "";
    }

    $mCliente='';
    $mMonto='';
    if (empty($cliente)) {
        $mCliente = 'Debe registrar el nombre del cliente';
    }

    if (empty($monto) || !is_numeric($monto)) {
        $mMonto = 'Debe de registrar correctamente el monto de préstamo';
    }elseif($monto <= 0){
        $mMonto = 'El monto prestamo no debe ser inferior a 0';
    }  
  
  ?>

    <section>
        <form action="10_bucles_casa_prestamo.php" method="POST">
            <table>
                <tr>
                    <td>Cliente</td>
                    <td><input type="text" name="txtCliente" size="80" value="<?= $cliente ?>"></td>
                    <td width="100" id="error"><?=$mCliente?></td>
                    
                </tr>
                <tr>
                    <td>Monto prestamo</td>
                    <td><input type="text" name="txtMonto" value="<?= $monto?>"></td>
                    <td width="100" id="error"><?=$mMonto?></td>
                </tr>
                <tr>
                    <td>N°Cuotas</td>
                    <td>
                        <select name="selCuotas">
                            <option value="3" <?= $sel3?>>3</option>
                            <option value="6" <?= $sel6?>>6</option>
                            <option value="9" <?= $sel9?>>9</option>
                            <option value="12" <?= $sel12?>>12</option>
                        </select>
                    </td>

                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Cotizar" name="btnCotizar"></td>

                </tr>

            </table>
        </form>


        <table border="1">
            <thead>
                <th class="fila">N° DE CUOTA</th>
                <th class="fila">FECHAS DE PAGO</th>
                <th class="fila">MONTO MENSUAL</th>
            </thead>
            <?php 
                switch ($cuotas) {
                    case 3:
                        $montoMensual = ($monto * 1.05)/$cuotas;
                        break;
                    case 6:
                        $montoMensual = ($monto * 1.07)/$cuotas;
                        break;
                    case 9:
                        $montoMensual = ($monto * 1.10)/$cuotas;
                        break;
                    case 12:
                        $montoMensual = ($monto * 1.20)/$cuotas;
                        break;
                }
                $fecha = date('d-m-Y');

                //Mostramos los resultados
                for ($i=1; $i <= $cuotas ; $i++) :
                    
                
            ?>
            <tbody>
                <tr>
                    <td><?= $i. "Cuota"?></td>
                    <td><?= date('d/m/Y', strtotime("$fecha +$i month"))?></td>
                    <td><?= "$". number_format($montoMensual, '2','.','')?></td>
                </tr>
                <?php endfor ?>
            </tbody>
        </table>
    </section>

    <footer>
        <h6 class="centrado">Ing. Luis Alfredo Carrasco Sánchez</h6>
    </footer>

</body>

</html>