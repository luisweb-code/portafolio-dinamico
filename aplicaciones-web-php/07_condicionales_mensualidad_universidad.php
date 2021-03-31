<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/estilos_condicionales.css">
    <title>Mensualidad de Universidad</title>
</head>

<body>

    <header>
        <h2 class="centrado">Mensualidad de Universidad</h2>
        <img src="./img/alumnos.jpg" alt="alumnos">
    </header>


    <?php
        error_reporting(0);

        $alumno = $_POST['txtAlumno'];
        $categoria = $_POST['selCategoria'];
        $promedio = $_POST['txtPromedio'];

        /* var_dump($alumno, $categoria, $promedio); */
    
        if ($categoria == 'A') {
            $selA = 'SELECTED';
        }else{
            $selA = "";
        }
        if ($categoria == 'B') {
            $selB = 'SELECTED';
        }else{
            $selB = "";
        }
        if ($categoria == 'C') {
            $selC = 'SELECTED';
        }else{
            $selC = "";
        }
        if ($categoria == 'D') {
            $selD = 'SELECTED';
        }else{
            $selD = "";
        }

        $mAlumno='';
        $mCategoria='';
        $mPromedio='';

        if(empty($alumno)){
            $mAlumno = 'Debe registrar nombre del alumno';
        }
        if($categoria == 'seleccione'){
            $mCategoria = 'Debe seleccionar una categoria';
        }
        if (empty($promedio) || !is_numeric($promedio)) {
            $mPromedio = 'Debe registrar correctamente el promedio';
        }elseif ($promedio < 0 || $promedio > 20) {
            $mPromedio = 'El promedio debe estar entre 0 y 20';
        }
    
    ?>

    <section>
        <form action="07_condicionales_mensualidad_universidad.php" method="POST">
            <table>
                <tr>
                    <td width="200">Nombre completo del alumno</td>
                    <td width="400"><input type="text" name="txtAlumno" size="50" value="<?= $alumno?>"></td>
                    <td width="200" id="error"><?= $mAlumno?></td>
                </tr>
                <tr>
                    <td>Seleccione categoría</td>
                    <td>
                        <select name="selCategoria">
                            <option value="seleccione" SELECTED>Seleccione categoria</option>
                            <option value="A" <?= $selA?>>A</option>
                            <option value="A" <?= $selB?>>B</option>
                            <option value="A" <?= $selC?>>C</option>
                            <option value="A" <?= $selD?>>D</option>
                        </select>
                    </td>

                    <td id="error"><?= $mCategoria?></td>

                </tr>
                <tr>
                    <td>Ingrese promedio</td>
                    <td><input type="text" name="txtPromedio" value="<?= $promedio ?>"></td>
                    <td id="error"> <?= $mPromedio ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Procesar" name="btnProcesar">
                    </td>
                </tr>
                <?php
                        if($categoria == 'A'){
                            $monto=850;
                        }elseif($categoria == 'B'){
                                $monto = 750;
                        }elseif($categoria == 'C'){
                                $monto = 650;
                        }elseif($categoria == 'D'){
                                $monto = 500;
                        }else{
                            $monto = 0;
                        }

                        if ($promedio <= 12) {
                            $descuento = 0;
                        }elseif ($promedio <= 15) {
                            $descuento = (10.0/100.0) * $monto;
                            $montoCancelar = $monto - $descuento;
                        }elseif ($promedio <= 17) {
                            $descuento = (15.0/100.0) * $monto;
                            $montoCancelar = $monto - $descuento;
                        }elseif ($promedio <= 19) {
                            $descuento = (25.0/100.0) * $monto;
                            $montoCancelar = $monto - $descuento;
                        }elseif ($promedio == 20) {
                            $descuento = (50.0/100.0) * $monto;
                            $montoCancelar = $monto - $descuento;
                        }                   
                    ?>

                <tr>
                    <td>Monto mensual</td>
                    <td><?= "$". number_format($monto, 2 , '.', '')?></td>
                </tr>
                <td>Monto descuento</td>
                <td><?= "$". number_format($descuento, 2 , '.', '')?></td>
                </tr>
                <td>Monto a cancelar</td>
                <td><?= "$". number_format($montoCancelar, 2 , '.', '')?></td>
                </tr>
            </table>
        </form>
    </section>

    <footer>
        <h6 class="centrado">Ing.Luis Alfredo Carrasco Sánchez</h6>
    </footer>





</body>

</html>