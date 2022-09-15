<?php
include_once("../modelo/Cargo.php");



if(isset($_POST['registrarEmpleado'])){
    
    $cedula = $_POST['cedula'];
    $nombre = $_POST['nombre'];
    $paterno = $_POST['paterno'];
    $materno = $_POST['materno'];
    $idCargo = $_POST['idCargo'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $fechanac = $_POST['fechanac'];
    $genero = $_POST['genero'];
    $aficiones = "";

    foreach($_POST['aficiones'] as $key => $value){
        if ($key == (count($_POST['aficiones']) - 1)) {
            $aficiones .= $value;
        }else{
            $aficiones = $aficiones.$value.', ';
        }
    }

    include_once("../modelo/Empleado.php");

    $emp = new Empleado("", $cedula, $nombre, $paterno, $materno, $idCargo, $direccion, 
                            $telefono, $fechanac, $genero, $aficiones);
    $r=$emp->grabarEmpleado();
    if($r){
        ?>
        <script type="text/javascript">
            alert("Se registro correctamente")
        </script>
        <?php
    }else{
        ?>
        <script type="text/javascript">
            alert("No Se Registro")
        </script>
        <?php
    }
}
$cargo = new Cargo("","");
$sql = $cargo->listarCargo();
include("../vista/empleadoRegistro.php");

?>