<?php
$cod = $_GET['id'];
include("../modelo/Clasificacion.php");
include_once("../modelo/Verificacion.php");
$verificar = new Verificacion();

$clasificacion = new Clasificacion($cod, "", "");

$res = $clasificacion->listarId();

$reg = mysqli_fetch_array($res);

if (isset($_POST['modificar'])) {
    # code...
    $clasificacion = new Clasificacion($cod, $_POST['nombre'], $_POST['descripcion']);
    $r = $clasificacion->modificar();
    if($r){
        echo "<script type='text/javascript'>
            alert('Se modifico correctamente');
            location.href='clasificacionLista.php'
        </script>";
    }else{
        echo "<script type='text/javascript'>
             alert('No se modifico');
        </script>";
    }
}else{
    include("../vista/clasificacionModificar.php");
}
?>