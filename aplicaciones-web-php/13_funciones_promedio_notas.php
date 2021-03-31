<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/estilos_funciones.css">
    <title>Promedio Notas</title>
</head>
<body>
<?php  require('./13_determinador_promedio_notas.php');?>

    <header>
        <h2 class="centrado">Promedio notas</h2>
        <img src="./img/classroom.jpg" alt="classroom">
    </header>


    <section>
        <form action="13_funciones_promedio_notas.php" method="POST">
            <table >
                <tr>
                        <td>ALUMNO</td>
                        <td><input type="text" name="txtNombre" size="60" value="<?=$alumno?>"></td>
                        <td id="error"><?= $mAlumno ?></td>
                </tr>
                
                
                <tr>
                    <td>NOTAS</td>
                        <td></td>
                </tr>

                <tr>
                    <td colspan="2">
                        <table   cellspacing="2" cellpadding="2">
                            <tr>
                                <td width="179">Nota 1</td>
                                <td witdh="179"><input type="text" name="txtNota1" size="5" value="<?= $nota1?>"></td>

                                <td width="179" id="error"><?= $mNota1?></td>

                                <td width="179">Nota 2</td>
                                <td><input type="text" name="txtNota2" size="5" value="<?= $nota2 ?>"></td>

                                <td width="179" id="error"><?= $mNota2?></td>
                            </tr>
                            <tr>
                            <td width="179">Nota 3</td>
                                <td witdh="179"><input type="text" name="txtNota3" size="5" value="<?= $nota3?>"></td>

                                <td width="179" id="error"><?= $mNota3?></td>

                                <td width="179">Nota 4</td>
                                <td><input type="text" name="txtNota4" size="5" value="<?= $nota4 ?>"></td>

                                <td width="179" id="error"><?= $mNota4 ?></td>
                            
                            </tr>
                        </table>                    
                    </td>
                </tr>

                <tr>
                    <td></td>
                    <td><input type="submit" value="Promediar"></td>
                </tr>

                <tr>
                    <td>Alumno</td>
                    <td><?= $alumno ?></td>
                </tr>
                <tr>
                    <td>Promedio</td>
                    <td><?= $promedio ?></td>
                </tr>
                <tr>
                    <td>Nota más Alta</td>
                    <td><?= $mayor ?></td>
                </tr>
                <tr>
                    <td>Nota más Baja</td>
                    <td><?= $menor ?></td>
                </tr>
                <tr>
                    <td>Condición</td>
                    <td><?= $condicion ?></td>
                </tr>


            </table>
        </form>
    </section>





    <footer>
        <h6 class="centrado">Ing.Luis Alfredo Carrasco Sánchez</h6>
    </footer>

    
</body>
</html>