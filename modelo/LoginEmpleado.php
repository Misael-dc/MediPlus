<?php
class LoginEmpleado{

    private $idUsuario;
    private $pasword;


	public function __construct(){

	}

    public function verificarUsuario($mail){
		include_once ("conexion.php");
		$db = new Conexion();
		$sql = $db->query("SELECT COUNT(*) as num FROM usuarios_empleados WHERE mail = '$mail'");
		return $sql;
	}

    public function verificarPassword($password){
		include_once ("conexion.php");
		$db = new Conexion();
        $password = md5($password);
		$sql = $db->query("SELECT COUNT(*) as num FROM usuarios_empleados WHERE password = '$password'");
		return $sql;
	}

	public function obtenerDatos($mail, $password){
		include_once ("conexion.php");
		$db = new Conexion();
        $password = md5($password);
		$sql = $db->query("SELECT ue.id_usuario, ue.id_empleado, ue.id_rol, ue.mail, ue.usuario, e.id_cargo, CONCAT(e.nombre, ' ', ' ', e.paterno, ' ',e.materno)as nombre_completo FROM usuarios_empleados ue
							INNER JOIN empleados e
							ON ue.id_empleado = e.id_empleado
							WHERE  mail = '$mail' AND password = '$password'");
		return $sql;
	}

    public function modificarContraseña(){
		include_once ("conexion.php");
		$db = new Conexion();
		$sql = $db->query("UPDATE usuarios SET pasword = '$this->pasword' WHERE id_usuario = $this->idUsuario");
		return $sql;
	}



}
?>