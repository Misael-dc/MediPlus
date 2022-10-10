<?php
$cod = $_GET['cod'];
include("../modelo/Cargo.php");
include_once("../modelo/Verificacion.php");
$verificar = new Verificacion();

$cargo = new Cargo($cod, "");

$res = $cargo->listarCargoId();

$reg = mysqli_fetch_array($res);

if (isset($_POST['modificar'])) {
    # code...
    $cargo = new Cargo($cod, $_POST['cargo']);
    $r = $cargo->editarCargo();
    if($r){
        echo "<script type='text/javascript'>
            alert('Se modifico correctamente');
            location.href='cargoLista.php'
        </script>";
    }else{
        echo "<script type='text/javascript'>
             alert('No se modifico');
        </script>";
    }
}else{
    include("../vista/cargoModifica.php");
}
?>