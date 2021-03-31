<?php 
    include_once('./class/Producto.php');
    //Asosiamos  el formulario a la clase producto
    if(isset($_POST['btnProcesar'])){
        $producto = new Producto(); 
        $producto->setDescripcion($_POST['selProducto']);
        $producto->setCantidad($_POST['txtCantidad']);   
    }

    //Funcion que manteien el valor del producto seleccionado en el cuadro
    function productoxDefecto($producto){
        if($producto == 'videograbadora') $selV='SELECTED'; else $selV='';
        if($producto == 'camara') $selC='SELECTED'; else $selC='';
        if($producto == 'televisor') $selT='SELECTED'; else $selT='';
        if($producto == 'radiograbadora') $selR='SELECTED'; else $selR='';
        return array($selV,$selC,$selT,$selR,);
    }


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/miEstilo.css">
    <title>Venta de productos</title>
</head>

<body>
   
<?php require_once('./includes/header.php');?>

    <section class="main">

        <form action="index.php" method="POST">
            <table>
                <tr>
                    <th>producto</th>
                    <?php 
                        if(isset($_POST['btnProcesar']))
                        list($videograbadora, $camara, $televisor, $radiograbadora) = productoxDefecto($_POST['selProducto']);
                    ?>
                    <td>
                        <select name="selProducto">
                            <option value="videograbadora" 
                                <?php if(isset($_POST['btnProcesar']))
                                  echo $videograbadora; ?>>Videograbadora
                            </option>
                            <option value="camara" 
                                <?php if(isset($_POST['btnProcesar']))
                                  echo $camara; ?>>Camara
                            </option>
                            <option value="televisor" 
                                <?php if(isset($_POST['btnProcesar']))
                                  echo $televisor; ?>>Televisor
                            </option>
                            <option value="radiograbadora" 
                                <?php if(isset($_POST['btnProcesar']))
                                  echo $radiograbadora; ?>>Radiograbadora
                            </option>
                            
                        </select>

                    </td>
                </tr>
                <tr>
                    <th>cantidad</th>
                    <td>
                        <input type="text" name="txtCantidad" value="<?php if(isset($_POST['btnProcesar'])) echo $_POST['txtCantidad'];  ?>">
                        <input type="submit"   name="btnProcesar" value="PROCESAR">

                    </td>
                    <td rowspan="4">
                        <img src="./img/shopping-cart.png" alt="carritoCompras" class="carrito">

                    </td>
                </tr>              
                <tr>
                    <th>subtotal</th>
                    <td>                      
                        <?php if(isset($_POST['btnProcesar'])) echo("$ ".number_format($producto->calculaSubtotal(), '2')) ?>
                    </td>
                </tr>              
                <tr>
                    <th>decuento</th>
                    <td>                      
                        <?php if(isset($_POST['btnProcesar'])) echo("$ ".number_format($producto->calculaDescuento(), '2')) ?>
                    </td>
                </tr>              
                <tr>
                    <th>neto a pagar</th>
                    <td>                      
                        <?php if(isset($_POST['btnProcesar'])) echo("$ ".number_format($producto->calculaNeto(), '2')) ?>
                    </td>
                </tr>              


            </table>
        </form>




    </section>



   <?php require_once('./includes/footer.php'); ?>



</body>

</html>