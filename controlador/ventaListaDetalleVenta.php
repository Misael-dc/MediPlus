<?php
include_once("../modelo/Producto.php");
include_once('../modelo/Verificacion.php');
include_once('../modelo/DetalleVenta.php');
$verificar = new Verificacion();

$detalleVenta = new DetalleVenta();

$idCliente = $_SESSION['id_cliente'];
$respuesta = $detalleVenta->listar($idCliente);


include_once("../vista/ventaListaDetalleVenta.php");