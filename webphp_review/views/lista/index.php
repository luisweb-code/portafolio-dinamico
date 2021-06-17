<div class="container">
    <div class="row row-clos-12">
        <div class="col-xl-12">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Codigo</th>
                        <th scope="col">Nombres</th>
                        <th scope="col">Paterno</th>
                        <th scope="col">Materno</th>
                        <th scope="col">Dirección</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Distrito</th>
                        <th scope="col">Email</th>
                    </tr>
                </thead>
                <tbody>

                    <?php while($fila = $mostrar_clintes->fetch_assoc()):?>
                    <tr>
                        <td scope="row"><?= $fila["id_cliente"] ?></td>
                        <td scope="row"><?= $fila["nombres"] ?></td>
                        <td scope="row"><?= $fila["paterno"] ?></td>
                        <td scope="row"><?= $fila["materno"] ?></td>
                        <td scope="row"><?= $fila["direccion"] ?></td>
                        <td scope="row"><?= $fila["fono"] ?></td>
                        <td scope="row"><?= $fila["id_distrito"] ?></td>
                        <td scope="row"><?= $fila["email"] ?></td>

                    </tr>
                    <?php endwhile?>

                </tbody>
            </table>
        </div>
    </div>

</div>