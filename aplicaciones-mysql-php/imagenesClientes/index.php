<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/miEstilo.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <title>Imagenes Clientes</title>
</head>

<body>

    <?php 
        require('./conecta.php');
    ?>

    <header>
        <h2>listado de clientes</h2>
        <img src="./img/banner-clientes.jpg" alt="portada" class="rounded mx-auto d-block" alt="bannerClientes">
    </header>

    <section class="main">

        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Código</th>
                    <th scope="col">Cliente</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Imagen</th>
                </tr>
            </thead>
            <tbody>

                <?php 
               $sql = "SELECT ID_CLIENTE, concat(nombres, ' ', paterno, ' ', materno) as nombreCompleto,
                            fono FROM cliente";

            $rs = mysqli_query($conexion, $sql);

            $n = mysqli_num_rows($rs);

            while ($fila = mysqli_fetch_assoc($rs)) :
           
            ?>
                <tr>
                    <th scope="row"><?= $fila['ID_CLIENTE'] ?></th>
                    <td><?= $fila['nombreCompleto'] ?></td>
                    <td><?= $fila['fono'] ?></td>
                    <td><?= "<img src=./img/fotos/".$fila['ID_CLIENTE'].".jpg >"  ?></td>
                </tr>


        <?php endwhile; ?>
            </tbody>
        </table>



    </section>


    <footer>
        <h5>Ing. Luis Alfredo Carrasco Sánchez</h5>
    </footer>

</body>

</html>