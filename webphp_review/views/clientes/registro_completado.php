<div class="container">
    <div class="row row-cols-12 mt-5 mb-5">
        <div class="col-xl-12">
            <?php if(!empty($registro)):?>
            <div class="alert alert-success" role="alert">
                <h4 class="alert-heading"><b>Registro Completado</b></h4>
                <p>Su registro ha sido completado espera a nuevas indicaciones</p>
                <hr>
                <p class="mb-0">Cualquier duda ponerse en contacto con 5555 555555</p>
            </div>
            <?php else:?>
                <div class="alert alert-danger" role="alert">
                <h4 class="alert-heading"><b>Registro con errores</b></h4>
                <p>Su registro ha tiene una anormalidad, vualva a intentarlo más tarde</p>
            </div>
            <?php endif?>
        </div>
    </div>
</div>