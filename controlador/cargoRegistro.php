<?php
include_once("../modelo/Verificacion.php");
$verificar = new Verificacion();
include("../vista/cargoRegistro.php");

if(isset($_POST['registrarCargo'])){

    $ni=$_POST['cargo'];
    include("../modelo/Cargo.php");
    $cli=new Cargo("",$ni);
    $r=$cli->grabarCargo();
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
?>