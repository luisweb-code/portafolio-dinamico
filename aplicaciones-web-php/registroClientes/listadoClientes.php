<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/estilos.css">
    <title>Listado Clientes</title>
</head>

<body>


    <header>
        <h2 class="centrado cen-clientes">listado de clientes</h2>
    </header>

    <?php require('./cabecera.php');?>



    <table>
        <thead>
            <th>CODIGO</th>
            <th>NOMBRE DEL CLIENTE</th>
            <th>DIRECCIÓN</th>
            <th>TELÉFONO</th>
            <th>FECHA NACIMIENTO</th>
        </thead>
        <?php
                error_reporting(0);
                        $clientes = fopen('./clientes.txt', 'r');

                        if (filesize('./clientes.txt') == 0) {
                           echo "<script> alert('NO HAY REGISTROS') </script>";
                        }else{
                            $leer = fread($clientes, filesize('./clientes.txt'));
                            $linea = explode(chr(13).chr(10), $leer);
                            for ($i=0; $i < count($linea)-1 ; $i++) { 
                                $palabra = explode('|', $linea[$i]);
                            
                        
                
                
                ?>
        <tbody>



            <td><?= $palabra[0] ?></td>
            <td><?= $palabra[1] ?></td>
            <td><?= $palabra[2] ?></td>
            <td><?= $palabra[3] ?></td>
            <td><?= $palabra[4] ?></td>

            <?php
                    
                     }
                    }                
                ?>


        </tbody>
    </table>











    <?php require('./pie.php');?>



</body>

</html>