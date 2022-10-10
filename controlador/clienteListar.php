<?php
include_once("../modelo/Cliente.php");
include_once("../modelo/Verificacion.php");
$verificar = new Verificacion();
$cliente = new Cliente("","","","","","","");

if(isset($_POST['eliminar'])){
    $cliente = new Cliente($_POST['id'],"","","","","","");
    $respuesta = $cliente->eliminar();
    if ($respuesta) {
        echo "<script>  
            alert('Eliminado...')
            </script>";
    }else {
        echo "<script> 
                alert('No se ha Eliminado...'); 
            </script>";
    }
}

$listaClientes = $cliente->listar("");


include_once("../vista/clienteListar.php");
