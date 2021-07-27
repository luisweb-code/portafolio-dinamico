<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Simple Sidebar - Start Bootstrap Template</title>
    <!-- Core theme CSS (includes Bootstrap)-->
    <link rel="stylesheet"  href="<?=base_url?>css/styles.css"/>
    <link rel="stylesheet"  href="<?=base_url?>css/bootstrap.min.css"/>
    <link rel="stylesheet"  href="<?=base_url?>css/calendar-win2k-1.css"/>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar-->
        <div class="border-end bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading border-bottom bg-primary p-2">                
                <a class="list-group-item list-group-item-action active text-center fs-5 p-1" aria-current="true" href="<?= base_url ?>main/index">Topicos</a>                              
            </div>
            <div class="list-group list-group-flush">
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="<?=base_url?>secuencial/cambio">Casa Cambio</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="<?=base_url?>boletos/compra">Boletos Teatro</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="<?=base_url?>listado/index">Listado Clientes</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="<?=base_url?>listado/distro">Buscar Clientes</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="<?=base_url?>registro/index">Registro Clientes</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="<?=base_url?>eliminar/usuario">Eliminar Clientes</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="<?=base_url?>producto/index">Ver productos</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="<?=base_url?>producto/actualizar">Actualizar Producto</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="<?=base_url?>producto/registro">Registro Producto</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="<?=base_url?>reportes/descargar">Reporte PDF</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="<?=base_url?>api/items">API</a>
                
                
            </div>
        </div>
        <!-- Page content wrapper-->
        <div id="page-content-wrapper">
            <!-- Top navigation-->
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <div class="container-fluid">
                    <button class="btn btn-primary" id="sidebarToggle">Toggle Menu</button>
                </div>
            </nav>
            <!-- Page content-->
            <div class="container-fluid">