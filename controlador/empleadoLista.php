<?php
    include("../modelo/Empleado.php");
    include_once("../modelo/Verificacion.php");
    $verificar = new Verificacion();

    $cli=new Empleado("", "", "", "", "", "", "", "", "", "", "", "");
    $res=$cli->listarEmpleado();
    include("../vista/empleadoLista.php"); 
?>