<?php require_once('./controllers/ClientesController.php');  ?>
<?php require_once('./include/utilidades.php');  ?>

<?php 
   
    error_reporting(0);
    session_start();
    $clientesAll = new clientesController();
    $clientesAll->registry();
     
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Registros clientes</title>
</head>

<body>


    <div class="container">
        <header>
            <h2 class="text-uppercase text-center">registro clientes</h2>
            <img src="img/bannerClientes.jpg" class="img-fluid rounded mx-auto d-block" alt="imagenClientes">
        </header>

        <section class="main">
            <div class="container">
                <form action="index.php" method="POST">
                    <div class="row">
                        <div class="col-7">
                            <?php if(isset($_SESSION['registro']) && $_SESSION['registro']== 'exito'):?>
                                <br>
                                <div class="alert alert-success" role="alert">
                                    Usuario Creado
                                </div>
                            <?php elseif(isset($_SESSION['registro']) && $_SESSION['registro'] == 'error'):?>
                            <br>
                                <div class="alert alert-danger" role="alert">
                                    Error Verifica bien los datos
                                </div>
                            <?php endif;?>
                            <?php Utilidades::deleteSession('registro');?>                           
                            
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="idCodigo" class="text-uppercase">Codigo</label>
                                <input type="text" class="form-control" name="txtCodigo" id="idCodigo">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-11">
                            <div class="form-group">
                                <label for="idNombres" class="text-uppercase">Nombres</label>
                                <input type="text" class="form-control" name="txtNombres" id="idNombres">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="idPaterno" class="text-uppercase">Peterno</label>
                                <input type="text" class="form-control" name="txtPaterno" id="idPaterno">
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="form-group">
                                <label for="idMaterno" class="text-uppercase">Materno</label>
                                <input type="text" class="form-control" name="txtMaterno" id="idMaterno">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-11">
                            <div class="form-group">
                                <label for="idDireccion" class="text-uppercase">Dirección</label>
                                <input type="text" class="form-control" name="txtDireccion" id="idDireccion">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="idTelefono" class="text-uppercase">Telefono</label>
                                <input type="text" class="form-control" name="txtTelefono" id="idTelefono">
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="form-group">
                                <label for="idMaterno" class="text-uppercase">Distro</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="selDistro">
                                    <?php 
                                        $resultado = $clientesAll->getAll();
                                    
                                        while ($dis = $resultado->fetch_object()): 
                                    ?>
                                    <option value="<?= $dis->id_distro; ?>"><?= $dis->descripcion; ?></option>
                                    <?php endwhile;?>                                 
                                </select>
                                    
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-11">
                            <div class="form-group">
                                <label for="idCorreo" class="text-uppercase">Correo</label>
                                <input type="email" class="form-control" name="txtCorreo" id="idCorreo">
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary text-uppercase">Registrar</button>
                </form>

            </div>


        </section>


        <footer>
            <p class="text-center">Todos los derechos reservados <?= date('d-m-y')?></p>
            <h5>
                <p class="text-center text-uppercase"><a href="#">listado clietes |</a><a href="#"> registro clietes</a>
                </p>

            </h5>
        </footer>


    </div>


</body>

</html>
