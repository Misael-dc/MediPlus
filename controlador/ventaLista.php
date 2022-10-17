<?php
include_once('../modelo/Verificacion.php');
include_once('../modelo/Venta.php');
$verificar = new Verificacion();

$venta = new Venta();

$respuesta = $venta->listar("");


include_once("../vista/ventaLista.php");

?>