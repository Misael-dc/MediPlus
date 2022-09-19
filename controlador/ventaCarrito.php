
<?php
include_once("../modelo/Producto.php");
include_once("../modelo/Cliente.php");
$producto = new Producto("","","","","","","","","");

$cliente = new Cliente("","","");

session_start();




if (isset($_POST['agregar'])) {          
    $lista = $_SESSION['carrito']; 
    $subtotal = $_POST['cantidad'] * $_POST['costoventa'];
    array_push($lista, ['id' => $_POST['id'], 'cantidad' => $_POST['cantidad'] , 'subtotal'=> $subtotal]);
    $_SESSION['carrito'] = $lista;
    $_SESSION['nroProductos'] += $_POST['cantidad'];
    unset($_POST['agregar']);
}




include("../vista/ventaCarrito.php");

?>