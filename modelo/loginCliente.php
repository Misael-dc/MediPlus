<?php
class loginCliente{

    private $idUsuario;
    private $pasword;


	public function __construct(){

	}

    public function verificarUsuario($mail){
		include_once ("conexion.php");
		$db = new Conexion();
		$sql = $db->query("SELECT * FROM usuarios_clientes WHERE mail = '$mail'");
		return $sql;
	}

    public function verificarPassword($password){
		include_once ("conexion.php");
		$db = new Conexion();
        $password = md5($password);
		$sql = $db->query("SELECT * FROM usuarios_clientes WHERE password = '$password'");
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