<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/miEstilo.css">
    <title>Consulta de Productos</title>
</head>

<body>

    <?php 
      require_once('./conecta.php');
      require_once('./captura.php');
        $codigo = getCodigo();
    ?>

    <header>
        <h2>Consulta de productos</h2>
        <img src="./img/bannerPasteleria.jpg" class=" rounded mx-auto d-block" alt="Responsive image">
    </header>

    <section class="main">
        <div class="container">
            <div class="row">
                <div class="col-12  ">
                    <form class="form-inline form-centrado" method="POST" action="index.php">
                        <div class="form-group mb-2">
                            <input type="text" readonly class="form-control-plaintext text-center" id="staticEmail2"
                                value="Ingrese código de producto">
                        </div>
                        <div class="form-group mx-sm-3 mb-2">
                            <input type="text" class="form-control text-center" id="inputPassword2" name="txtCodigo"
                                placeholder="P0008">
                        </div>
                        <button type="submit" class="btn btn-primary mb-2">Buscar</button>
                    </form>
                </div>
            </div>
        </div>

        <?php 
            if(!empty($codigo)):

                $sql = "SELECT * FROM ventas2015.producto WHERE ID_PRODUCTO = '$codigo';";

                $rs = mysqli_query($conexion, $sql);

                while ($fila = mysqli_fetch_assoc($rs)) :
                
                
        ?>

        <div class="container">
            <div class="row">
                <div class="col-8">
                    <table class="table table-striped">

                        <tr>
                            <th scope="col">Producto</th>
                            <td><?=$fila['descripcion']?></td>
                        </tr>
                        <tr>
                            <th scope="col">Precio</th>
                            <td><?=  $fila['precio'] ?></td>
                        </tr>
                        <tr>
                            <th scope="col">Stock</th>
                            <td><?= $fila['stock'] ?></td>
                        </tr>
                        <tr>
                            <th scope="col">Fecha de vencimiento</th>
                            <td><?=  $fila['fecha_venc'] ?></td>
                        </tr>
                    </table>
                    </div>
                
                <div class="col-4">
                        <img src=" ./img/fotos/<?= $codigo ?>.jpg ">

                </div>
            </div>
        </div>
                <?php endwhile;?>
                <?php else: ?>
                <div class="container">
                    <div class="row">
                        <div class="col-8">
                            <table class="table table-striped">

                                <tr>
                                    <th scope="col">Producto</th>
                                    <td>$ 0</td>
                                </tr>
                                <tr>
                                    <th scope="col">Precio</th>
                                    <td>$ 0</td>
                                </tr>
                                <tr>
                                    <th scope="col">Stock</th>
                                    <td>$ 0</td>
                                </tr>
                                <tr>
                                    <th scope="col">Fecha de vencimiento</th>
                                    <td>$ 0</td>
                                </tr>
                            </table>                
                        </div>
                        <div class="col-4">
                            <img src=" ./img/fotos/<?= $codigo ?>.jpg ">

                        </div>
                    </div>
                </div>
            <?php endif; ?>           

         

    </section>

    <footer>
        <h5>Ing. Luis Alfredo Carrasco</h5>
    </footer>

</body>

</html>