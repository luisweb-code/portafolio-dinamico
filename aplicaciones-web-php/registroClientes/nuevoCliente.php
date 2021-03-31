<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/estilos.css">
    <title>Nuevo cliente</title>
</head>
<body>

    <?php 
        error_reporting(0);
        require('./cabecera.php'); 
        require('./controllerRegistro.php');
        $clientes = './clientes.txt';
       
        $numero = contador($clientes);
        $cliente = getCliente();
        $direccion = getDireccion();
        $telefono = getTelefono();
        $nacimiento = getNacimiento();

       if(isset($_POST['btnRegistrar'])){
            registrar($numero, $cliente, $direccion, $telefono, $nacimiento);
       }
        
    ?>


    <header>
        <h2 class="centrado cen-clientes">registro del nuevo cliente</h2>
    </header>

    <form action="./nuevoCliente.php" method="POST">
        <table>
            <tr>
                <td>N° Registro</td>
                <td><?= $numero ?></td>
            </tr>
            <tr>
                <td>Cliente</td>
                <td><input type="text" name="txtCliente" size="80" ></td>
            </tr>
            <tr>
                <td>Dirección</td>
                <td><input type="text" name="txtDireccion" size="80" ></td>
            </tr>
            <tr>
                <td>Teléfono</td>
                <td><input type="text" name="txtTelefono" maxlength="10" ></td>
            </tr>
            <tr>
                <td>Fecha Nacimineto</td>
                <td><input type="text" name="txtNacimiento" ></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Registrar Cliente" name="btnRegistrar"></td>
            </tr>
        </table>   
    </form>







    <?php require('./pie.php'); ?>


    
</body>
</html>