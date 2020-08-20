<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/estilos_arrays.css">
    <title>Listado clientes</title>
</head>

<body>
    <header>
        <h2 class="centrado">LISTADO DE CLIENTES - IMÁGENES</h2>
    </header>

    <section>
        <?php
        require('./18_listado_empleado_nombre.php');
        error_reporting(0);
        //Arreglo de clientes
        $clientes = array('c001' => 'Valeria López',
        'c002' => 'Carolina Rodriguez',
        'c003' => 'Jessica Carrasco',
        'c004' => 'Carlos Rojas',
        'c005' => 'Manuel Fernandéz',
        'c006' => 'Ricardo Ríos',
        'c007' => 'Lizbeth Gutierrez',
        'c008' => 'Antonio Garcia',
        'c009' => 'Martin López',
        'c0010' => 'Luis Pastelin',
        'c0011' => 'Cesar Armas',
        'c0012' => 'Fiorella Antonela',
        'c0013' => 'Natalia Nolazco',
        'c0014' => 'Maria Flores',
        'c0015' => 'Emmanuel Nüer'
                        
                            );

        //Determinar si hay páginas que mostrar
        if (isset($_GET[pagina])) 
            $pagina = $_GET[pagina];
        else
            $pagina = 1;
        

        //Invocar a la función de paginacion
        paginar($clientes, 3, $pagina);
        
        
        
        ?>

    </section>



    <footer>
        <h6 class="centrado">Ing. Luis Alfredo Carrasco Sánchez</h6>
    </footer>

</body>

</html>