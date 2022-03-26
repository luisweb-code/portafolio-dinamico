<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilos.css">
    <title>Agregar PHP</title>
</head>

<body>
    <header>
        <h3 class="titulo">Agregar</h3>
    </header>
    <div class="regresar">
        <a href="../index.php">Inicio</a>
    </div>

    <div class="mensaje">
        <?php if(!empty($mensaje)):?>
            <p class="exito" id="exito">Registro exitoso!</p>
        <?php else:?>
            <p class="fracaso" id="fracaso">Registro fallido</p>
        <?php endif?>
    </div>

    <div class="formulario">
        <form action="../controller/AgregarController.php" method="post" class="miFormulario">
            <label for="idnombre">Nombre</label>
            <input type="text" name="txtnombre" id="idnombre">
            <label for="idapellidos">Apellidos</label>
            <input type="text" name="txtapellidos" id="idapellidos">
            <label for="idtelefono">Telefono</label>
            <input type="text" name="txttelefono" id="idtelefono" maxlength="10">
            <label for="idcorreo">Correo</label>
            <input type="text" name="txtcorreo" id="idcorreo">
            <input type="submit" value="Guardar">
        </form>
    </div>



    <footer class="footer">
        Todos los derechos reservados Ing. Luis Alfredo Carrasco &copy
    </footer>
    <script src="../js/app.js"></script>
</body>

</html>