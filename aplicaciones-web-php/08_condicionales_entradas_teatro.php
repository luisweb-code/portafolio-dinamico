<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/estilos_condicionales.css">
    <title>Venta entradas Teatro</title>
</head>

<body>


    <header>
        <h2 class="centrado">VENTA DE ENTRDAS (TEATRO)</h2>
        <img src="./img/teatro.jpg" alt="teatro">
    </header>

    <?php
        //Defenimos las variables
        error_reporting(0);
        $comprador = $_POST['txtComprador'];
        $fecha = $_POST['txtFecha'];
        $nAdultos = $_POST['txtAdultos'];
        $nNinos = $_POST['txtNinos'];
       /*  var_dump($comprador, $fecha, $nAdultos, $nNinos); */

        //obtener el dia
        $hoy = getdate(time());
        $nDia = $hoy['weekday'];

        //Condicional multiple
        switch ($nDia) {
            case 'Monday':
                $cAdultos = 10;
                $cNinos = 5;
                break;
            case 'Tuesday':
                $cAdultos = 8;
                $cNinos = 4;
                break;
            case 'Wednesday':
            case 'Thursday':
            case 'Friday':
                $cAdultos = 16;
                $cNinos = 8;
            case 'Saturday':
            case 'Sunday':
                $cAdultos = 50;
                $cNinos = 45;
                break;
            default:
            $cAdultos = 0;
            $cNinos = 0;
                break;
        }

        $adultos= $cAdultos * $nAdultos;
        $ninos = $cNinos * $nNinos;   
    
    ?>

    <section>
        <form action="08_condicionales_entradas_teatro.php" method="post">
            <table>
                <tr>
                    <td>Comprador</td>
                    <td><input type="text" name="txtComprador" size="60"></td>
                </tr>
                <tr>
                    <td>Fecha actual</td>
                    <td><input type="text" name="txtFecha" readonly="true" value="<?= date('d/m/Y')?>"></td>
                </tr>
                <tr>
                    <td>N° entradas adultos</td>
                    <td><input type="text" name="txtAdultos"></td>
                </tr>
                <tr>
                    <td>N° entradas niños</td>
                    <td><input type="text" name="txtNinos"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Adquirir" name="btnAdquirir"></td>
                </tr>
            </table>
            <?php if(isset($_POST['txtComprador'])) : ?>
            <table>
                <tr>
                    <td width="150">Comprador</td>
                    <td width="350"><?= $comprador ?></td>
                </tr>
                <tr>
                    <td>Costo por adultos</td>
                    <td><?= "$". number_format($adultos, 2, '.', '')?></td>
                </tr>
                <tr>
                    <td>Costo por niños</td>
                    <td><?= "$". number_format($ninos, 2, '.', '')?></td>
                </tr>
                <tr>
                    <td>Dia de promoción</td>
                    <td><?= $nDia ?></td>
                </tr>
                <tr>
                    <td>Monto total a pagar</td>
                    <td><?= "$". number_format($ninos, 2, '.', '')?></td>
                </tr>
            </table>
            <?php endif ?>
        </form>
    </section>


    <footer>
        <h6 class="centrado">Ing. Luis Alfredo Carrasco Sánchez</h6>
    </footer>

</body>

</html>