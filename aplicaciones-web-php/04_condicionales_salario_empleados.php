<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pago de Empleados</title>
    <link rel="stylesheet" href="./css/estilos_condicionales.css">
</head>
<body>

  <header>
      <h2 class="centrado">PAGO DE SALARIO DE EMPLEADOS</h2>
      <img src="./img/empleados.jpg" alt="empleados">
  </header>

  <section>
      <?php 
         error_reporting(0);
            //Definimos las variables
            $empleado = $_POST['txtEmpleado'];
            $categoria = $_POST['selCategoria'];
            $horas = $_POST['txtHoras'];

            //Area de condición
            if($categoria == 'jefe'){
                $selJ='SELECTED';
            }else {
                $selJ="";
            }

            if($categoria == 'administrativo'){
                $selA = 'SELECTED';
            }else{
                $selA = "";
            }

            if($categoria == 'operario'){
                $selO = 'SELECTED';
            }else{
                $selO = "";
            }

            if($categoria == 'practicante'){
                $selP = 'SELECTED';
            }else{
                $selP = "";
            }  
      
      ?>

            <form action="" method="post">
                <table>
                    <tr>
                        <td width="150">Empleado</td>
                        <td><input type="text" name="txtEmpleado" size="70" value="<?= $empleado?>"></td>
                    </tr>
                    <tr>
                        <td width="150">Horas</td>
                        <td><input type="text" name="txtHoras" value="<?= $horas?>"></td>
                    </tr>
                    <tr>
                        <td>Categoria</td>
                        <td>
                            <select name="selCategoria">
                                <option value="jefe" <?=$selJ?>>Jefe</option>
                                <option value="administrativo" <?=$selA?>>Administrativo</option>
                                <option value="operario" <?=$selO?>>Operario</option>
                                <option value="practicante" <?=$selP?>>Practicante</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" value="Calcular" name="btnCalcular">
                            <input type="reset" value="Limpiar Controles" name="btnLimpiar">
                        </td>
                    </tr>
                    <?php
                       if ($categoria == 'jefe') {
                           $pagoHora=50;
                       }
                       if ($categoria == 'administrativo') {
                           $pagoHora=30;
                       }
                       if ($categoria == 'operario') {
                           $pagoHora=15;
                       }
                       if ($categoria == 'practicante') {
                           $pagoHora=5;
                       }

                       $sBruto=$pagoHora*$horas;
                       $descuento=$sBruto*15.0/100.0;
                       $sNeto=$sBruto-$descuento;
                    
                    
                    ?>

                    <tr>
                        <td>Salario Bruto</td>
                        <td>
                            <?= "$ ".number_format($sBruto, 2,'.','')?>
                        </td>
                    </tr>
                    <tr>
                        <td>Descuento</td>
                        <td>
                            <?= "$ ".number_format($descuento, 2,'.','')?>
                        </td>
                    </tr>
                    <tr>
                        <td>Salario Neto</td>
                        <td>
                            <?= "$ ".number_format($sNeto, 2,'.','')?>
                        </td>
                    </tr>
                </table>
            </form>
  </section>

  <footer>
      <h5 class="centrado">Ing. Luis Alfredo Carrasco</h5>
  </footer>


    
</body>
</html>