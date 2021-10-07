<div class="container">
    <div class="row row-cols-12 mt-4">
        <div class="col-xl-12">
            <h3 class="text-center text-uppercase">Registro de productos</h3>
            <img width="1250px" height="300px" src="<?=base_url?>/img/bannerPasteleria.jpg" alt="bannerPasteleria">
        </div>
    </div>
    <div class="row row-cols-12 mt-4 mb-4">
        <div class="col-xl-12">
            <!-- Evalua la variable de sasion y nos da una respuesta si se realizo el registro correctamente -->
            <?php if(isset($_SESSION["guardar_exito"]) && $_SESSION["guardar_exito"] == true):?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Registro correcto!</strong> Buen día!!!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php endif?>
            <!-- Borra la variable de sassion -->
            <?php unset($_SESSION["guardar_exito"])?>
        </div>
    </div>
    <div class="row row-cols-6 d-flex justify-content-center mt-5">
        <div class="col-xl-6 mt-2 mb-2">
            <form action="<?=base_url?>producto/guardar_producto" method="POST">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label"><b>Codigo se genera en automatico</b></label>
                    <?php while($total = $total_registros->fetch_assoc()):?>
                    <input type="text" name="txtCode" class="form-control" id="exampleFormControlInput1"
                        value="<?=$total["total_registros"]?>" readonly="readonly">
                    <?php endwhile;?>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea2" class="form-label">Nombre</label>
                    <input type="text" name="txtNombre" class="form-control" id="exampleFormControlInput2">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea3" class="form-label">Descripción</label>
                    <textarea class="form-control" type="text" name="txtDescripcion" id="exampleFormControlTextarea3"
                        rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput4" class="form-label">Precio</label>
                    <input type="text" name="txtPrecio" class="form-control" id="exampleFormControlInput4">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput5" class="form-label">Stock</label>
                    <input type="text" name="txtStock" class="form-control" id="exampleFormControlInput5">
                </div>
                <button type="submit" class="btn btn-primary">Registrar</button>
            </form>

        </div>
    </div>
</div>