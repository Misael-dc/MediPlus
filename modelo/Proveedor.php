<?php
class Proveedor{
	private $id;
	private $empresa;
	private $contacto;
	private $mail;
	private $telefono;
	private $direccion;

	public function __construct($id, $e , $c, $m, $t, $d){
		$this->setId($id);
		$this->setEmpresa($e);
		$this->setContacto($c);
		$this->setMail($m);
		$this->setTelefono($t);
		$this->setDireccion($d);
	}


	public function listar($palabra){
		include_once ("conexion.php");
		$db = new Conexion();
		$sql = $db->query("SELECT * FROM proveedor WHERE empresa LIKE '$palabra%' AND estado = true");
		return $sql;
	}

    public function registrar(){
		include_once ("conexion.php");
		$db = new Conexion();
		$sql = $db->query("INSERT INTO proveedor(empresa, contacto, mail, telefono, direccion, logo, estado)
					VALUES('$this->empresa', '$this->contacto', '$this->mail', 
					'$this->telefono', '$this->direccion','$this->logo', true)");
		return $sql;
	}

	public function eliminar(){
		include_once ("conexion.php");
		$db = new Conexion();
		$sql = $db->query("UPDATE proveedor 
				SET estado = false
				Where id_proveedor = $this->id");
		return $sql;
	}

	public function obtenerProveedor(){
		include_once ("conexion.php");
		$db = new Conexion();
		$sql = $db->query("SELECT * FROM proveedor WHERE id_proveedor = $this->id");
		return $sql;
	}

	public function modificar(){
		include_once ("conexion.php");
		$db = new Conexion();
		$sql = $db->query("UPDATE proveedor SET empresa = '$this->empresa', contacto = '$this->contacto',
				mail = '$this->mail', telefono = '$this->telefono', direccion = '$this->direccion'
				WHERE id_proveedor = $this->id");
		return $sql;
	}
	
	public function reporte(){
		include_once ("conexion.php");
		$db = new Conexion();
		$sql = $db->query("SELECT pv.empresa,  p.nombreproducto, p.descripcion, p.costocompra, p.costoventa, p.stock
				FROM producto p
				INNER JOIN proveedor pv ON p.id_proveedor = pv.id_proveedor
				WHERE p.estado = true");
				
		return $sql;
	}

	public function setId($id){
		$this->id=$id;
	}

	public function setEmpresa($em){
		$this->empresa=$em;
	}

	public function setContacto($co){
		$this->contacto=$co;
	}

	public function setMail($ma){
		$this->mail=$ma;
	}

	public function setTelefono($te){
		$this->telefono=$te;
	}

	public function setDireccion($di){
		$this->direccion=$di;
	}

	public function setLogo($lo){
		$this->logo=$lo;
	}
}
?>