<?php
class UsuarioEmpleado{

    private $idUsuario;
    private $idEmpleado;
    private $idRol;
    private $usuario;
    private $mail;
    private $pasword;


	public function __construct($idUsuario, $idEmpleado, $idRol, $usuario, $mail, $pasword){
        $this->idUsuario = $idUsuario;
        $this->idEmpleado = $idEmpleado;
        $this->idRol = $idRol;
        $this->usuario = $usuario;
        $this->mail = $mail;
        $this->pasword = $pasword;
	}


    

	public function listar($palabra){
		include_once ("conexion.php");
		$db2 = new Conexion();
		$sql = $db2->query("SELECT r.*, u.id_usuario, u.usuario, u.id_empleado, u.id_rol, u.mail, CONCAT(e.nombre,' ' , e.paterno, ' ', e.materno) as completo
            FROM usuarios_empleados u 
			INNER JOIN empleados e
            ON u.id_empleado = e.id_empleado 
			INNER JOIN roles r
			ON r.id_rol = u.id_rol
            WHERE u.usuario LIKE '$palabra%'");
		return $sql;
	}
	public function listaEmpleadoSinUsuario(){
		include_once ("conexion.php");
		$db2 = new Conexion();
		$sql = $db2->query("SELECT e.*, CONCAT(e.nombre,' ' , e.paterno, ' ', e.materno) as completo
            FROM empleados e
            WHERE NOT EXISTS (SELECT *
                   FROM   usuarios_empleados u
                   WHERE  e.id_empleado = u.id_empleado) ");
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
		$sql = $db->query("INSERT INTO usuarios_empleados(id_empleado, id_rol, usuario, mail, password, estado) 
                    VALUES ('$this->idEmpleado','$this->idRol', '$this->usuario','$this->mail', '$contra', true )");
		return $sql;
	}

    public function obtenerUsuario(){
		include_once ("conexion.php");
		$db = new Conexion();
		$sql = $db->query("SELECT * FROM usuarios_empleados WHERE id_usuario = $this->idUsuario");
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