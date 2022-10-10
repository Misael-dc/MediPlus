<?php
include("../modelo/proveedorClase.php");
include_once("../modelo/Verificacion.php");
$verificar = new Verificacion();

$prov=new Proveedor("", "", "", "", "", "");
$r=$prov->listarProveedor();
include("../vista/proveedorLista.php"); 
?>