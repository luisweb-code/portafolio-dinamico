<main>
    <div class="row row-cols-12 mt-5">
        <div class="col-xl-12">
            <form method="POST" id="miForm" action="<?=base_url?>tareas/save">
                <div class="mb-3">
                    <label for="list-task" class="form-label fw-bold">Anota tus tareas pendientes</label>
                    <div class="form-floating">
                        <textarea class="form-control" name="txtTask" placeholder="Leave a comment here"
                            id="floatingTextarea"></textarea>
                        <label for="floatingTextarea">Actividades</label>
                    </div>
                    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                </div>
                <button type="submit" class="btn btn-danger">Salvar Tarea</button>
            </form>
        </div>
    </div>
    <div class="row row-cols-12 mt-4">
        <div class="col-xl-12">
            <?php if(isset($_SESSION["registro_exitoso"]) && $_SESSION["registro_exitoso"] == true):?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Vamos por más tareas!</strong> Registro exitoso!!!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php elseif(isset($_SESSION["completado"]) && $_SESSION["completado"] == true):?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Tarea completada</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php elseif(isset($_SESSION["actualizacion"]) && $_SESSION["actualizacion"] == true):?>
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                <strong>Actualización Correcta</strong> Tengamos un buen día!!!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php endif;?>
            <?php unset($_SESSION["registro_exitoso"], $_SESSION["completado"], $_SESSION["actualizacion"])?>
        </div>
    </div>
    <div class="row row-cols-12 mt-4 mb-4">
        <div class="col-xl-12">
            <table class="table table-hover">
                <thead>
                    <th>Descripcion</th>
                    <th>Fecha</th>
                    <th>Completado</th>
                    <th>Editar</th>
                </thead>
                <tbody>
                    <?php while($rowTask = $listaTareas->fetch_assoc() ):?>
                    <tr>
                        <td><?=$rowTask["descripcion"]?></td>
                        <td><?=$rowTask["fecha"]?></td>
                        <td>
                            <span>
                                <a class="bt-success" href="<?=base_url?>tareas/completed?txtid=<?=$rowTask["id"]?>">
                                    <i class="fas fa-check-circle"></i>
                                </a>
                            </span>
                        </td>                       
                        <td>
                            <span>
                                <a class="bt-update" href="<?=base_url?>tareas/buscar?txtid=<?=$rowTask["id"]?>">
                                        <i class="fas fa-edit"></i>
                                </a>
                            </span>
                        </td>                       
                    </tr>
                    <?php endwhile;?>
                </tbody>
            </table>
        </div>
    </div>
<!--     <i class="fas fa-edit"></i> -->