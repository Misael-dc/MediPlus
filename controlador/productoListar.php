<?php
include_once("../modelo/Producto.php");
include_once("../modelo/Verificacion.php");
$verificar = new Verificacion();
$producto = new Producto("","","","","","","","","","","","","","","");

if(isset($_POST['eliminar'])){
    $producto->setIdProducto($_POST['id']);
    $respuesta = $producto->eliminar();
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

$listaProductos = $producto->listar("");


include_once("../vista/productoListar.php");