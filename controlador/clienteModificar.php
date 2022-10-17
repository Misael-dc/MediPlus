<?php
include_once("../modelo/Cliente.php");
include_once("../modelo/Verificacion.php");
$verificar = new Verificacion();

if (isset($_POST['modificar'])) {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $paterno = $_POST['paterno'];
    $materno = $_POST['materno'];
    $ciudad = $_POST['ciudad'];
    $cedula = $_POST['cedula'];

    $cliente = new Cliente($id, $nombre, $paterno, $materno, $ciudad, $cedula);
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
    $cliente = new Cliente($id,"", "","", "","");
    $resultado = $cliente->obtenerCliente();
    $datos = mysqli_fetch_array($resultado);
}


include_once("../vista/clienteModificar.php");