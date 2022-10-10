<?php
include("../modelo/Cargo.php");
include_once("../modelo/Verificacion.php");
$verificar = new Verificacion();

$cli=new Cargo("","");
$res=$cli->listarCargo();
include("../vista/cargoLista.php");
?>