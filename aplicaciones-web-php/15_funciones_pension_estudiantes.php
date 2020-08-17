<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/estilos_funciones.css">
    <title>Pensión de estudiantes</title>
</head>

<body>

    <header>
        <h2 class="centrado">pensión de estudiantes</h2>
        <h5 class="centrado">Simulador de cuotas</h5>
        <img src="./img/universidad.jpg" alt="universidad">
    </header>

    <?php 
        error_reporting(0);
    ?>

    <section>
        <form action="15_funciones_pension_estudiantes.php" method="POST">
            <table>
                <tr>
                    <td>Alumno</td>
                    <td><input type="text" name="txtAlumno" value="<?= getAlumno(); ?>" size="70"></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Promedio ponderado</td>
                    <td><input type="text" name="txtPromedio" value="<?= getPromedio()?>"></td>
                    <td><input type="submit" value="PROCESAR" name="btnProcesar"></td>
                </tr>
            </table>

            <?php 
            
               $categoria = function($promedio){
                   if($promedio){
                        return "A";
                   }elseif ($promedio >= 14) {
                       return "B";
                   }elseif ($promedio >= 12) {
                       return "C";
                   }else{
                       return "D";
                   }
               }      
            ?>

            <?php if(isset($_POST["btnProcesar"])):?>
            <!-- tabla para resumen de la categoria -->
            <table border="1">
                <tr>
                    <td width="200">Alumno</td>
                    <td width="200"><?= getAlumno()?></td>
                    <td width="200"></td>
                </tr>
                <tr>
                    <td>Promedio</td>
                    <td><?= getPromedio()?></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Categoria</td>
                    <td><?= $categoria(getPromedio())?></td>
                    <td></td>
                </tr>
            </table>
            <?php
                
                    $pension = function($categoria){
                            if ($categoria == 'A') {
                                return 500;
                            }elseif ($categoria == 'B') {
                                return 650;
                            }elseif ($categoria == 'C') {
                                return 750;
                            }elseif ($categoria == 'D') {
                                return 800;
                            }else{
                                return '';
                            }
                    };
    
                    $fecha = function(){return date('d/m/Y');};
    
                    $cuotas = function(){return 5;};
                
                
                
                ?>

            <!-- tabla de resumen de pension -->
            <table border="1">
                <tr>
                    <td width="200">RESUMEN DE CUOTAS</td>
                    <td width="200"></td>
                    <td width="200"></td>
                </tr>
                <tr>
                    <td>Monto Pensión</td>
                    <td><?= '$'. number_format($pension($categoria(getPromedio())),'2','.','');?></td>
                    <td></td>

                </tr>
                <tr>
                    <td>Fecha Actual</td>
                    <td><?=$fecha();?></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Número de cuotas</td>
                    <td><?= $cuotas(); ?></td>
                    <td></td>
                </tr>
            </table>
            <!-- tabla para las posibles fechas y cuotas -->
            <table border="1">
                <tr>
                    <td colspan="2">RESUMEN DE FECHAS</td>
                </tr>
                <tr>
                    <td>Fechas</td>
                    <td>Monto por cuotas</td>

                </tr>

                <?php 
                          for ($i=1; $i <= $cuotas() ; $i++) :
                             $montoTotal += $pension($categoria(getPromedio()));
                          
                        ?>

                <tr>
                    <td>
                        <?php 
                              $f=$fecha();
                              echo date('d/m/Y', strtotime("$f +$i month"));
                            ?>

                    </td>

                    <td>
                        <?php
                                echo "$". number_format($pension($categoria(getPromedio())), '2','.','');
                            ?>

                    </td>

                </tr>
                <?php endfor; ?>

                <tr>
                    <td>Total por semestre</td>
                    <td><?= '$'.number_format($montoTotal, '2','.',''); ?></td>
                </tr>

            </table>

            <?php endif ?>

        </form>
    </section>

    <footer>
        <h6 class="centrado">Ing. Luis Alfredo Carrasco Sánchez</h6>
    </footer>


    <?php 
      function getAlumno(){ return $_POST['txtAlumno']; }
      function getPromedio(){ return $_POST['txtPromedio']; }
    ?>




</body>

</html>