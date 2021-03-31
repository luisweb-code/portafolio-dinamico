<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/miEstilo.css">
    <title>Clientes por Distrito</title>
</head>

<body>

    <?php 
      error_reporting(0);
      require('./conecta.php');
      require('./captura.php');
    ?>

    <div class="container">
        <h2>listado de clientes por distrito</h2>
        <img src="./img/BannersClientes.png" class="rounded mx-auto d-block" alt="bannerClientes">
    </div>

    <div class="container">
        <div class="form-envio">

            <form class="form-inline" action="listadoClientesxDistrito.php" method="POST">
                <div class="form-group mb-2">
                    <input type="text" readonly class="form-control-plaintext text-center" id="staticEmail2"
                        value="Seleccione Distro">
                </div>

                <div class="form-group mx-sm-3 mb-2">
                    <select id="inputState" class="form-control" name="selDistrito">
                        <?php 

                            $sql = 'SELECT DISTINCT c.id_distrito, d.descripcion
                            FROM cliente c INNER JOIN distro d 
                            ON c.id_distrito = d.id_distro;';

                            $rs = mysqli_query($conexion, $sql);

                            $n = mysqli_num_rows($rs);
                            
                            
                            while ($fila = mysqli_fetch_assoc($rs)) :

                        ?>

                        <option value="<?= $fila['id_distrito']?>"><?= $fila['descripcion'] ?></option>

                        <?php endwhile; ?>

                    </select>
                </div>

                <button type="submit" class="btn btn-success mb-2 btn-listar">Listar</button>
            </form>

        </div>

        <?php 
               
                //Llamamos a la funcion
                 $codigo = getDistrito();
                              
                //desarrollamos la consulta
                    $sqlConsulta  = "SELECT DESCRIPCION FROM DISTRO WHERE ID_DISTRO = '$codigo';";
                    $distro = mysqli_query($conexion, $sqlConsulta);
                    $filaDistro = mysqli_fetch_array($distro, MYSQLI_ASSOC);

                //Implementamos la consulta
                $sqlImplento = "SELECT C.id_cliente, CONCAT(C.NOMBRES,' ', C.PATERNO,' ', C.MATERNO) AS nombres,
                C.fono, D.descripcion
                FROM CLIENTE C 
                INNER JOIN DISTRO D
                ON C.id_distrito = D.id_distro
                WHERE C.id_distrito = '$codigo';";

                //Realizando la consulta ala distro seleccionado
                $rsC = mysqli_query($conexion, $sqlImplento);   
                
                //Determinar el total de clientes 
                $total = mysqli_num_rows($rsC);
               
               ?>


        <div class="row">
            <div class="col-12  text-center">
                <h5>clientes del distrito: <?= $filaDistro["DESCRIPCION"]; ?></h5>
            </div>
        </div>

    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <section class="resutaldos-tabla">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Código</th>
                                <th scope="col">Cliente</th>
                                <th scope="col">Teléfono</th>
                                <th scope="col">Distro</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            while ($fila = mysqli_fetch_assoc($rsC)) :
                               
                    
                                
                            
                        ?>
                            <tr>
                                <th scope="row">
                                    <?= $fila['id_cliente'] ?>
                                </th>
                                <td>
                                    <?= $fila['nombres'] ?>
                                </td>
                                <td>
                                    <?= $fila['fono'] ?>
                                </td>
                                <td>
                                    <?= $fila['descripcion'] ?>
                                </td>


                            </tr>

                            <?php endwhile; ?>
                            <tr>
                                <td></td>
                                <td></td>
                                <td class="bg-primary text-white text-center">Total</td>
                                <td class="bg-primary text-white text-center"><?= $total ?></td>
                            </tr>

                        </tbody>
                    </table>
                </section>
            </div>
        </div>
    </div>


    <footer>
        <h5>Derechos reservados &copy; Ing. Luis Alfredo Carrasco</h5>
    </footer>

</body>

</html>