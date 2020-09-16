<?php 
  require_once('./class/Pago.php');

  if(isset($_POST['btnProcesar'])){
      $nombre = $_POST['txtTrabajador'];
      $categoria = $_POST['selCategoria'];
      $horasTrabajadas = $_POST['txtHoras'];

      $objPago = new Pago($nombre, $categoria, $horasTrabajadas);

  }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/miEstilos.css">
    <title>Pago Trabajadores</title>
</head>
<body>

<?php 
    require_once('./includes/header.php');

?>


    <section class="main">
        <form action="index.php" method="POST">
            <table>
                <tr>
                    <th>Trabajador</th>
                    <td colspan="3"><input type="text" name="txtTrabajador" size="68"></td>
                    <td rowspan="8"><img src="./img/team.png" alt="workers" class="workers"></td>
                    
                    
                </tr>

                <tr>
                    <th>categoria</th>
                    <td>
                        <select name="selCategoria">
                            <option value="operario">Operario</option>
                            <option value="administrador">Administrador</option>
                            <option value="jefe">Jefe</option>
                        </select>
                    </td>
                    <th>horas trabajadas</th>
                    <td><input type="text" name="txtHoras"></td>
                </tr>

                <tr>
                    <td><input type="submit" value="Procesar" name="btnProcesar"></td>
                </tr>

                <tr>
                    <th>costo por hora</th>
                    <td><?php if(isset($_POST['btnProcesar'])) echo '$'.number_format($objPago->determinarCostoHora(), 2) ?></td>
                </tr>
                <tr>
                    <th>salario bruto</th>
                    <td><?php if(isset($_POST['btnProcesar'])) echo '$'.number_format($objPago->calculaSubtotal(), 2) ?></td>
                </tr>
                <tr>
                    <th>descuento</th>
                    <td><?php if(isset($_POST['btnProcesar'])) echo '$'.number_format($objPago->calculaDescuento(), 2) ?></td>
                </tr>
                <tr>
                    <th>salario neto</th>
                    <td><?php if(isset($_POST['btnProcesar'])) echo '$'.number_format($objPago->calculaNeto(), 2) ?></td>
                </tr>

            </table>
        </form>

    </section>



   <?php require_once('./includes/footer.php'); ?>
    
</body>
</html>