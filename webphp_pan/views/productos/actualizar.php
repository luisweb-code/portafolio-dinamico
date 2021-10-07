<?php error_reporting(0)?>
<div class="container">
    <div class="row row-cols-12 mt-3">
        <div class="col-xl-12">
            <h3 class="text-center text-uppercase">Actualizar productos</h3>
            <img width="1250px" height="300px" src="<?=base_url?>/img/bannerPasteleria.jpg" alt="bannerPasteleria">
        </div>
    </div>
    <div class="row row-cols-12 mt-4 mb-4">
        <div class="col-xl-12">
            <?php if(isset($_SESSION["actualizacion"]) && $_SESSION["actualizacion"] == true):?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Actualización correcta!</strong> Buen día!!!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php endif?>
            <?php unset($_SESSION["actualizacion"])?>
        </div>
    </div>
    <div class="row row-cols-12 mt-3">
        <div class="col-xl-12">
            <form action="<?=base_url?>producto/buscar" method="POST">
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-3 col-form-label text-right">Buscar producto por
                        id</label>
                    <div class="col-sm-5">
                        <input type="text" name="txtCodigo" class="form-control" id="inputPassword" placeholder="4">
                    </div>
                    <div class="col-sm-4">
                        <button type="submit" class="btn btn-primary text-uppercase">buscar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row row-cols-12 mt-5">
        <div class="col-xl-12">
            <form class="row g-3 needs-validation" novalidate action="<?=base_url?>producto/guardar" method="POST">
                <?php while($filaProducto = $getProducto->fetch_assoc()):?>
                <div class="col-md-4">
                    <label for="validationCustom00" class="form-label">Codigo</label>
                    <input type="text" name="txtCodigo" class="form-control" id="validationCustom00"
                        value="<?= $filaProducto["id"] ?>" readonly="readonly">
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="validationCustom01" class="form-label">Nombre</label>
                    <input type="text" name="txtNombre" class="form-control" id="validationCustom01"
                        value="<?= $filaProducto["nombre"] ?>" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-11">
                    <label for="validationCustom01" class="form-label">Descripción</label>
                    <input type="text" name="txtDescripcion" class="form-control" id="validationCustom01"
                        value="<?= $filaProducto["descripcion"] ?>" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="validationCustom02" class="form-label">Precio</label>
                    <input type="text" name="txtPrecio" class="form-control" id="validationCustom02"
                        value="<?= $filaProducto["precio"] ?>" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="validationCustom03" class="form-label">Stock</label>
                    <input type="text" name="txtStock" class="form-control" id="validationCustom03"
                        value="<?= $filaProducto["stock"] ?>" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <?php endwhile?>
                <div class="col-12">
                    <button class="btn btn-primary" type="submit">Actualizar</button>
                </div>
            </form>
        </div>
    </div>