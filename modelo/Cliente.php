<?php
class Cliente{
	private $idCliente;
	private $nombre;
	private $paterno;
	private $materno;
	private $ciudad;
	private $nit;
	
	public function __construct($idCliente, $nombre, $paterno, $materno, $ciudad, $nit){
		$this->idCliente =   $idCliente;
		$this->nombre    =   $nombre;
		$this->paterno   =   $paterno;
		$this->materno   =   $materno;
		$this->ciudad    =   $ciudad;
		$this->nit       =   $nit;
	}


	public function listar($palabra){
		include_once ("conexion.php");
		$db = new Conexion();
		$sql = $db->query("SELECT *, CONCAT(nombre,' ',paterno,' ',materno) as nombre_completo FROM clientes 
							WHERE nombre like '$palabra%' AND estado = true");
		return $sql;
	}
	public function listarClientes($palabra){
		include_once ("conexion.php");
		$db = new Conexion();
		$sql = $db->query("SELECT * FROM clientes 
							WHERE nombre like '$palabra%' AND estado = true");
		return $sql;
	}
	public function listarClienteUsuario($idCliente){
		include_once ("conexion.php");
		$db = new Conexion();
		$sql = $db->query("SELECT * FROM clientes 
							WHERE id_cliente = '$idCliente' AND estado = true");
		return $sql;
	}

	public function registrar(){
		include_once ("conexion.php");
		$db = new Conexion();
		$sql = $db->query("INSERT INTO clientes(nombre, paterno, materno, ciudad, cedula, estado) 
						VALUES ('$this->nombre', '$this->paterno', '$this->materno', '$this->ciudad', '$this->nit', true)");
		return $sql;
	}

	public function eliminar(){
		include_once ("conexion.php");
		$db=new Conexion();
		$sql=$db->query("UPDATE clientes SET estado = false Where id_cliente = $this->idCliente");
		return $sql;
	}

	
	public function obtenerCliente(){
		include_once ("conexion.php");
		$db = new Conexion();
		$sql = $db->query("SELECT * FROM clientes WHERE id_cliente = $this->idCliente");
		return $sql;
	}
	
    public function modificar(){
		include_once ("conexion.php");
		$db = new Conexion();
		$sql = $db->query("UPDATE clientes SET nombre = '$this->nombre', paterno = '$this->paterno', 
												materno = '$this->materno', ciudad = '$this->ciudad', cedula = '$this->nit' 
							WHERE id_cliente='$this->idCliente'");
		return $sql;
	}
}
?>