<?php 
    error_reporting(0);
    require_once('../controllers/con_cliente.php');
    $conCliente = new con_cliente();
    $codCliente = $conCliente->buscarCliente();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SISTEMA DE CONTROL DE VENTAS</title>
    <link rel="stylesheet" href="../css/miEstilo.css">
</head>
<body>
    <header>
        <?php require_once'../views/encabezado.php'?>
    </header>

<section>
    
    <h3>Busqueda de datos del cliente</h3>
    <form action="buscar.php" method="post">
        <table>
            <tr>
                <td>
                    CODIGO
                    <input type="text" name="txtCodigo">
                    <input type="submit" name="" value="BUSCAR">
                </td>
            </tr>            
        </table>
        <table>
            
                <tr>
                    <td>
                        CODIGO:
                        <?= $codCliente[0] ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        NOMBRES:
                        <?= $codCliente[1] ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        APELLIDO PATERNO:
                        <?= $codCliente[2] ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        APELLIDO MATERNO:
                        <?= $codCliente[3] ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        DIRECCION:
                        <?= $codCliente[4] ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        TELEFONO:
                        <?= $codCliente[5] ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        DISTRO:
                        <?= $codCliente[6] ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        EMAIL:
                        <?= $codCliente[7] ?>
                    </td>
                </tr>
             
        </table>
    </form>

    
</section>

<footer>
    <?php require_once'../views/pie.php'?>
</footer>
    
</body>
</html>