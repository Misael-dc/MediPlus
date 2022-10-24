<?php
include_once("../modelo/Verificacion.php");
$verificar = new Verificacion();


if(isset($_POST['registrar'])){

    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];

    include("../modelo/Clasificacion.php");

    $clasificacion = new Clasificacion("",$nombre, $descripcion);
    $r = $clasificacion->registrar();
    if($r){
        ?>
        <script type="text/javascript">
            alert("Se registro correctamente");
        </script>
        <?php
    }else{
        ?>
        <script type="text/javascript">
            alert("No se registro");
        </script>
        <?php
    }
}

include("../vista/clasificacionRegistrar.php");
?>