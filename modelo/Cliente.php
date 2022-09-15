<?php
class Cliente{
	private $idCliente;
	private $nit;
	private $razonsocial;
	
	public function __construct($idCliente, $razon, $nit){
		$this->setId($idCliente);
		$this->setRs($razon);
		$this->setNit($nit);
	}

	public function setId($id){
		$this->idCliente = $id;
	}

	public function setNit($n){
		$this->nit=$n;
	}

	public function setRs($ra){
		$this->razonsocial=$ra;
	}

	public function getNit($n){
		$this->nit=$n;
	}

	public function getRs($ra){
		$this->razonsocial=$ra;
	}

	public function listar($palabra){
		include_once ("conexion.php");
		$db = new Conexion();
		$sql = $db->query("SELECT * FROM clientes WHERE razon_social like '$palabra%' AND estado = true");
		return $sql;
	}

	public function registrar(){
		include_once ("conexion.php");
		$db = new Conexion();
		$sql = $db->query("INSERT INTO clientes(razon_social, nit_ci, estado) VALUES ('$this->razonsocial', '$this->nit', true)");
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
		$sql = $db->query("UPDATE clientes SET razon_social='$this->razonsocial', nit_ci='$this->nit' WHERE id_cliente='$this->idCliente'");
		return $sql;
	}
}
?>