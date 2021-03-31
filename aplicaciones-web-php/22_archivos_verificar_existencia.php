<?php 
   /*  error_reporting(0); */
    require('./22_proceso_verificar_existencia.php');
    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/estilos_archivos.css">
    <title>Verificar archivo</title>
</head>
<body>

    <header>
        <h2 class="centrado"> verificar la existencia de un archivo</h2>
        <img src="./img/bannerArchivo.jpg" alt="archivo">
    </header>


    <section>
        <form action="22_archivos_verificar_existencia.php" method="POST">
            <table border="1">
                <tr>
                    <td>Nombre del archivo</td>
                    <td><input type="text" name="txtArchivo" value=""></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Verificar"></td>
                </tr>
            </table>
        </form>
            

        <table border="1">
            <tr>
                <td>Nombre Completo del archivo</td>
                <td><?= getArchivo(); ?></td>
            </tr>
            <tr>
                <td>¿Existe el archivo?</td>
                <td><?= existeArchivo(getArchivo()); ?></td>
            </tr>
            <tr>
                <td>Fecha de la última modificación</td>
                <td><?= ultimaModificacion(getArchivo()); ?></td>
            </tr>
            <tr>
                <td>Tipo de archivo</td>
                <td><?= tipoArchivo(getArchivo()); ?></td>
            </tr>
            <tr>
                <td>Tamaño de bytes</td>
                <td><?= tamanioArchivo(getArchivo()).'Bytes'; ?></td>
            </tr>
            <tr>
                <td>¿El archivo es ejecutable?</td>
                <td><?= ejecutableArchivo(getArchivo()); ?></td>
            </tr>
        </table>
    </section>







    <footer>
        <h6 class="centrado">Ing. Luis Alfredo Carrasco Sánchez</h6>
    </footer>




    
</body>
</html>