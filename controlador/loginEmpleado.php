<?php
include_once('../modelo/Verificacion.php');

$verificar = new Verificacion();
$tipoUsuario = $verificar->verificarInicio();

if ( $tipoUsuario == 'cliente' || $tipoUsuario == 'empleado') {
    echo "<script>
            location.href='ventaListaProducto.php'
         </script>";
}


if (isset($_POST["iniciarSesion"])) {
    include_once("../modelo/LoginEmpleado.php");
    $login = new LoginEmpleado();
    $correo = $_POST['correo'];
    $password = $_POST['password'];
    $vcorreo = $login->verificarUsuario($correo);
    $vcontra = $login->verificarPassword($password);
    
    $vcorreo = mysqli_fetch_array($vcorreo);
    $vcontra = mysqli_fetch_array($vcontra);

    if (($vcorreo['num'] > 0) && ($vcontra['num'] > 0)) {
        echo "".$correo;
        $datos = $login->obtenerDatos($correo, $password);
        $datosUsuario = mysqli_fetch_array($datos);

        $_SESSION['id_usuario'] = $datosUsuario['id_usuario'];
        $_SESSION['id_empleado'] = $datosUsuario['id_empleado'];
        $_SESSION['usuario'] = $datosUsuario['usuario'];
        $_SESSION['nombre_completo'] = $datosUsuario['nombre_completo'];
        $_SESSION['id_rol'] = $datosUsuario['id_rol'];
        $_SESSION['tipo_usuario'] = 'empleado';


        echo "<script>
                location.href='ventaListaProducto.php'
            </script>";
    }else {
        echo "<script> 
                alert('Datos Incorrectos...'); 
            </script>";
    }

}
include_once("../vista/loginEmpleado.php");