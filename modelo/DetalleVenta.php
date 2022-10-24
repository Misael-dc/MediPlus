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
                            ON dv.id_venta = v.id_venta
                            WHERE v.id_cliente = '$idCliente'");
		return $sql;
	}

	public function listaDetalleVenta($idVenta){
		include_once ("conexion.php");
		$db = new Conexion();
		$sql = $db->query("SELECT p.*, dv.*, v.* FROM detalle_ventas dv 
                            INNER JOIN producto p
                            ON dv.id_producto = p.id_producto
                            INNER JOIN venta v
                            ON dv.id_venta = v.id_venta
                            WHERE v.id_venta = '$idVenta'");
		return $sql;
	}
	public function datoCliente($idVenta){
		include_once ("conexion.php");
		$db = new Conexion();
		$sql = $db->query("SELECT c.*, v.*, CONCAT(c.nombre,' ', c.paterno, ' ', c.materno) as completo_cli, 
									 CONCAT(e.nombre,' ', e.paterno, ' ', e.materno) as completo_emp FROM venta v 
                            INNER JOIN clientes c
                            ON c.id_cliente = v.id_cliente
                            INNER JOIN empleados e
                            ON e.id_empleado = v.id_empleado
                            WHERE v.id_venta = '$idVenta'");
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