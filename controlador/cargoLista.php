<?php
include("../modelo/Cargo.php");
$cli=new Cargo("","");
$res=$cli->listarCargo();
include("../vista/cargoLista.php");
?>