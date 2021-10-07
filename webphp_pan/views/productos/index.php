<div class="container">
    <div class="row row-cols-12 mt-3">
        <div class="col-xl-12">
            <h3 class="text-center text-uppercase">Listado productos</h3>
            <img width="1250px" height="300px" src="<?=base_url?>/img/bannerPasteleria.jpg" alt="bannerPasteleria">
        </div>
    </div>
    <div class="row row-cols-12 mt-5 mb-5">
        <div class="col-xl-12">
            <?php if(isset($_SESSION["eliminacion"]) && $_SESSION["eliminacion"] == true):?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Eliminacion correcta!</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php endif?>
            <?php unset($_SESSION["eliminacion"])?>
        </div>
    </div>
    <div class="row row-cols-12 mt-5">
        <div class="col-xl-12">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Stock</th>
                        <th scope="col">Imagen</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <?php while($fila = $listaProductos->fetch_assoc()):?>
                    <tr>
                        <td><?= $fila['nombre'] ?></td>
                        <td><?= $fila['descripcion'] ?></td>
                        <td><?= $fila['precio'] ?></td>
                        <td><?= $fila['stock'] ?></td>
                        <td><img src="<?= base_url ?>/img/<?= $fila['id'] ?>.jpg" alt="<?= $fila['id'] ?>"></td>
                        <td><a class="btn btn-danger" href="<?=base_url?>producto/eliminar?id=<?=$fila["id"]?>" role="button">Eliminar</a></td>
                    </tr>
                    <?php endwhile?>
                </tbody>
            </table>
        </div>
    </div>
</div>