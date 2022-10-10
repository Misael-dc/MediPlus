<?php
include_once("../modelo/Cliente.php");
include_once("../modelo/UsuarioCliente.php");
include_once("../modelo/Verificacion.php");
$verificar = new Verificacion();


if (isset($_POST['registrar'])) {
    $usuario = $_POST['usuario'];
    $correo = $_POST['correo'];
    $password = $_POST['password'];

    $nombre = $_POST['nombre'];
    $paterno = $_POST['paterno'];
    $materno = $_POST['materno'];
    $ciudad = $_POST['ciudad'];
    $cedula = $_POST['cedula'];

    $cliente = new Cliente('', $nombre, $paterno, $materno, $ciudad, $cedula);
    $respuesta = $cliente->registrar();

    $usuarioCliente = new UsuarioCliente("", $usuario, $correo, $password);
    $respuesta2 = $usuarioCliente->registrar();

    if ($respuesta && $respuesta2) {
        echo "<script>  
            alert('Registro Exitoso...')
            location.href='login.php'
            </script>";
    }else {
        echo "<script> 
                alert('No se ha Registrado...'); 
            </script>";
    }
}


include_once("../vista/clienteUsuarioRegistrar.php");
