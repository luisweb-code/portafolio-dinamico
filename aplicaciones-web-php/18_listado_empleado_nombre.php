<?php

//Implementación de la funcion paginación
function paginar($misClientes, $total, $pagina){
        //Determinar el total de paginas que genera
        //la cantidad total de productos
        $paginas = ceil(count($misClientes) / $total);

        //Configuración el inicio de la paginación
        $inicio = ($pagina-1) * $total;

        //Configuración la finalización de la paginación
        $final = $pagina * $total;

        //Listado los productos en una tabla
        echo '<table border="1">';
        echo '<tr>';

        //Obtener los N registros
        $paginado = array_slice($misClientes, $inicio, $final);

        echo"<tr><th>NOMBRE DEL CLIENTE</th>";
        echo "<th>FOTO</th></tr>";


        //Listado de clientes y sus imagenes
        for ($i=$inicio; $i < $final; $i++) { 
            list($codigo, $nombre) = each($paginado);
            if (isset($misClientes[$codigo])) {
                echo "<tr><td>$nombre</td>";
                echo '<td><img src="./img/imgPersonal/'.$codigo.'.jpg"</td></tr>';
            }else{
                break;
            }
        }
        echo '</tr>';

        //Mostrando las paginas
        echo '<tr><td colspan="2" class="centrado">';
        if($pagina > 1)
            echo "<a href=\"18_arrays_listado_empleado_nombre.php?pagina=".($pagina-1)."\">
            Pagina Anterior</a>&nbsp";

            for ($i=1; $i < $paginas; $i++) { 
                if ($i == $pagina) 
                    echo "<strong>$i</strong>&nbsp;";
                else
                    echo "<a href=\"18_arrays_listado_empleado_nombre.php?pagina=$i\">$i</a>&nbsp;&nbsp";
                
            }

            if($pagina < $paginas)
                echo "<a href=\"18_arrays_listado_empleado_nombre.php?pagina=".($pagina+1)."\">Pagina siguiente</a>";

            
            echo '<td></tr>';
            echo '</table>';
            return;
}







