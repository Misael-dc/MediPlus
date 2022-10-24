<?php
include("../modelo/Clasificacion.php");
include_once("../modelo/Verificacion.php");
$verificar = new Verificacion();

if (!$verificar->verificarUsuarioAdmin()) {
    echo "<script>
            location.href='ventaListaProducto.php'
        </script>";
}

if(isset($_POST['eliminar'])){
    $clasificacion=new Clasificacion($_POST['id'], "", "");
    $respuesta = $clasificacion->eliminar();
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

$clasificacion=new Clasificacion("","","");
$res = $clasificacion->listar();
include("../vista/clasificacionLista.php");
?>