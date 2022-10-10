<?php
include_once("../modelo/Cliente.php");
include_once("../modelo/Verificacion.php");
$verificar = new Verificacion();

if (isset($_POST['registrar'])) {
    $razon = $_POST['razon'];
    $nit = $_POST['nit'];

    $cliente = new Cliente("", $razon, $nit,"","","");
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
