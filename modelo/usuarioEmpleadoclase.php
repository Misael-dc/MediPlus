<?php
class UsuarioEmp{

    private $idUsuario;
    private $usuario;
    private $rol;
    private $pasword;
    private $mail;
    private $empleado;
    private $estado;


	public function __construct($idUsuario, $us, $r, $pas, $mail, $emp, $estado){
        $this->setIdUsuario($idUsuario);
        $this->setUsuario($us);
        $this->setRol($r);
        $this->setPasword($pas);
        $this->setMail($mail);
        $this->setEmpleado($emp);
        $this->setEstado($estado);
	}

	public function setIdUsuario($idUsuario){
		$this->idUsuario = $idUsuario;
    }
    public function setUsuario($us){
        $this->usuario=$us;
    }
    public function setRol($r){
        $this->rol=$r;
    }
    public function setPasword($pas){
        $this->pasword=$pas;
    }

	public function setMail($mail){
		$this->mail = $mail;
    }

    public function setEmpleado($emp){
        $this->empleado=$emp;
    }

    public function setEstado($estado){
        $this->estado=$estado;
    }
    
    public function listarUsEmpleado()
    {
        include("conexion.php");
        $db=new Conexion();
        $sql=$db->query("SELECT e.nombre, ue.* FROM empleados e
                        INNER JOIN usuarios_empleados ue
                        ON e.id_empleado = ue.id_empleado
                        WHERE ue.estado= 1 ");
        return($sql);
    }

    public function listarUsEmpleadoInactivo()
    {
        include("conexion.php");
        $db=new Conexion();
        $sql=$db->query("SELECT e.nombre, ue.* FROM empleados e
                         INNER JOIN usuarios_empleados ue
                         ON e.id_empleado = ue.id_empleado
                         WHERE ue.estado= 0 ");
        return($sql);
    }

	public function listarP($palabra){
		include_once ("conexion.php");
		$db = new Conexion();
		$sql = $db->query(" SELECT e.nombre, ue.* FROM empleados e
                            INNER JOIN usuarios_empleados ue
                            ON e.id_empleado = ue.id_empleado
                            WHERE ue.usuario LIKE '$palabra%' AND uc.estado = 1 ");
		return $sql;
	}

    public function eliminar(){
		include_once ("conexion.php");
		$db = new Conexion();
		$sql = $db->query("DELETE FROM usuarios_empleados
                Where id_usuario = $this->idUsuario");
		return $sql;
	}

    public function registrar(){
		include_once ("conexion.php");
		$db = new Conexion();
		$sql = $db->query("INSERT INTO usuarios_empleados (usuario, password, mail, id_empleado, estado) 
                           VALUES ('$this->usuario', '$this->pasword', '$this->mail', '$this->empleado', 1 )");
		return $sql;
	}

    public function obtenerUsuario($id){
		include_once ("conexion.php");
		$db = new Conexion();
		$sql = $db->query("SELECT * FROM usuarios_empleados WHERE id_usuario = $id");
		return $sql;
	}

    public function modificar(){
		include_once ("conexion.php");
		$db = new Conexion();
		$sql = $db->query("UPDATE usuarios_empleados SET usuario = '$this->usuario' , mail = '$this->mail'
                            WHERE id_usuario = '$this->idUsuario'");
		return $sql;
	}
    public function modificarContraseña(){
		include_once ("conexion.php");
		$db = new Conexion();
		$sql = $db->query("UPDATE usuarios_empleados SET password = '$this->pasword' WHERE id_usuario = $this->idUsuario");
		return $sql;
	}

    public function activar(){
		include_once ("conexion.php");
		$db = new Conexion();
		$sql = $db->query("UPDATE usuarios_empleados SET estado = 1 WHERE id_usuario = $this->idUsuario");
		return $sql;
	}

    public function inactivar($id){
		include_once ("conexion.php");
		$db = new Conexion();
		$sql = $db->query("UPDATE usuarios_empleados SET estado = '0' WHERE id_usuario = $id");
		return $sql;
	}


}
?>