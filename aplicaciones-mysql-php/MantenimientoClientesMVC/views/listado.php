<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" href="../css/miEstilo.css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Control Ventas</title>
</head>
<body>
    <header>
        <?php require_once'../views/encabezado.php';?>
    </header>

    <section>
        <h3>LISTADO DE CLIENTES</h3>
        <?php 
            //agregamos la conexion a la base de datos
            include'../config/conexion.php';

            //creamos el objeto
            $objCon = new Conexion();

            //Invocamos al metodo de nuestro objeto
            $cliente = $objCon->listado();
        ?>
        <table>
            <thead>
                <th>CODIGO</th>
                <th>CLIENTE</th>
                <th>DIRECCION</th>
                <th>TELEFONO</th>
                <th>DISTRITO</th>
                <th>EMAIL</th>
            </thead>
            <tbody>
                <?php foreach($cliente as $cli): ?>
                <tr>
                    <td><?= $cli[0] ?></td>
                    <td><?= $cli[1] ?></td>
                    <td><?= $cli[2] ?></td>
                    <td><?= $cli[3] ?></td>
                    <td><?= utf8_decode($cli[4]) ?></td>
                    <td><?= $cli[5] ?></td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </section>

    <footer>
        <?php require_once'../views/pie.php'?>
    </footer>
    
</body>
</html>