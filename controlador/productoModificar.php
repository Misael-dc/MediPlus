<?php
include_once("../modelo/Producto.php");
include_once("../modelo/Proveedor.php");
include_once("../modelo/Verificacion.php");
$verificar = new Verificacion();


$proveedor = new Proveedor("","","","","","","","");
$listaProveedor = $proveedor->listar("");

$producto = new Producto("","","","","","","","","","","","","","","");
$listaClasificacion = $producto->listaClasificacion();


if(isset($_POST['modificar'])){
    $id = $_POST['id'];
    $idClasificacion = $_POST['idClasificacion'];
    $idProveedor = $_POST['idProveedor'];
    $nombre = $_POST['nombre'];
    $forma = $_POST['forma'];
    $peso =$_POST['peso'].' '.$_POST['pesoS'];
    $descripcion = $_POST['descripcion'];
    $laboratorio = $_POST['lab'];
    $costoCompra = $_POST['costoCompra'];
    $costoVenta = $_POST['costoVenta'];
    $stock = $_POST['stock'];
    $fechaVencimiento = $_POST['fechaV'];
    $unidad = $_POST['unidadV'];
    $envase = $_POST['envase'];


    if ($_FILES['imagen']['name'] != null) {
        $ruta = "../imagenes_subidas/";
        $imagenNombre = $_FILES['imagen']['name'];
        $tmpImagen = $_FILES['imagen']['tmp_name'];
        
        $producto = new Producto($id, $idClasificacion, $idProveedor, $nombre,$forma, $peso,$descripcion, $laboratorio, $costoCompra, $costoVenta, $stock, $fechaVencimiento, $unidad, $envase, $imagenNombre);
        $res = $producto->modificar();
        move_uploaded_file($tmpImagen, $ruta.$imagenNombre);
    }else{
        $producto = new Producto($id, $idClasificacion, $idProveedor, $nombre,$forma, $peso,$descripcion, $laboratorio, $costoCompra, $costoVenta, $stock, $fechaVencimiento, $unidad, $envase, "");
        $res = $producto->modificar();
        
    }

   
    if($res){
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