
<?php
include_once("../modelo/Producto.php");
$producto = new Producto("","","","","","","","","");

session_start();

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

if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = array();     
}
if(!isset($_SESSION['nroProductos'])){
    $_SESSION['nroProductos'] = 0;
}



if (isset($_POST['agregar'])) {          
    $lista = $_SESSION['carrito']; 
    $subtotal = $_POST['cantidad'] * $_POST['costoventa'];
    array_push($lista, ['id' => $_POST['id'], 'cantidad' => $_POST['cantidad'] , 'subtotal'=> $subtotal]);
    $_SESSION['carrito'] = $lista;
    $_SESSION['nroProductos'] += $_POST['cantidad'];
    unset($_POST['agregar']);
}


$respuesta = $producto->listar("");


include("../vista/ventaListaProducto.php");

?>