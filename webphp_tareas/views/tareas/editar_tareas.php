<div class="row row-cols-12 mb-5 mt-5">
    <div class="col-xl-12">
        <p class="text-center fs-2 fw-bold">Actualizar tu tarea</p>
    </div>
</div>
<div class="row row-cols-12 mt-5 mb-5">
    <div class="col-xl-12">
        <form method="POST" id="miForm" action="<?=base_url?>tareas/upgrade">
            <?php while($rowEditTask =  $getTarea->fetch_assoc()):?>
            <div class="mb-3">
                <label for="formFile" class="form-label fw-bold">Numero</label>
                <input class="form-control" name="txtId" type="text" value="<?= $rowEditTask["id"] ?>"
                    readonly="readonly">
            </div>
            <div class="mb-3">
                <div class="form-floating">
                    <textarea class="form-control" name="txtTask" placeholder="Leave a comment here"
                        id="floatingTextarea"><?=$rowEditTask["descripcion"]?></textarea>
                    <label for="floatingTextarea">Actividades</label>
                </div>
            </div>
            <button type="submit" class="btn btn-success">Actualizar tarea</button>
            <?php endwhile;?>
        </form>
    </div>
</div>