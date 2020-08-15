<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/estilos_funciones.css">
    <title>Document</title>
</head>
<body>
    <?php 
        require('./12_generador_codigo_empleados.php');
    ?>

    <header>
        <h2 class="centrado">Formulario de codigo de empleados</h2>
        <img src="./img/codigo.jpg" alt="empleados">
    </header>

    <section>
        <form action="12_funciones_codigo_empleados.php" method="POST">
            <table>
                <tr>
                    <td>Apellidos</td>
                    <td><input type="text" name="txtApellidos" size="70" placeholder="Ingrese apellidos" 
                    value="<?= $apellidos?>"></td>
                    <td id="error"><?=$mApellidos?></td>
                    <td>CODIGO GENERADO</td>
                </tr>
                <tr>
                    <td>Nombres</td>
                    <td><input type="text" name="txtNombres" size="70" placeholder="Ingrese nombres"
                    value="<?=$nombres?>"></td>
                    <td id="error"><?= $mNombres?></td>
                    <td id="codigo">
                        <?php
                            if(isset($_POST["btnGenerar"])){
                                 $codigo=substr(date('Y'), 2).$cEstado.$cSexo.$edad;   
                            }else{
                                $codigo='';
                            }
                            echo $codigo;
                        
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Fecha de Nacimiento</td>
                    <td><input type="text" name="txtFecnac" size="30" placeholder="dd/mm/YYYY"
                    value="<?=$fecnac?>"></td>
                    <td id="error"><?= $mFecha?></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Estado Civil</td>
                    <td>
                        <select name="selEstado">
                             <option value="soltero" <?= $selS ?> >Soltero</option>   
                             <option value="casado" <?= $selC ?> >Casado</option>   
                             <option value="viudo" <?= $selV ?> >Viudo</option>   
                             <option value="divorciado" <?= $selD ?> >Divorciado</option>   
                        </select>
                        <td></td>
                        
                    </td>
                </tr>
                <tr>
                            <td>Sexo</td>
                                <td><input type="radio" name="rdSexo" value="M" checked>Masculino</td>
                                <td><input type="radio" name="rdSexo" value="F">Femenino</td>
                            <td></td>

                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Autogenerar" name="btnGenerar"></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
        </form>
    </section>


    <footer>
        <h6 class="centrado">Ing. Luis Alfredo Carrascos Sáchez</h6>
    </footer>


    
</body>
</html>