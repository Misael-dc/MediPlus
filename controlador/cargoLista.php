<?php
include("../modelo/Cargo.php");
include_once("../modelo/Verificacion.php");
$verificar = new Verificacion();

if (!$verificar->verificarUsuarioAdmin()) {
    echo "<script>
            location.href='ventaListaProducto.php'
        </script>";
}

$cli=new Cargo("","");
$res=$cli->listarCargo();
include("../vista/cargoLista.php");
?>