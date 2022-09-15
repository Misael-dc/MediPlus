<?php
include_once("../modelo/Producto.php");
include_once("../modelo/Proveedor.php");


$proveedor = new Proveedor("","","","","","","","");
$listaProveedor = $proveedor->listar("");

$producto = new Producto("","","","","","","","","");
$listaClasificacion = $producto->listaClasificacion();


if(isset($_POST['modificar'])){
    $id = $_POST['id'];
    $idClasificacion = $_POST['idClasificacion'];
    $idProveedor = $_POST['idProveedor'];
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $costoCompra = $_POST['costoCompra'];
    $costoVenta = $_POST['costoVenta'];
    $stock = $_POST['stock'];


    if ($_FILES['imagen']['name'] != null) {
        $ruta = "../imagenes_subidas/";
        $imagenNombre = $_FILES['imagen']['name'];
        $tmpImagen = $_FILES['imagen']['tmp_name'];
        
        $producto = new Producto($id, $idClasificacion, $idProveedor, $nombre, $descripcion, $costoCompra, $costoVenta, $stock, $imagenNombre);
        $res = $producto->modificar();
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
            alert("Modificado...");
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
}else{
    $id = $_GET['id'];
    $producto->setIdProducto($id);
    
    $resultado = $producto->obtenerProducto();
    $datoProducto = mysqli_fetch_array($resultado);
}

include_once("../vista/productoModificar.php");


?>