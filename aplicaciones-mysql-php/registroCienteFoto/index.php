<?php require_once('./controllers/fotoController.php')?>
<?php 
    session_start();
    error_reporting(0);
    $foto = new fotoControllers();
    $foto->registro(); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <title>Subir Foto - Nombre</title>
</head>

<body>

    <div class="container">
        <header>
            <h2 class="text-center text-uppercase">Subir foto con nombre</h2>
        </header>

        <section class="main">

            <form action="index.php" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-7">
                        <?php if(isset($_SESSION['registro']) && isset($_SESSION['registro']) == "exito"):?>
                        <div class="alert alert-success" role="alert">
                            Usuario creado con exito
                        </div>
                        <?php elseif(isset($_SESSION['registro']) && isset($_SESSION['registro']) == "error"):?>
                        <div class="alert alert-danger" role="alert">
                            Usuario no creado
                        </div>
                        <?php session_unset($_SESSION['registro']);?>
                        <?php endif;?>


                    </div>
                    <div class="col-5">
                        <div class="form-group">
                            <label for="idCodigo">codigo</label>
                            <input type="text" name="txtCodigo" class="form-control" id="idCodigo" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="idNombres">Nombres</label>
                            <input type="text" name="txtNombre" id="idNombres" class="form-control" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="idPaterno">Paterno</label>
                            <input type="text" name="txtPaterno" id="idPaterno" class="form-control " required>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="idMaterno">Materno</label>
                            <input type="text" name="txtMaterno" id="idMaterno" class="form-control" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="idDireccion">Direccion</label>
                            <input type="text" name="txtDireccion" id="idDireccion" class="form-control" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="idTelefono">Telefono</label>
                            <input type="text" name="txtTelefono" id="idTelefono" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="idDistro">Distro</label>
                            <select class="form-control" name="selDistro" id="idDistro">
                                <?php 
                                $resultDistro = $foto->distrito();
                                while($dis = $resultDistro->fetch_object()):                                
                                
                            ?>
                                <option value="<?= $dis->id_distro; ?>"><?= $dis->descripcion; ?></option>

                                <?php endwhile;?>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="idCorreo">Correo</label>
                            <input type="email" name="txtCorreo" id="idCorreo" class="form-control" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="idImagen">Imagen</label>
                            <input type="file" name="picImagen" class="form-control" id="idImagen" required>
                        </div>
                    </div>
                </div>
            </form>

        </section>

        <footer>
            <h6 class="text-center text-uppercase">Derechos Reservados Ing. Luis Alfredo Carrasco <?php date('Y-M-D')?>
            </h6>
        </footer>

    </div>



</body>

</html>