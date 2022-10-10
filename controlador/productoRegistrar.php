<?php
include_once("../modelo/Producto.php");
include_once("../modelo/Proveedor.php");
include_once("../modelo/Verificacion.php");
$verificar = new Verificacion();


$proveedor = new Proveedor("","","","","","","","");
$datosProveedor = $proveedor->listar("");

$producto = new Producto("","","","","","","","","","","","","","","");
$datosClasificacion = $producto->listaClasificacion();


if(isset($_POST['registrar'])){

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
        
        $producto = new Producto("", $idClasificacion, $idProveedor, $nombre, $forma, $peso,$descripcion, $laboratorio, $costoCompra, $costoVenta, $stock, $fechaVencimiento, $unidad, $envase, $imagenNombre);
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