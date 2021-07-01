<div class="container">
    <div class="row row-cols-12 mt-3 mb-3">
        <div class="col-xl-12">
            <h3 class="text-center text-uppercase">Registro de productos</h3>
        </div>
    </div>
    <div class="row row-cols-6 d-flex justify-content-center">
        <div class="col-xl-6 mt-2 mb-2">
            <form action="<?=base_url?>producto/guardar_producto" method="POST">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Codigo</label>
                    <?php while($total = $total_registros->fetch_assoc()):?>
                    <input type="text" name="txtCode" class="form-control" id="exampleFormControlInput1"
                        value="P00<?=$total["total_registros"]?>" readonly="readonly">
                    <?php endwhile;?>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea2" class="form-label">Descripción</label>
                    <textarea class="form-control" type="text" name="txtDescription" id="exampleFormControlTextarea2"
                        rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput3" class="form-label">Precio</label>
                    <input type="text" name="txtPrice" class="form-control" id="exampleFormControlInput3">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput4" class="form-label">Stock</label>
                    <input type="text" name="txtStock" class="form-control" id="exampleFormControlInput4">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput5" class="form-label">Fecha</label>
                    <input type="text" name="txtDate" class="form-control" id="fecha" readonly="readonly">
                    <div class="d-flex justify-content-end" id="calendario">
                        <img src="<?=base_url?>img/ico_calendario.jpg" width="25px" height="25px"
                            alt="ico_calendario.jpg">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Registrar</button>
            </form>

        </div>
    </div>
</div>