<?php
$cod  = $_GET['cod'];
include("../modelo/Cargo.php");
$cargo = new Cargo($cod, "");
$res = $cargo->eliminarCargo();
if ($res) {
    ?>
    <script type="text/javascript">
        alert("Se elimino correctamente");
        location.href='../controlador/cargoLista.php';
    </script>
    <?php
}else{
    ?>
    <script type="text/javascript">
        alert("No se elimino");
    </script>
    <?php
}
?>