<?php
class UsuarioCliente{

    private $idUsuario;
    private $idCliente;
    private $mail;
    private $usuario;
    private $pasword;
    private $nivel;

	public function __construct($idUsuario, $usuario, $mail, $pas){
        $this->setIdUsuario($idUsuario);
        // $this->setIdCliente($idCliente);
        $this->setMail($mail);
        $this->setUsuario($usuario);
        $this->setPasword($pas);
	}

	public function setIdUsuario($idUsuario){
		$this->idUsuario = $idUsuario;
    }
	public function setIdCliente($idCliente){
		$this->idCliente = $idCliente;
    }
	public function setMail($mail){
		$this->mail = $mail;
    }
    public function setUsuario($us){
        $this->usuario=$us;
    }
    public function setPasword($pas){
        $this->pasword=$pas;
    }
    public function setNivel($niv){
        $this->nivel=$niv;
    }
    

	public function listar($palabra){
		include_once ("conexion.php");
		$db = new Conexion();
		$sql = $db->query("SELECT u.id_usuario, u.usuario, u.nivel, e.nombre, e.paterno, e.materno  
            FROM usuarios u INNER JOIN empleado e
            ON u.id_empleado = e.id_empleado WHERE u.usuario LIKE '$palabra%' AND u.estado = 'activo'");
		return $sql;
	}

    public function eliminar(){
		include_once ("conexion.php");
		$db = new Conexion();
		$sql = $db->query("UPDATE usuarios 
                SET estado = 'inactivo'
                Where id_usuario = $this->idUsuario");
		return $sql;
	}

    public function registrar(){
		include_once ("conexion.php");
		$db = new Conexion();
		$contra = md5($this->pasword);
		$sql = $db->query("INSERT INTO usuarios_clientes(id_cliente, usuario, mail, password, estado) 
                    VALUES ((select max(id_cliente) from clientes), '$this->usuario','$this->mail', '$contra', true )");
		return $sql;
	}

    public function obtenerUsuario(){
		include_once ("conexion.php");
		$db = new Conexion();
		$sql = $db->query("SELECT * FROM usuarios WHERE id_usuario = $this->idUsuario");
		return $sql;
	}

    public function modificar(){
		include_once ("conexion.php");
		$db = new Conexion();
		$sql = $db->query("UPDATE usuarios SET id_empleado = '$this->idEmp', usuario = '$this->usuario' ,
                            nivel = '$this->nivel'
                            WHERE id_usuario = '$this->idUsuario'");
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