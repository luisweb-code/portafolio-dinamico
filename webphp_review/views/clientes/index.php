<div class="container">
    <div class="row rows-cols-12 mt-2">
        <div class="col-xl-12">
            <h3 class="text-center text-uppercase">Registro del nuevo cliente</h3>
            <img src="<?=base_url?>img/bannerClientes.jpg" width="1260px" height="350px" alt="banner_clientes">
        </div>
    </div>
    <div class="row row-cols-12 mt-3 mb-5">
        <div class="col-xl-12">
            <form class="row g-3 needs-validation" action="<?=base_url?>registro/savecliente" method="POST" novalidate>
                <div class="col-md-2">
                    <label for="validationCustom01" class="form-label">Codigo</label>
                    <input type="text" name="txtCodigo" class="form-control" id="validationCustom01" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="validationCustom02" class="form-label">Nombres</label>
                    <input type="text" name="txtNombres" class="form-control" id="validationCustom02" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="validationCustom03" class="form-label">Paterno</label>
                    <input type="text" name="txtPaterno" class="form-control" id="validationCustom03" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="validationCustom04" class="form-label">Materno</label>
                    <input type="text" name="txtMaterno" class="form-control" id="validationCustom04" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-12">
                    <label for="validationCustom05" class="form-label">Direccion</label>
                    <input type="text" name="txtDireccion" class="form-control" id="validationCustom05" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="validationCustom06" class="form-label">Telefono</label>
                    <input type="text" name="txtTelefono" class="form-control" id="validationCustom06" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="validationCustom07" class="form-label">Distro</label>
                    <select class="form-select" name="txtDistro" aria-label="Default select example"
                        id="validationCustom07">
                        <option selected>Selecciona el distro</option>
                        <?php while($distritos = $allDistro->fetch_assoc()):?>
                        <option value="<?= $distritos["id_distro"] ?>"><?= $distritos["descripcion"] ?></option>
                        <?php endwhile;?>
                    </select>
                </div>
                <div class="col-md-12">
                    <label for="validationCustom08" class="form-label">Correo Electrónico</label>
                    <input type="mail" name="txtEmail" class="form-control" id="validationCustom08" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-12">
                    <button class="btn btn-primary" type="submit">Registrar</button>
                </div>
            </form>
        </div>
    </div>
</div>