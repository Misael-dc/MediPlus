<?php
include("../modelo/usuarioClienteclase.php");
include_once("../modelo/Verificacion.php");
$verificar = new Verificacion();
$cli=new UsuarioCli("","","","","", "");
$res=$cli->listarUsClienteInactivo();
include("../vista/usuClientesListaInac.php");
?>