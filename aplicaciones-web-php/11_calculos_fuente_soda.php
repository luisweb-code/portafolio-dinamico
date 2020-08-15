<?php

//Asigancion de precios
$ensalda = 10;
$jugo = 13;
$helado = 7;
$sandwich = 25;

//Capturando el nombre del cliente
$cliente = $_POST['txtCliente'];


//Capturando las cantidades solicitadas por el usuario
$cantidadEns = $_POST['txtEnsalada'];
$cantidadJug = $_POST['txtJugo'];
$cantidadHel = $_POST['txtHelado'];
$cantidadSan = $_POST['txtSandwich'];


//Calculando los subtotales
$subtotalEns = $ensalda * $cantidadEns;
$subtotalJug = $jugo * $cantidadJug;
$subtotalHel = $helado * $cantidadHel;
$subtotalSan = $sandwich * $cantidadSan;

//Calculando el total
$total = $subtotalEns + $subtotalJug + $subtotalHel + $subtotalSan;


















