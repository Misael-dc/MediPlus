<?php
    session_start();
    $id = $_POST['idProducto'];
    $lista = $_SESSION['carrito'];
    foreach($lista as $key => $value){
        if ($id == $value['id']) {
            $_SESSION['nroProductos'] -= $value['cantidad'];
            unset($lista[$key]);
            $_SESSION['carrito'] = $lista;
            break;
        }
    }
    header('location: ventaCarrito.php');
?>