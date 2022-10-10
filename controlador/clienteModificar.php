<?php
include_once("../modelo/Cliente.php");
include_once("../modelo/Verificacion.php");
$verificar = new Verificacion();

if (isset($_POST['modificar'])) {
    $id = $_POST['id'];
    $razon = $_POST['razon'];
    $nit = $_POST['nit'];

    $cliente = new Cliente($id, $razon, $nit,"","","");
    $respuesta = $cliente->modificar();
    if ($respuesta) {
        echo "<script>  
            alert('Modificado Exitoso...')
            location.href='clienteListar.php'
            </script>";
    }else {
        echo "<script> 
                alert('No se ha Modificado...'); 
            </script>";
    }
}else{
    $id = $_GET['id'];
    $cliente = new Cliente($id, $razon, $nit,"","","");
    $resultado = $cliente->obtenerCliente();
    $datos = mysqli_fetch_array($resultado);
}


include_once("../vista/clienteModificar.php");