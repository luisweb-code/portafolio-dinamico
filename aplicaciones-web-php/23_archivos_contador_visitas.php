<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/estilos_archivos.css">
    <title>Contador Visitas</title>
</head>
<body>
    <?php 
        $visita = "./file/contador.txt";
        include('./23_cuenta_contador_visitas.php');
        
    
    ?>

    <header>
        <h2 class="centrado">Contador de visitas Básico</h2>
    </header>


    <footer class="centrado visitas">
        <h6>Ing. Luis Alfredo Carrasco Sánchez</h6>
        <h3> <?php contador($visita); ?></h3>
    </footer>

    
</body>
</html>