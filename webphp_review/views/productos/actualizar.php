<div class="container">
    <div class="row row-cols-12 mt-3">
        <div class="col-xl-12">
            <h3 class="text-center text-uppercase">Actualizar productos</h3>
            <img width="1250px" height="300px" src="<?=base_url?>/img/bannerPasteleria.jpg" alt="bannerPasteleria">
        </div>
    </div>
    <div class="row row-cols-12 mt-3">
        <div class="col-xl-12">
            <form>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-3 col-form-label text-right">Buscar producto por
                        codigo</label>
                    <div class="col-sm-5">
                        <input type="text" name="txtCodigo" class="form-control" id="inputPassword">
                    </div>
                    <div class="col-sm-4">
                        <button type="button" class="btn btn-primary text-uppercase">buscar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row row-cols-12 mt-5">
        <div class="col-xl-12">
            <form class="row g-3 needs-validation" novalidate>
                <div class="col-md-11">
                    <label for="validationCustom01" class="form-label">Descripción</label>
                    <input type="text" name="txtDescripcion" class="form-control" id="validationCustom01" value="Mark"
                        required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="validationCustom02" class="form-label">Precio</label>
                    <input type="text" name="txtPrecio" class="form-control" id="validationCustom02" value="Otto"
                        required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="validationCustom03" class="form-label">Stock</label>
                    <input type="text" name="txtPrecio" class="form-control" id="validationCustom03" value="100"
                        required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="validationCustom04" class="form-label">Fecha Vencimiento</label>
                    <input type="text" name="txtPrecio" class="form-control" id="validationCustom04" value="2015/01/12"
                        required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-12">
                    <button class="btn btn-primary" type="submit">Actualizar</button>
                </div>
            </form>
        </div>
    </div>