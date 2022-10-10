<?php
    include_once('../modelo/Verificacion.php');
    session_start();
    $verificar = new Verificacion();
    $verificar->cerrarSession();

    echo "<script>
            location.href='login.php'
         </script>";
?>