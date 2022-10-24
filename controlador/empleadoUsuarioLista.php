<?php
    include("../modelo/UsuarioEmpleado.php");
    include_once("../modelo/Verificacion.php");
    $verificar = new Verificacion();

    $uEmpleado=new UsuarioEmpleado("", "", "", "", "", "");
    $res = $uEmpleado->listar("");
    include("../vista/usuarioEmpleadoLista.php"); 
?>