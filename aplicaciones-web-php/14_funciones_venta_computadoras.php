<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/estilos_funciones.css">
    <title>Piezas de Computadora</title>
</head>
<body>


  <?php   require('./14_venta_pieza_computadoras.php'); ?>

    <header>
        <h2 class="centrado"> venta de productos </h2>
        <h4 class="centrado">piezas de computadoras</h4>
        <img src="./img/ventas.jpg" alt="ventaComputadoras">
    </header>

    <form action="14_funciones_venta_computadoras.php" method="POST">
        <table>
          <tr>
            <td width="200"></td>
            <td width="200"></td>
            <td width="150">N° Venta</td>
            <td width="50"><?= generarCodigo(); ?></td>
          </tr>

          <tr>
            <td></td>
            <td></td>
            <td>Fecha: </td>
            <td><?= muestraFecha(); ?></td>
          </tr>

          <tr>
            <td></td>
            <td></td>
            <td>Hora: </td>
            <td><?= muestraHora(); ?></td>
          
          </tr>

          <tr>
            <tr>
                <td>Producto</td>
                <?php 
                    list($teclado, $mouse, $impresora, $disco, $lectora)=productoxDefecto(getProducto());  
                    //var_dump($teclado, $mouse, $impresora, $disco, $lectora);              
                ?>
                <td colspan="3">
                  <select name="selProducto">
                     <option value="teclado" <?=$teclado?> >Teclado multimedia</option>
                     <option value="mouse" <?=$mouse?> >Mouse optico</option>
                     <option value="impresora" <?=$impresora?> >Impresora Laser</option>
                     <option value="discoDuro" <?=$disco?> >Disco Duro</option>
                     <option value="lectoraDVD" <?=$lectora?> >Lectora DVD</option>
                  </select>               
                </td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Cantidad</td>
                <td><input type="text" name="txtCantidad" size="10" value="<?= getCantidad(); ?>"></td>
                <td>Precio:</td>
                <td id="codigo"><?= "$". number_format(asignaPrecio(getProducto()), 2);?></td>
            
            
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="PROCESAR"></td>
            </tr>
          
          </tr>
        </table>

    <?php if(!empty($_POST['txtCantidad'])) { ?>
    <!-- tabla de impresion de resultados -->
    <table>

        <tr>
            <td width="200">NUMERO: </td>      
            <td width="200"><?= generarCodigo(); ?></td>      
            <td width="200"></td>      
            <td width="200"></td>
            <td>FECHA: </td>
            <td><?= muestraFecha(); ?></td>
            <td>HORA: </td>
            <td><?= muestraHora(); ?></td>      
        
        
        </tr>
        <tr>
          <td>PRODUCTO</td>
          <td colspan="3"><?=getProducto();?></td>
          <td></td>
          <td></td>
        </tr>

        <tr>
            <td>CANTIDAD: </td>
            <td><?= getCantidad(); ?></td>
            <td>PRECIO: </td>
            <td><?= "$". number_format(asignaPrecio(getProducto()), 2); ?></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
        </tr>
    
    </table>
    
    <table class="tabla-subtotal">
        <tr>
            <td width="200" >SUBTOTAL</td>
            <td width="200">
                <?php 
                    $subtotal= calculaSubtotal(asignaPrecio(getProducto()),getCantidad());
                    echo '$'.number_format($subtotal, '2','.','');
                ?>            
            </td>
            <td width="200"></td>
            <td width="200"></td>
        </tr>
        <tr>
            <td>DESCUENTO</td>
            <td>
                <?php
                  $descuento = calculaDescuento($subtotal);
                  echo "$". number_format($descuento, '2', '.','');
                ?>
            </td>
            <td>NETO A PAGAR </td>
            <td id="codigo">
               <?php  
                    $neto = calculaNeto($subtotal, $descuento);
                    echo '$'. number_format($neto, '2', '.','');
               ?>
            </td>


        </tr>
    </table>
    <?php 
      }else{
  echo"<script>
     alert('Error en la cantidad!!');
  </script>";

      }

    ?>

    </form>
    




    <footer>
        <h6 class="centrado">Ing. Luis Alfredo Carrasco Sánchez</h6>
    </footer>
    
</body>
</html>