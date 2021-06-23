<div class="container">
    <div class="row row-cols-12 mt-3">
        <div class="col-xl-12">
            <h3 class="text-center text-uppercase">Listado productos</h3>
            <img width="1250px" height="300px" src="<?=base_url?>/img/bannerPasteleria.jpg" alt="bannerPasteleria">
        </div>
    </div>
    <div class="row row-cols-12 mt-3">
        <div class="col-xl-12">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Stock</th>
                        <th scope="col">Fecha vencimiento</th>
                        <th scope="col">imagen</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($fila = $listaProductos->fetch_assoc()):?>
                        <tr>
                            <td><?=$fila["id_producto"]?></td>
                            <td><?=$fila["descripcion"]?></td>
                            <td><?=$fila["precio"]?></td>
                            <td><?=$fila["stock"]?></td>
                            <td><?=$fila["fecha_venc"]?></td>
                            <td><img src="<?=base_url?>/img/<?=$fila["id_producto"]?>" alt=""></td>
                        </tr>
                    <?php  endwhile;?>
                </tbody>
            </table>
        </div>
    </div>
</div>