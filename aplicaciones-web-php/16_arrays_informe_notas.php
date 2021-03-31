<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/estilos_arrays.css">
    <title>Informe notas</title>
</head>

<body>

    <?php 
        error_reporting(0);
        //Definicion de los arreglos
        $alumnos = getAlumnos();
        $promedios = getPromedios();

    ?>

    <header>
        <h2 class="centrado">Informe de notas - Indexado</h2>
        <img src="./img/notas.jpg" alt="notasAlumnos">
    </header>

    <section>

        <table border="1">

            <thead>
                <th width="30">N° Orden</th>
                <th>Alumno</th>
                <th>Promedio</th>
            </thead>

            <tbody>

                <?php 
                    //Imprimir
                    for ($i=0; $i < getTotal() ; $i++) : 
                        # code...
                    
                
                
                ?>
                <tr>
                    <td class="centrado"><?= $i + 1?></td>
                    <td class="centrado"><?= $alumnos[$i]?></td>
                    <td class="centrado"><?= $promedios[$i]?></td>

                </tr>


                <?php endfor; ?>

                <tr>
                    <td><button id="btn-envio">Mostrar Resumen</button></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>


        </table>

        <?php 
           //Total de aprobados y desaprobados
             list($tAprobados, $tDesaprobados)=totalAprobados_Desaprobados();               
        ?>

        <div id="myOcultar">
            <table border="1">
                <thead>
                    <tr>
                        <th>Total de alumnos</th>
                        <th>Total de aprobados</th>
                        <th>Total de desaprobados</th>
                    </tr>

                </thead>
                <tbody>
                    <tr>
                        <td class="centrado"><?= getTotal(); ?></td>
                        <td class="centrado"><?= $tAprobados?></td>
                        <td class="centrado"><?= $tDesaprobados?></td>
                    </tr>
                </tbody>
            </table>

            <?php 
              //Obtener el mayor y menor elemento
              list($maximo, $minimo)=valor_maximo_minimo();
              //Obtener el índice del mayor y menor elemento
              list($maIndice, $miIndice)= indice_maximo_minimo();
            ?>

            <table border="1">
                <thead>
                    <tr>
                        <th>Alumno con mayor promedio</th>
                        <th>Alumno con menor promedio</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="centrado"><?= getAlumnos()[$maIndice].'('.$maximo.')'?></td>
                        <td class="centrado"><?= getAlumnos()[$miIndice].'('.$minimo.')'?></td>

                    </tr>
                </tbody>

            </table>
        </div>


    </section>



    <footer>
        <h6 class="centrado">Ing. Luis Alfredo Carrasco Sánchez</h6>
    </footer>

    <script src="./js/funcionesArray.js"></script>
</body>

</html>

<?php

    //Funcion de implementación para el arreglo indexado de alumnos
    function getAlumnos () {
        return array('Luz Lázaro', 'Angela Torres','Fernanda Lázaro', 'Manuel Torres',
                        'Lucero Mendoza', 'Alejandra Menor',
                        'Victoria Bautista', 'Francisco Malaver'                  
                        );
    }


    //Funcion de implementación para el arreglo de notas
    function getPromedios (){
        return array(17,18,20,19,14,16,12,11);
    }

    //Funcion que determina el total de alumnos
    function getTotal (){
            return count(getAlumnos());
    }

    //Funcion que determina el total de aprobados y desaprobados
    function totalAprobados_Desaprobados(){
        $tAprobados = 0;
        $tDesaprobados = 0;

        for ($i=0; $i < getTotal(); $i++) { 
            if(getPromedios()[$i] < 13)
            $tDesaprobados++;
            else
            $tAprobados++;
        }
        return array($tAprobados, $tDesaprobados);
    }

    //Determinar el maximo y menor promedio
    function valor_maximo_minimo(){
        $maximo = max(getPromedios());
        $mimnimo = min(getPromedios());

        return array($maximo , $mimnimo);
    }

    //Determina el indice del mayor y menor promedio
    function indice_maximo_minimo(){
        list($maximo, $minimo) = valor_maximo_minimo();
        $maIndice = array_search($maximo, getPromedios());
        $miIndice = array_search($minimo, getPromedios());
        return array($maIndice, $miIndice);
    }


?>