<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/estilos_arrays.css">
    <title>Listado Productos</title>
</head>
<body>


<?php  
    include('./19_header_listado_productos.php');
    include('./19_cuerpo_listado_productos.php');
?>

        <!-- Imprimir solo los resultados del array en la tabla -->
        <table>
            <thead>
                <tr>
                    <th>Descripción del Producto</th>
                    <th>Precio Unitario</th>
                </tr>
                    <?php
                        /* while(list($producto, $precio) = each($productos)): */
                              
                          foreach ($productos as $producto => $precio) :
                            
                          
                    ?>
                <tbody>
                    <tr>
                    
                        <td><?= $producto?></td>
                        <td><?= "S/.".number_format($precio,'2','.','')."<br>"?></td>
                        

                          <?php  /* endwhile; */ 
                                endforeach;
                          ?>
                    </tr>
                    
                </tbody>
            </thead>
        </table>





<?php

  include('./19_footer_listado_productos.php');
?>

    
</body>
</html>