<?php 

$regular = new regularController();
$row = $regularVerb->fetch_array(MYSQLI_ASSOC);


?>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <?php if(isset($_SESSION["acierto"]) && $_SESSION["acierto"] == true):?>
            <div class="col-sm-12 mt-2 text-center rounded alert alert-primary" role="alert">
              <b>Excelente eres una mente brillante .... Correcto</b> 
            </div>
            <?php elseif(isset($_SESSION["error"]) && $_SESSION["error"] == false):?>
            <div class="col-sm-12 mt-2 text-center rounded alert alert-danger" role="alert">
                <b>Estudie más por favor .... Error</b>
            </div>
            <?php endif?>
            <?php session_destroy()?>        
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-7">
            <P class="text-center mt-3 h4 ">Verbos Regulares</P>
            <form action="<?=base_url?>regular/evaluador" method="POST" class="mb-5" id="miFormulario">
                <div class="form-group">
                    <input type="hidden" name="txtcode" value="<?= $row["id"] ?>" class="form-control" require pattern="[0-9]+">
                </div>
                <div class="form-group">
                    <small id="helpId" class="text-muted">Inserte el verbo en tiempo presente</small>
                    <input type="text" name="txtPresentTense" id="idPresentTense" class="form-control" placeholder="PRESENT TENSE" require pattern="[A-Za-z]+">
                </div>
                <div class="form-group">
                    <small id="helpId" class="text-muted">Inserte el verbo en tiempo pasado</small>
                    <input type="text" name="txtPastTense" id="idPastTense" class="form-control" placeholder="PAST TENSE" require pattern="[A-Za-z]+">
                </div>
                <div class="form-group">
                    <small id="helpId" class="text-muted">Inserte el verbo en tiempo pasado participio</small>
                    <input type="text" name="txtPastParticipe" id="idPastParticipe" class="form-control" placeholder="PAST PARTICIPE" require pattern="[A-Za-z]+">
                </div>
                <input id="btn-enviar" class="btn btn-success" type="submit" value="Evaluar">
                <input id="btn-rest" class="btn btn-warning" type="reset" value="Borrar!">
                
            </form>
            
        </div>
        <div class="col-sm-5">
            <P class="text-center mt-3 h4 text-danger "><?= $row["spanish"] ?></P>
            <div class="img-verbo">
                <img src="<?= base_url?>/img/<?= $row["spanish"] ?>.jpg" alt="Responsive image" id="idimagen">
                <p class="text-center mt-2"><a href="" class="btn btn-dark">Cambiar</a></p>
                
            </div>
        </div>

    </div>
</div>