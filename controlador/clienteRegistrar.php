<?php
include_once("../modelo/Cliente.php");
include_once("../modelo/Verificacion.php");
$verificar = new Verificacion();

if (isset($_POST['registrar'])) {
    $nombre = $_POST['nombre'];
    $paterno = $_POST['paterno'];
    $materno = $_POST['materno'];
    $ciudad = $_POST['ciudad'];
    $cedula = $_POST['cedula'];

    $cliente = new Cliente("", $nombre, $paterno, $materno, $ciudad, $cedula);
    $respuesta = $cliente->registrar();
    if ($respuesta) {
        echo "<script>  
            alert('Registro Exitoso...')
            location.href='clienteListar.php'
            </script>";
    }else {
        echo "<script> 
                alert('No se ha Registrado...'); 
            </script>";
    }
}


include_once("../vista/clienteRegistrar.php");
