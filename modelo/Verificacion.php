<?php
class Verificacion{


	public function __construct(){
        session_start();
	}

    public function verificarInicio(){

        if (isset($_SESSION['tipo_usuario'])) {
            if ($_SESSION['tipo_usuario'] == 'cliente') {
                return 'cliente';
            }elseif($_SESSION['tipo_usuario'] == 'empleado'){
                return 'empleado';
            }
        }else{
            return 'No Inicio';
        }
	}
    public function verificarUsuarioAdmin(){

        if (isset($_SESSION['id_rol'])) {
            if ($_SESSION['id_rol'] == 1) {
                return true;
            }
        }
        return false;
	}
    public function verificar(){

        if (isset($_SESSION['tipo_usuario'])) {
            if ($_SESSION['tipo_usuario'] == 'cliente') {
                return 'cliente';
            }elseif($_SESSION['tipo_usuario'] == 'empleado'){
                return 'empleado';
            }
        }else{
            return 'No Inicio';
        }
	}


    public function cerrarSession(){
        session_destroy();
    }
    // public function verificarEmpleado(){
    //     session_start();
    //     if ($_SESSION['empleado']) {
    //         return true;
    //     }else{
    //         return false;
    //     }
	// }



}
?>