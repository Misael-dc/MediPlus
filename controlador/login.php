<?php

if (isset($_POST["iniciarSesion"])) {
    include_once("../modelo/loginCliente.php");
    $sesion = new loginCliente();
    $correo = $_POST['correo'];
    $password = $_POST['password'];
    $s = $sesion->verificarUsuario($correo);
    $p = $sesion->verificarPassword($password);
    var_dump($s);
    var_dump($p);
    if ($s == true && $p == true) {
        echo "<script>  
            location.href='presentacion.php'
            </script>";
    }else {
        echo "<script> 
                alert('Datos Incorrectos...'); 
            </script>";
    }

}
include_once("../vista/login.php");