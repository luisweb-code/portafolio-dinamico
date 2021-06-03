<?php error_reporting(0)?>
<div class="container">
    <div class="row row-cols-12 mt-3">
        <div class="col-xl-12">
            <h3 class="text-center text-uppercase">venta de entradas</h3>
            <img src="<?= base_url ?>/img/bannerTeatro.jpg" class="rounded-3" width="100%" height="250px"
                alt="bannerTeatro">
        </div>
    </div>
    <div class="row row-cols-12 mt-5 mb-5 fs-3 text-uppercase d-flex justify-content-center">
        <div class="col-xl-4 text-white  bg-secondary">
            Adulto $80.00
        </div>
        <div class="col-xl-4 bg-light">
            Niño $35.00
        </div>
        <div class="col-xl-4 bg-secondary text-white">
            Promoción "Miércoles"
        </div>
    </div>
    <?php if($mensaje_error):?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>ERROR!</strong> Verifica los campos nuevamente.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php endif;?>
    <div class="row row-cols-12 mt-3">
        <div class="col-xl-6">
            <form action="<?=base_url?>boletos/pago" method="POST">
                <div class="mb-3">
                    <label for="comprador" class="form-label">Comprador</label>
                    <input type="text" class="form-control" name="txtComprador" id="comprador" size="50">
                </div>
                <div class="mb-3">
                    <label for="fechaActual" class="form-label">Fecha Actual</label>
                    <input type="text" class="form-control" name="txtFecha" id="fechaActual"
                        value="<?= date('j/m/Y') ?>">
                </div>
                <div class="mb-3">
                    <label for="entradaAdultos" class="form-label">Entrada Adultos</label>
                    <input type="text" class="form-control" name="txtEntradaAdultos" id="entradaAdultos">
                </div>
                <div class="mb-3">
                    <label for="entradaNinos" class="form-label">Entrada Niños</label>
                    <input type="text" class="form-control" name="txtEntradaNinos" id="entradaNinos">
                </div>
                <button type="submit" class="btn btn-primary">Procesar</button>
                <button type="reset" class="btn btn-warning">Limpiar</button>
            </form>
        </div>
        <div class="col-xl-6 mt-5">
            <h4 class="text-center text-uppercase mb-3">Datos cliente</h4>
            <table class="table table-striped">
                <tr>
                    <td>Comprador</td>
                    <td><?= $cliente ?></td>
                </tr>
                <tr>
                    <td>Boletos para Adulto</td>
                    <td><?= $boletos_adulto ?></td>
                </tr>
                <tr>
                    <td>Boletos para niño</td>
                    <td><?= $boletos_nino ?></td>
                </tr>
                <tr>
                    <td>Monto total a pagar</td>
                    <td>$<?= $total ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>