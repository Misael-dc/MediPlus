<?php
class DetalleVenta{

	
	public function __construct(){

	}


	public function listar($idCliente){
		include_once ("conexion.php");
		$db = new Conexion();
		$sql = $db->query("SELECT p.*, dv.*, v.* FROM detalle_ventas dv 
                            INNER JOIN producto p
                            ON dv.id_producto = p.id_producto
                            INNER JOIN venta v
                            ON dv.id_producto = p.id_producto
                            WHERE v.id_cliente = '$idCliente'");
		return $sql;
	}

	public function listaClasificacion(){
		include_once ("conexion.php");
		$db = new Conexion();
		$sql = $db->query("SELECT * FROM clasificacion ");
		return $sql;
	}

	public function eliminar(){
		include_once ("conexion.php");
		$db=new Conexion();
		$sql=$db->query("UPDATE producto SET estado = false Where id_producto = $this->idProducto");
		return $sql;
	}

	
}

?>