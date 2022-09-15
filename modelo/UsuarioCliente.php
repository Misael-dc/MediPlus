<?php
class UsuarioCliente{

    private $idUsuario;
    private $mail;
    private $usuario;
    private $pasword;
    private $nivel;


	public function __construct($idUsuario, $mail, $us, $pas, $niv){
        $this->setIdUsuario($idUsuario);
        $this->setMail($mail);
        $this->setUsuario($us);
        $this->setPasword($pas);
        $this->setNivel($niv);
	}

	public function setIdUsuario($idUsuario){
		$this->idUsuario = $idUsuario;
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
		$sql = $db->query("INSERT INTO usuarios(id_empleado, usuario, pasword, nivel, estado) 
                    VALUES ('$this->idEmp', '$this->usuario', '$this->pasword', '$this->nivel', 'activo' )");
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