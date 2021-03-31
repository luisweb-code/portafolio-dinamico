<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/estilo_casa_cambio.css">
    <title>Casa de cambio</title>
</head>
<body>


<header>
    <h3 class="centrado">CASA DE CAMBIO</h3>
</header>

<section>
    <form action="01_secuencial_casa_cambio.php" method="get" name="frmMontos">
       <table border="1" cellpadding="0" cellspacing="0" class="tableInfo">
            <tr>
              <td whidth="200">Monto soles</td>
              <td whidth="200">
                  <input type="text" name="txtSoles">
              </td>
            </tr>
            <tr>
                <td>Monto dólares</td>
                <td><input type="text" name="txtDolares"></td>
            </tr>
            <tr>
                <td>Monto marcos</td>
                <td><input type="text" name="txtMarcos"></td>
            </tr>
            <tr>
              <td><input type="submit" value="Procesar"></td>
              <td><input type="reset" value="Limpiar"></td>
            </tr>
            <?php 
               error_reporting(0);
               $soles = $_GET['txtSoles'];
               $dolares = $_GET['txtDolares'];
               $marcos = $_GET['txtMarcos'];
               $euros = (($soles/3.51) +$dolares+($marcos/2.12)) * 1.09;
            
            
            ?>

            <tr>
              <td>
                Total de soles <br>
                Total dólares  <br>
                Total marcos   <br>
                Monto total en Euros
              </td>
              <td>
                <?php 
                  echo "S/.". number_format($soles, 2)."<br>";
                  echo "$ ". number_format($dolares, 2)."<br>";
                  echo number_format($marcos, 2)."DEM<br>";
                  echo number_format($euros, 2)." euros";
                
                
                ?>              
              </td>
            
            </tr>

       </table>    
    </form>
</section>

    <footer>
        <h5 class="centrado">Ing. Luis Alfredo Carrasco Sánchez</h5>
    </footer>

    
</body>
</html>