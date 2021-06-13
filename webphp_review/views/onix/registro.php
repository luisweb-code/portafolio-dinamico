<?php error_reporting(0)?>
<div class="container">
    <div class="row row-cols-12">
        <div class="col-xl-12 text-center">
            <img class="img-fluid" src="<?= base_url ?>/img/onix.png" alt="onix">
        </div>
    </div>
    <?php if($registro):?>
    <div class="row row-cols-12">
        <div class="col-xl-12 mt-5 mb-2">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Hurra!</strong> Tu registr fue exitoso.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    </div>
    <?php else:?>
        <div class="row row-cols-12">
            <div class="col-xl-12 mt-5 mb-2">
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Upsss!</strong> Error en el registro.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        </div>
    <?php endif;?>
    <div class="row row-cols-12 d-flex justify-content-center">
        <div class="col-xl-4 mt-5">
            <form action="<?=base_url?>onix/save" method="POST">
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombres</label>
                    <input type="text" class="form-control" name="txtNombres" id="nombre">
                </div>
                <div class="mb-3">
                    <label for="apellido" class="form-label">Apellido</label>
                    <input type="text" class="form-control" name="txtApellido" id="apellido">
                </div>
                <div class="mb-3">
                    <label for="direccion" class="form-label">Direccion</label>
                    <input type="text" class="form-control" name="txtDireccion" id="direccion">
                </div>
                <div class="mb-3">
                    <label for="telefonos" class="form-label">Telefonos</label>
                    <input type="text" class="form-control" name="txtTelefonos[]" id="telefonos">
                    <div id="telefono-extra" class="mt-2"></div>
                    <button type="button" class="btn btn-success mt-2" id="btn-telefono">Otro Telefono</button>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>
</div>