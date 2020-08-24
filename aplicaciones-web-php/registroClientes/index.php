<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/estilos.css">
    <title>Registro Clientes</title>
</head>
<body>

    <?php
        require('./cabecera.php');
    ?>

    
      <table>
            <tr>
                <td><img src="./img/icono_cliente.jpg" alt="registroClientes"></td>
                <td><a href="./nuevoCliente.php">Registro de clientes</a></td>
            </tr>
            <tr>
                <td><img src="./img/icono_lista.png" alt="listadoClientes"></td>
                <td><a href="./listadoClientes.php">Listado de clientes</a></td>
            </tr>
            <tr>
                <td><img src="./img/icono_salida.png" alt="salir"></td>
                <td><a href="">Salir</a></td>
            </tr>

      </table>


    <?php
        require('./pie.php');
    ?>
    
</body>
</html>