<?php
include_once("../modelo/Empleado.php");
include_once("../modelo/UsuarioEmpleado.php");
include_once("../modelo/Rol.php");
include_once("../modelo/Verificacion.php");
$verificar = new Verificacion();


if(isset($_POST['registrar'])){
    
    $idEmpleado = $_POST['id_empleado'];
    $idRol = $_POST['id_rol'];
    $usuario = $_POST['usuario'];
    $mail = $_POST['mail'];
    $password = $_POST['password'];


    $usuarioEmpleado = new UsuarioEmpleado( "", $idEmpleado, $idRol, $usuario, $mail, $password);
    $r = $usuarioEmpleado->registrar();
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
$rol = new Rol("","");
$resRol = $rol->listar();
$usuarioEmpleado2 = new UsuarioEmpleado( "", "", "", "", "", "");
$resEmpleado = $usuarioEmpleado2->listaEmpleadoSinUsuario();

include("../vista/usuarioEmpleadoRegistro.php");

?>