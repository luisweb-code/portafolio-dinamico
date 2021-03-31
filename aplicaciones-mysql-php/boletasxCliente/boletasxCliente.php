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
      
      require('./conecta.php');
      require('./captura.php');
      
    ?>

    <div class="container">
        <h2>listado de boletas por cliente</h2>
        <img src="./img/BannersClientes.png" class="rounded mx-auto d-block" alt="bannerClientes">
    </div>

    <div class="container">
        <div class="form-envio">
            
            <form class="form-inline" action="boletasxCliente.php" method="POST">
                <div class="form-group mb-2">
                    <input type="text" readonly class="form-control-plaintext text-center" id="staticEmail2" value="Ingrese código de cliente">
                </div>
               
                <div class="form-group mx-sm-3 mb-2">
                    <input type="text" name="txtCodigo">
                </div>

                <button type="submit" class="btn btn-success mb-2 btn-listar">Consultar</button>
            </form>

        </div>

                            


        <div class="row">
            <div class="col-12  text-center">
                <h5>Codigo de cliente: <?= getCodigo() ?> </h5>
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
                                <th scope="col">N° boleta</th>
                                <th scope="col">fecha</th>
                                <th scope="col">código de cliente</th>
                                <th scope="col">nombre de cliente</th>
                                <th scope="col">subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                            $acumulado = 0;
                            $codigo = getCodigo();
                            $sql="SELECT b.num_boleta, b.fecha, b.id_cliente, 
                            concat(c.nombres,' ', c.paterno,' ', c.materno) as nombre_completo,
                            sum(p.precio * d.cantidad) as precioxcantidad
                            from cliente c
                            inner join boleta b on c.id_cliente = b.id_cliente
                            inner join detalleboleta d on d.num_boleta = b.num_boleta
                            inner join producto p on p.id_producto = d.id_producto
                            group by b.num_boleta, b.fecha, c.id_cliente,
                            concat(c.nombres,' ',c.paterno,' ', c.materno)
                            having c.id_cliente = '$codigo'; ";

                            $rs=mysqli_query($conexion, $sql);
                            $n = mysqli_num_rows($rs);

                           while ($fila = mysqli_fetch_assoc($rs)) :
                            $acumulado += $fila['precioxcantidad'];
                              
                        ?>
                            <tr>
                                <th>
                                    <?= $fila['num_boleta']; ?>
                                </th>
                                <td>
                                    <?= $fila['fecha']; ?>
                                </td>
                                <td>
                                    <?= $fila['id_cliente']; ?>
                                </td>
                                <td>
                                    <?= $fila['nombre_completo']; ?>
                                </td>
                                <td>
                                    <?= "$ ". number_format($fila['precioxcantidad'], 2); ?>
                                </td>
                                
                                
                               
                            </tr>

                           <?php endwhile; ?>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="bg-primary text-white text-center">Costo Acomulado</td>
                                <td class="bg-primary text-white text-center"><?= "$ ".number_format($acumulado,2) ?></td>
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