<?php 
    require_once('../include/helpers.php');
    require_once('../controllers/con_cliente.php');
    $res_listado = listadoDistro();
    $res_generar = generarCodigo();
    $resgistro = new con_cliente();
    $resgistro->registrarCliente();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/miEstilo.css">
    <title>REGISTRO DE CLIENTES</title>
</head>
<body>

    <header>
        <?php require_once'../views/encabezado.php';?>
    </header>


    <section>
        <h2 id="centrado">Registro nuevos clientes</h2>
        <form action="registrar.php" method="POST">
            <table>
                <tr>
                    <td>
                        CODIGO:
                    </td>
                    <td>
                        <input type="text" name="txtCodigo" value="<?= $res_generar ?>">

                    </td>
                </tr>
                <tr>
                    <td>
                        NOMBRES:

                    </td>    
                    <td>
                        <input type="text" name="txtNombres">
                    </td>
                </tr>
                <tr>
                    <td>
                        APELLIDO PATERNO:
                    </td>    
                    
                    <td>
                        <input type="text" name="txtPaterno">
                    </td>
                </tr>
                <tr>
                    <td>
                        APELLIDO METERNO:
                    </td>    
                    
                    <td>
                        <input type="text" name="txtMaterno">
                    </td>
                </tr>
                <tr>
                    <td>
                        DIRECCIÓN:
                    </td>    
                    
                    <td>
                        <input type="text" name="txtDireccion">
                    </td>
                </tr>
                <tr>
                    <td>
                        TELÉFONO:
                    </td>    
                    
                    <td>
                        <input type="text" name="txtTelefono">
                    </td>
                </tr>
                <tr>
                    <td>
                        DISTRITO:
                    </td>    
                    
                    <td>
                        <select name="selDistro">
                            <?php while ($dis = mysqli_fetch_array($res_listado, MYSQLI_ASSOC)):?>
                                <option value="<?= $dis['id_distro'] ?>"><?= $dis['descripcion'] ?></option>
                            <?php endwhile;?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        EMAIL:
                    </td>    
                    
                    <td>
                        <input type="text" name="txtEmail">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="REGISTRAR">
                    </td>    
                    
                    <td>                   
                    </td>
                </tr>
    
            </table>
        </form>
        

    </section>


    <footer>
        <?php require_once'../views/pie.php'?>
    </footer>
    
</body>
</html>