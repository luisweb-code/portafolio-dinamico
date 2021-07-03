<div class="container">
    <div class="row row-cols-12">
        <div class="col-xl-12 text-center">
            <h3 class="text-uppercase p-3">clientes por distrito</h3>
            <img height="320px" width="1200px" class="rounded-top rounded-end"
                src="<?=base_url?>/img/bannerBusqueda.jpg" alt="bannerBusqueda">
        </div>
    </div>
    <div class="row row-clos-12 p-1">
        <div class="col-xl-4 text-center">
            Seleccione Distrito
        </div>
        <div class="col-xl-4">
            <form action="<?=base_url?>listado/distro" method="POST">
                <div class="mb-3">
                    <select class="form-select" name="distro" aria-label="Default select example">
                        <?php while($fila = $allDistro->fetch_assoc()):?>
                        <option value="<?=$fila["id_distro"]?>"><?=$fila["descripcion"]?></option>
                        <?php endwhile?>
                    </select>
                </div>
        </div>
        <div class="col-xl-4">
            <button type="submit" class="btn btn-primary">Listar</button>
            </form>
        </div>
    </div>
    <div class="row row-cols-12 mt-3">
        <div class="col-xl-12">
            <?php if(!empty($descripcion)):?>
            <?php while($filaDescrip = $descripcion->fetch_assoc()):?>
            <h3 class="text-center p3">
                Clientes del distrito: <?= $filaDescrip["descripcion"] ?>
            </h3>
            <?php endwhile?>
            <?php endif?>
        </div>
    </div>
    <div class="row row-cols-12 d-flex justify-content-center mt-4">
        <div class="col-xl-10">
            <table class="table ">
                <thead>
                    <tr class="table-primary">
                        <th scope="col">Codigo</th>
                        <th scope="col">Cliente</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Distrito</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(!empty($get_Distro)):?>
                    <?php while($getFila = $get_Distro->fetch_assoc()):?>
                    <tr>
                        <th scope="row"><?= $getFila["id_cliente"] ?></th>
                        <td><?= $getFila["nombre_completo"] ?></td>
                        <td><?= $getFila["fono"] ?></td>
                        <td><?= $getFila["descripcion"] ?></td>
                    </tr>
                    <?php endwhile?>
                    <?php endif?>
                    <tr>
                        <td colspan="1"></td>
                        <td></td>
                        <td class="fw-bold table-success">Total</td>
                        <?php if(!empty($row_cnt)):?>
                        <td class="fw-bold table-success"><?= $row_cnt ?></td>
                        <?php endif?>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>