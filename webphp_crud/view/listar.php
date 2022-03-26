<?php include '../controller/ListarController.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilos.css">
    <title>Listar PHP</title>
</head>

<body>
    
    <header>
        <h3 class="titulo">Listrar</h3>
    </header>
    <div class="regresar">
        <a href="../index.php">Inicio</a>
    </div>
    <div class="mensaje">
        <?php if(!empty($mensaje)):?>
            <p class="exito" id="exito">Eliminación exitosa!</p>
        <?php else:?>
            <p class="fracaso" id="fracaso">Eliminación fallido</p>
        <?php endif?>
    </div>
    <table class="tabla">
        <thead class="cabecera">
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Telefono</th>
            <th>Correo</th>
            <th>Eliminar</th>
            <th>Actualizar</th>
        </thead>
        <tbody class="cuerpo">
            <?php while($fila = $resultado->fetch_assoc()):?>
            <tr>
                <td><?= $fila['nombre'] ?></td>
                <td><?= $fila['apellidos'] ?></td>
                <td><?= $fila['telefono'] ?></td>
                <td><?= $fila['correo'] ?></td>
                <td><a href="../controller/EliminarController.php?correo=<?= $fila['correo'] ?>">Eliminar</a></td>
                <td><a href="../controller/BuscarController.php?correo=<?= $fila['correo'] ?>">Editar</a></td>
            </tr>
            <?php endwhile?>
        </tbody>
    </table>

    <footer class="footer">
        Todos los derechos reservados Ing. Luis Alfredo Carrasco &copy 
    </footer>

    <script src="../js/app.js"></script>
</body>

</html>