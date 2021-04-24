<div class="container">

<h3 class="text-center mt-4 mb-4">Lista de verbos Regulares</h3>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Present Tense</th>
                <th>Past Tense</th>
                <th>Past Participe</th>
                <th>Spanish</th>
            </tr>
        </thead>
        <tbody>
        <?php while($filaList =  $resLista->fetch_assoc()):?>
            <tr>
               <td><?= $filaList["prensent_tense"]?></td>
               <td><?= $filaList["past_tense"]?></td>
               <td><?= $filaList["past_participe"]?></td>
               <td><?= $filaList["spanish"]?></td>             
            </tr>
        <?php endwhile;?>
          
        </tbody>
    </table>







</div>