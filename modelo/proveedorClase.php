<?php
class Proveedor{

    private $id;
    private $em;
    private $cont;
    private $mail;
    private $tel;
    private $dir;
    

	public function __construct($idP, $e, $c, $m, $t, $d){
        $this->id=($idP);
        $this->em=($e);
        $this->cont=($c);
        $this->mail=($m);
        $this->tel=($t);
        $this->dir=($d);
	}

	
    public function registrarProveedor(){
		include_once ("conexion.php");
		$db = new Conexion();
		$sql = $db->query("INSERT INTO proveedor(empresa, contacto, mail, telefono, direccion) 
                    VALUES ('$this->em', '$this->cont', '$this->mail', '$this->tel', '$this->dir')");
		return $sql;
	}

    public function listarProveedor(){
		include_once ("conexion.php");
		$db = new Conexion();
		$sql = $db->query("SELECT * FROM proveedor");
		return $sql;
	}


    public function modificarProveedor(){
		include_once ("conexion.php");
		$db = new Conexion();
		$sql = $db->query("UPDATE proveedor SET  empresa = '$this->em' , contacto = '$this->cont' ,
                            mail = '$this->mail', telefono = '$this->tel' , direccion = '$this->dir'
                            WHERE id_proveedor = '$this->id'");
		return $sql;
	}

    public function eliminarProveedor(){
		include_once ("conexion.php");
		$db = new Conexion();
		$sql = $db->query("DELETE FROM proveedor 
                Where id_proveedor = $this->id ");
		return $sql;
	}

    public function buscarID($idPr){
        include_once("conexion.php");
        $db = new Conexion();
        $sql = $db->query(("SELECT * FROM proveedor WHERE id_proveedor = '$idPr'"));
        return $sql;
    }

    

}
?>