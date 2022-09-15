<?php
    include("../modelo/Empleado.php");
    $cli=new Empleado("", "", "", "", "", "", "", "", "", "", "", "");
    $res=$cli->listarEmpleado();
    include("../vista/empleadoLista.php"); 
?>