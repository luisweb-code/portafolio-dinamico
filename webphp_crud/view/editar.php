<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilos.css">
    <title>Editar PHP</title>
</head>

<body>
    
    <header>
        <h3 class="titulo">Editar</h3>
    </header>
    <div class="regresar">
        <a href="../index.php">Inicio</a>
    </div>
    <div class="mensaje">
        <?php if(!empty($mensaje)):?>
            <p class="exito" id="exito">Actualización exitosa!</p>
        <?php else:?>
            <p class="fracaso" id="fracaso">Actualización fallida</p>
        <?php endif?>
    </div>

    <div class="formulario">
        <form action="../controller/EditarController.php" method="post" class="miFormulario">
            <?php while($fila = $resultado->fetch_assoc()):?>
            <label for="idnombre">Nombre</label>
            <input type="text" name="txtnombre" id="idnombre" value="<?= $fila['nombre'] ?>">
            <label for="idapellidos">Apellidos</label>
            <input type="text" name="txtapellidos" id="idapellidos" value="<?= $fila['apellidos'] ?>">
            <label for="idtelefono">Telefono</label>
            <input type="text" name="txttelefono" id="idtelefono" maxlength="10" value="<?= $fila['telefono'] ?>">
            <label for="idcorreo">Correo</label>
            <input type="text" name="txtcorreo" id="idcorreo" value="<?= $fila['correo'] ?>" readonly>
            <input type="submit" value="Actualizar">
            <?php endwhile?>
        </form>
    </div>
    

    <footer class="footer">
        Todos los derechos reservados Ing. Luis Alfredo Carrasco &copy 
    </footer>

    <script src="../js/app.js"></script>
</body>

</html>