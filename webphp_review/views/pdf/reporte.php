<?php 
 
require_once '../../model/clientes.php'; 
require_once '../../assets/fpdf.php';
require_once '../../config/db.php';

//Configurando el PDF
$pdf = new FPDF('p');
$pdf->AddPage();

//Textos en el PDF
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(200, 10, "LISTADO CLIENTES", 0, 1, "C");
$pdf->Cell(10, 3, "", 0, 1);

//Definicion de la cabecera
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(60, 10, utf8_decode("Fecha de impresión:") . date("d/m/Y"), 0, 1);
$pdf->Cell(60, 10, "CODIGO          CLIENTE                                                DIRECCION                    TELEFONO            DISTRITO                        CORREO", 0, 1);

//Impresion de los registros de la tabla clientes
$pdf->SetFont('Arial', '', 8);

$clientes = new Clientes();
$res = $clientes->listar();

while ($fila = $res->fetch_assoc()) {
    $id = $fila["id_cliente"];
    $nombres = $fila["nombres"];
    $direccion = $fila["direccion"];
    $telefono = $fila["fono"];
    $distro = $fila["id_distrito"];
    $correo = $fila["email"];

    $pdf->Cell(15, 8, $id);
    $pdf->Cell(50, 8, $nombres);
    $pdf->Cell(40, 8, $direccion);
    $pdf->Cell(20, 8, $telefono);
    $pdf->Cell(30, 8, $distro);
    $pdf->Cell(50, 8, $correo);

    //Cambio de linea
    $pdf->Cell(50, 8, '', 0, 1);
}

$pdf->Cell(50, 9, '', 0, 1);

//Envio del documento
$pdf->Output('reporte.pdf', "i"); 
?>

