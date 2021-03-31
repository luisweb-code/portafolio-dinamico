<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/estilos_arrays.css">
    <title>Listado Empleados</title>
</head>

<body>

    <header>
        <h2 class="centrado">Listado de clientes</h2>
    </header>


    <section>
        <?php 
            $clientes = array('c001','c002','c003','c004','c005','c006','c007','c008','c009','c0010',
            'c0011','c0012','c0013','c0014','c0015');
        
        
        ?>


        <table border="1">
            <thead>
                <tr>
                  <th>Empleados</th>
                </tr>
            </thead>

            <tr>
                <td>
                    <?php 
                        $i=0;
                        foreach ($clientes as $imagen) {
                          
                        
                    ?>
                        
                     <img src="./img/imgPersonal/<?= $imagen ?>.jpg" alt="empleados">

                    <?php 

                            if (($i % 4) == 0) 
                                echo '<br>';
                                $i++;
                                
                            
                    
                        }
                    ?>


                </td>               
            </tr>
        </table>
    </section>



    <footer>
        <h6 class="centrado">Ing. Luis Alfredo Carrasco Sánchez</h6>
    </footer>






</body>

</html>