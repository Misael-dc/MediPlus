<?php
    include("../modelo/proveedorClase.php");
    $prov=new Proveedor("", "", "", "", "", "");
    $r=$prov->listarProveedor();
    include("../vista/proveedorLista.php"); 
?>