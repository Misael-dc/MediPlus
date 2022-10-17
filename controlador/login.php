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
    include_once("../modelo/LoginCliente.php");
    $login = new LoginCliente();
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
        $_SESSION['id_cliente'] = $datosUsuario['id_cliente'];
        $_SESSION['usuario'] = $datosUsuario['usuario'];
        $_SESSION['nombre_completo'] = $datosUsuario['nombre_completo'];
        $nombreU = "Hola! ".$datosUsuario['nombre'];
        $_SESSION['tipo_usuario'] = 'cliente';

        $_SESSION['mensaje_info'] = array('mensaje' => 'Bienvenido a Mediplus+++', 'titulo' => $nombreU, 'tipo' => 'info');

        echo 
            "  
            <script>
                location.href='ventaListaProducto.php'
            </script>
            ";
    }else {
        echo "<script> 
                alert('Datos Incorrectos...'); 
            </script>";
    }

}
include_once("../vista/login.php");