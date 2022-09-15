<?php
include_once("../modelo/Producto.php");
include_once("../modelo/Proveedor.php");
$proveedor = new Proveedor("","","","","","","","");
$datosProveedor = $proveedor->listar("");

$producto = new Producto("","","","","","","","","");
$datosClasificacion = $producto->listaClasificacion();


if(isset($_POST['registrar'])){

    $idClasificacion = $_POST['idClasificacion'];
    $idProveedor = $_POST['idProveedor'];
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $costoCompra = $_POST['costoCompra'];
    $costoVenta = $_POST['costoVenta'];
    $stock = $_POST['stock'];

    var_dump($_FILES);


    if ($_FILES['imagen']['name'] != null) {
        $ruta = "../imagenes_subidas/";
        $imagenNombre = $_FILES['imagen']['name'];
        $tmpImagen = $_FILES['imagen']['tmp_name'];
        
        $producto = new Producto("", $idClasificacion, $idProveedor, $nombre, $descripcion, $costoCompra, $costoVenta, $stock, $imagenNombre);
        $res = $producto->registrar();
    }else{
        echo "
        <script type='text/javascript'>
            alert('Llene todos los campos...');
            
        </script>";
    }

   
    if($res){
        move_uploaded_file($tmpImagen, $ruta.$imagenNombre);
        ?>
        <script type="text/javascript">
            alert("Registrado...");
            location.href = 'productoListar.php';
        </script>
        <?php
    }else{
        ?>
        <script type="text/javascript">
            alert("No Registrado");
        </script>
        <?php
    }
}else

include_once("../vista/productoRegistrar.php");


?>