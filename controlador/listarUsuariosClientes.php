<?php
include("../modelo/usuarioClienteclase.php");
include_once("../modelo/Verificacion.php");
$verificar = new Verificacion();
$cli=new UsuarioCli("","","","","", "");
$res=$cli->listarUsCliente();
include("../vista/usuClientesLista.php");
?>