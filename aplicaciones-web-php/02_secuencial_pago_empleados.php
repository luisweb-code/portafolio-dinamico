<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/estilo_casa_cambio.css">
    <title>Pago de empleados</title>
</head>
<body>


    <header>
        <h3 class="centrado">PAGO DE EMPLEADOS</h3>
    </header>

    <section>
        <form action="02_secuencial_pago_empleados.php" method="GET">
            <table class="tableInfo" >
                <tr>
                    <td width="200">Empleados</td>
                    <td><input type="text" name="txtEmpleado" size="70"></td>
                </tr>
                <tr>
                    <td width="200">Trabajadas</td>
                    <td><input type="text" name="txtHoras"></td>
                </tr>
                <tr>
                    <td width="200">Tarifa por hora</td>
                    <td><input type="text" name="txtTarifa"></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Procesar">
                        <input type="reset" value="Limpiar">
                    </td>
                </tr>
                <?php
                   error_reporting(0);
                   $empleado=$_GET['txtEmpleado'];
                   $horas=$_GET['txtHoras'];
                   $tarifa=$_GET['txtTarifa'];

                   $sueldoBruto=$horas*$tarifa;
                   $descuentoEssalud=$sueldoBruto*0.12;
                   $descuentoAFP=$sueldoBruto*0.10;

                   $sueldoNeto = $sueldoBruto-$descuentoEssalud-$descuentoAFP;               
                
                ?>

                <tr>
                    <td>Empleado</td>
                    <td><?=$empleado?></td>
                </tr>
                <tr>
                    <td>Horas Trabajadas</td>
                    <td><?=$horas?></td>
                </tr>
                <tr>
                    <td>Tarifa por hora</td>
                    <td><?="$ ".number_format($tarifa,2) ?></td>
                </tr>
                <tr>
                    <td>Sueldo Bruto</td>
                    <td><?="$ ".number_format($sueldoBruto,2) ?></td>
                </tr>
                <tr>
                    <td>Descuento ESSALUD</td>
                    <td><?="$ ".number_format($descuentoEssalud,2) ?></td>
                </tr>
                <tr>
                    <td>Descuento AFP</td>
                    <td><?="$ ".number_format($descuentoAFP,2) ?></td>
                </tr>
                <tr>
                    <td>Sueldo Neto</td>
                    <td><?="$ ".number_format($sueldoNeto,2) ?></td>
                </tr>
            </table>
        </form>
    </section>

    <footer>
        <h5 class="centrado">Ing. Luis Alfredo Carrasco</h5>
    </footer>


    
</body>
</html>