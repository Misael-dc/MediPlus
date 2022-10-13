
<?php
include_once("../modelo/Producto.php");
include_once("../modelo/Verificacion.php");
$producto = new Producto("","","","","","","","","","","","","","","");

$verificar = new Verificacion();


$palabra = '';
if (isset($_POST['buscar'])) $palabra = $_POST['palabra']; 


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


$respuesta = $producto->listar($palabra);


include("../vista/ventaListaProducto.php");

?>