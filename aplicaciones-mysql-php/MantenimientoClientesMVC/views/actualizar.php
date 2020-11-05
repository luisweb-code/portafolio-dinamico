<?php 
error_reporting(0);
require_once('../controllers/con_cliente.php');
require_once('../include/helpers.php');
require_once('../controllers/con_cliente.php');

$res_listado = listadoDistro();

if(isset($_POST['action']) && $_POST['action'] == 'BUSCAR'){
    $conCliente = new con_cliente();
    $codCliente = $conCliente->buscarCliente();    
    
}elseif (isset($_POST['action']) && $_POST['action'] == 'ACTUALIZAR') {
    $conCliente = new con_cliente();
    $codCliente = $conCliente->actualizarCliente();
} 


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/miEstilo.css">
    <title>Actualizar cliente</title>

</head>

<body>

    <?php require_once('../views/encabezado.php'); ?>


    <section>

        <h3>Actualizar cliente</h3>
        <form action="actualizar.php" method="post">
            <table>
                <tr>
                    <td>
                        CODIGO
                        <input type="text" name="txtCodigo" value='<?= $codCliente[0] ?>'>
                        <input type="submit" name="action" value="BUSCAR">
                       
                    </td>
                </tr>
            </table>
        <table>
               
                <tr>
                    <td>
                        NOMBRES:

                    </td>    
                    <td>
                        <input type="text" name="txtNombres" value="<?= $codCliente[1] ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        APELLIDO PATERNO:
                    </td>    
                    
                    <td>
                        <input type="text" name="txtPaterno" value="<?= $codCliente[2] ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        APELLIDO METERNO:
                    </td>    
                    
                    <td>
                        <input type="text" name="txtMaterno" value="<?= $codCliente[3] ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        DIRECCIÓN:
                    </td>    
                    
                    <td>
                        <input type="text" name="txtDireccion" value="<?= $codCliente[4] ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        TELÉFONO:
                    </td>    
                    
                    <td>
                        <input type="text" name="txtTelefono" value="<?= $codCliente[5] ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        DISTRITO:
                    </td>    
                    
                    <td>
                        <select name="selDistro">

                            <?php while ($dis = mysqli_fetch_array($res_listado, MYSQLI_ASSOC)):?>
                                <?php 
                                    if($codCliente[6] == $dis['id_distro'])
                                        $seleccionado = 'selected';
                                        else
                                        $seleccionado = '';

                                ?>
                                   
                                    
                                <option value="<?= $dis['id_distro'] ?>" <?= $seleccionado ?> ><?= $dis['descripcion'] ?></option>
                            <?php endwhile;?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        EMAIL:
                    </td>    
                    
                    <td>
                        <input type="text" name="txtEmail" value="<?= $codCliente[7] ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="action" value="ACTUALIZAR">
                    </td>
                </tr>
              
    
            </table>
        </form>
    </section>


    <?php require_once('../views/pie.php');?>

</body>

</html>