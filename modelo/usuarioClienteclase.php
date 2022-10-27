<?php
class UsuarioCli{

    private $idUsuario;
    private $usuario;
    private $pasword;
    private $mail;
    private $cliente;
    private $estado;


	public function __construct($idUsuario, $us, $pas, $mail, $cli, $estado){
        $this->setIdUsuario($idUsuario);
        $this->setUsuario($us);
        $this->setPasword($pas);
        $this->setMail($mail);
        $this->setCliente($cli);
        $this->setEstado($estado);
	}

	public function setIdUsuario($idUsuario){
		$this->idUsuario = $idUsuario;
    }
    public function setUsuario($us){
        $this->usuario=$us;
    }
    public function setPasword($pas){
        $this->pasword=$pas;
    }

	public function setMail($mail){
		$this->mail = $mail;
    }

    public function setCliente($cli){
        $this->cliente=$cli;
    }

    public function setEstado($estado){
        $this->estado=$estado;
    }
    
    public function listarUsCliente()
    {
        include("conexion.php");
        $db=new Conexion();
        $sql=$db->query("SELECT c.nombre, uc.* FROM clientes c
                        INNER JOIN usuarios_clientes uc
                        ON c.id_cliente = uc.id_cliente
                        WHERE uc.estado= 1 ");
        return($sql);
    }

    public function listarUsClienteInactivo()
    {
        include("conexion.php");
        $db=new Conexion();
        $sql=$db->query("SELECT c.nombre, uc.* FROM clientes c
                        INNER JOIN usuarios_clientes uc
                        ON c.id_cliente = uc.id_cliente
                        WHERE uc.estado= 0");
        return($sql);
    }

	public function listarP($palabra){
		include_once ("conexion.php");
		$db = new Conexion();
		$sql = $db->query(" SELECT c.nombre, uc.* FROM clientes c
                            INNER JOIN usuarios_clientes uc 
                            ON c.id_cliente = uc.id_cliente
                            WHERE c.razon_social LIKE '$palabra%' AND uc.estado = 1 ");
		return $sql;
	}

    public function eliminar(){
		include_once ("conexion.php");
		$db = new Conexion();
		$sql = $db->query("DELETE FROM usuarios_clientes
                Where id_usuario = $this->idUsuario");
		return $sql;
	}

    public function registrar(){
		include_once ("conexion.php");
		$db = new Conexion();
		$sql = $db->query("INSERT INTO usuarios_clientes (usuario, password, mail, id_cliente, estado) 
                           VALUES ('$this->usuario', '$this->pasword', '$this->mail', '$this->cliente', 1 )");
		return $sql;
	}

    public function obtenerUsuario($id){
		include_once ("conexion.php");
		$db = new Conexion();
		$sql = $db->query("SELECT * FROM usuarios_clientes WHERE id_usuario = $id");
		return $sql;
	}

    public function modificar(){
		include_once ("conexion.php");
		$db = new Conexion();
		$sql = $db->query("UPDATE usuarios_clientes SET usuario = '$this->usuario' , mail = '$this->mail'
                            WHERE id_usuario = '$this->idUsuario'");
		return $sql;
	}
    public function modificarContraseña(){
		include_once ("conexion.php");
		$db = new Conexion();
		$sql = $db->query("UPDATE usuarios_clientes SET password = '$this->pasword' WHERE id_usuario = $this->idUsuario");
		return $sql;
	}

    public function activar(){
		include_once ("conexion.php");
		$db = new Conexion();
		$sql = $db->query("UPDATE usuarios_clientes SET estado = 1 WHERE id_usuario = $this->idUsuario");
		return $sql;
	}

    public function inactivar($id){
		include_once ("conexion.php");
		$db = new Conexion();
		$sql = $db->query("UPDATE usuarios_clientes SET estado = '0' WHERE id_usuario = $id");
		return $sql;
	}


}
?>