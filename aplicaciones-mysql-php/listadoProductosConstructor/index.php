<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/miEstilo.css">
    <title>Listado de Productos</title>
</head>
<body>

    <header>
        <img src="./img/logoPasteles.jpg" alt="logoPasteles">
        <h2>listado productos</h2>
        <h5>usando método contructor</h5>
    </header>


    <section class="main">
            <table border="1">
               <thead>
                    <tr>
                        <th>codigo</th>
                        <th>descripción</th>
                        <th>precio</th>
                        <th>stock</th>
                        <th>fecha venc.</th>
                    </tr>
               </thead>
               <tbody>
                   <tr>
                       <td>112</td>
                       <td>Lorem, ipsum.</td>
                       <td>$12</td>
                       <td>1</td>
                       <td>12-02-2020</td>
                   </tr>
                   
               </tbody>

            </table>



    </section>


    <footer>
        <h5>Todos los derechos reservados &copy <?= date('Y-M-D') ?></h5>
    </footer>


    
</body>
</html>