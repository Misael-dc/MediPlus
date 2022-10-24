<?php
include_once("../modelo/Producto.php");
include_once('../modelo/Verificacion.php');
include_once('../modelo/DetalleVenta.php');
$verificar = new Verificacion();

$detalleVenta = new DetalleVenta();

$idCliente='';



if (isset($_SESSION['id_cliente'])) {
    $idCliente = $_SESSION['id_cliente'];
    $respuesta = $detalleVenta->listar($idCliente);
}else{
    $idVenta = $_GET['id'];
    $respuesta = $detalleVenta->listaDetalleVenta($idVenta);
    $respuestaCli = $detalleVenta->datoCliente($idVenta);
    $datosCli = mysqli_fetch_array($respuestaCli);
}





include_once("../vista/ventaListaDetalleVenta.php");