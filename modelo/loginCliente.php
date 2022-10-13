<?php
class LoginCliente{

    private $idUsuario;
    private $pasword;


	public function __construct(){

	}

    public function verificarUsuario($mail){
		include_once ("conexion.php");
		$db = new Conexion();
		$sql = $db->query("SELECT COUNT(*) as num FROM usuarios_clientes WHERE mail = '$mail'");
		return $sql;
	}

    public function verificarPassword($password){
		include_once ("conexion.php");
		$db = new Conexion();
        $password = md5($password);
		$sql = $db->query("SELECT COUNT(*) as num FROM usuarios_clientes WHERE password = '$password'");
		return $sql;
	}

	public function obtenerDatos($mail, $password){
		include_once ("conexion.php");
		$db = new Conexion();
        $password = md5($password);
		$sql = $db->query("SELECT uc.id_usuario, uc.id_cliente, uc.mail, uc.usuario, CONCAT(c.nombre, ' ', ' ', c.paterno, ' ',c.materno) as nombre_completo FROM usuarios_clientes uc
							INNER JOIN clientes c
							ON uc.id_cliente = c.id_cliente
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