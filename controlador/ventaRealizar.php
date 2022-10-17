<?php
require_once('../modelo/conexion.php');
require_once('../modelo/Verificacion.php');

$verificar = new Verificacion();

$tipoUsuario = $verificar->verificarInicio();
if ( $tipoUsuario == 'No Inicio') {
    echo "<script>
            alert('Necesitas iniciar sesion')
           location.href='login.php'
         </script>";
}

$idEmpleado = 1;
if (isset($_SESSION['id_empleado'])) {
    $idEmpleado = $_SESSION['id_empleado'];
}

$idCliente = $_POST['idCliente'];
$fecha = date('Y/m/d');

$carrito = $_SESSION['carrito'];
$db = new Conexion();


$consultaV = "INSERT INTO venta(id_empleado, id_cliente, fecha) VALUES ('$idEmpleado', '$idCliente', '$fecha')";
$respuesta = $db->query($consultaV);

if ($respuesta) {
    $respuestaDv = false;
    foreach ($carrito as $value) {
        $idProducto = $value['id'];
        $cantidad = $value['cantidad'];
        $costo = $value['subtotal'];
        $consultaDv = "INSERT INTO detalle_ventas
                        VALUES ((select max(id_venta) from venta), '$idProducto', '$cantidad', '$costo')";

        $respuestaDv = $db->query($consultaDv); 

        $consultaPr = "SELECT stock FROM producto WHERE id_producto = $idProducto";
        $respuestaPr = $db->query($consultaPr);

        $contentS = mysqli_fetch_array($respuestaPr);
        $stock = $contentS['stock'];

        $stock -= $cantidad;
        $consultaUpr = "UPDATE producto SET stock = '$stock' where id_producto = '$idProducto'";
        $respuestaUpr = $db->query($consultaUpr);

    }
    
    if ($respuestaDv) {
 
        unset($_SESSION['carrito']);
        unset($_SESSION['nroProductos']);
        
        echo "<script>
                alert('registrado con exito'); 
                location.href='ventaListaProducto.php'
            </script>";
    }
}

