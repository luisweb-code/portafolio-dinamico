<?php error_reporting(0)?>
<h2 class="text-center text-uppercase fs-4 mt-4 mb-4">casa de cambio</h2>
<div class="container">
    <?php if($mensaje):?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Hay error en los datos</strong> Deberias tener cuidado, ingrese nuevamente  los valores.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif;?>
    <div class="row row-cols-4 mt-4 mb-3 d-flex justify-content-center">
        <div class="col-xl-4">
            <form action="<?=base_url?>cambio/monto" method="POST">
                <div class="mb-3">
                    <label for="montoSoles" class="form-label">Monto en Soles</label>
                    <input type="text" class="form-control" name="txtSoles" id="montoSoles" aria-describedby="Soles">
                </div>
                <div class="mb-3">
                    <label for="montoDolares" class="form-label">Monto en dolares</label>
                    <input type="text" class="form-control" name="txtDolares" id="montoDolares" aria-describedby="Dolares">
                </div>
                <div class="mb-3">
                    <label for="montoMarcos" class="form-label">Monto en Marcos</label>
                    <input type="text" class="form-control" name="txtMarcos" id="montoMarcos" aria-describedby="Soles">
                </div>                
                <button type="Procesar!" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-warning">Limpiar</button>
            </form>
        </div>
    </div>
    <div class="row row-cols-4 mt-5 d-flex justify-content-center">
        <div class="col-xl-4">
            <table class="table table-striped">
                <tbody>
                    <tr>
                        <td>Total Soles</td>
                        <td>S/ <?= $soles = $soles ? number_format($soles, 2) : '0.00' ?></td>
                    </tr>
                    <tr>
                        <td>Total dólares</td>
                        <td>$ <?= $dolares = $dolares ? number_format($dolares, 2) : '0.00' ?></td>
                    </tr>
                    <tr>
                        <td>Total Marcos</td>
                        <td><?= $marcos = $marcos ? number_format($marcos, 2) : '0.00' ?> DEM</td>
                    </tr>
                    <tr>
                        <td>Monto Total en euros</td>
                        <td><?= $euros = $euros ? number_format($euros, 2) : '0.00' ?> euros</td>
                    </tr>
                </tbody>                   
            </table>
        </div>
    </div>
</div>
