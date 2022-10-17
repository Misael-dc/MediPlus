<?php
class Venta{

	public function __construct(){

	}

	public function listar($palabra){
		include_once ("conexion.php");
		$db = new Conexion();
		$sql = $db->query("SELECT v.*, CONCAT(c.nombre, ' ', c.paterno, ' ', c.materno) as completo_cli,
                                 CONCAT(e.nombre, ' ', e.paterno, ' ', e.materno) as completo_emp
                            FROM venta v
                            INNER JOIN clientes c
                            ON v.id_cliente = c.id_cliente
                            INNER JOIN empleados e
                            ON e.id_empleado = v.id_empleado 
                            ORDER BY fecha DESC");
		return $sql;
	}



	public function eliminar(){
		include_once ("conexion.php");
		$db=new Conexion();
		$sql=$db->query("UPDATE producto SET estado = false Where id_producto = $this->idProducto");
		return $sql;
	}

	
	public function obtenerProducto(){
		include_once ("conexion.php");
		$db = new Conexion();
		$sql = $db->query("SELECT * FROM producto WHERE id_producto = $this->idProducto");
		return $sql;
	}
    
	public function obtenerProductoId($id){
		include_once ("conexion.php");
		$db = new Conexion();
		$sql = $db->query("SELECT * FROM producto WHERE id_producto = $id");
		return $sql;
	}
	
    public function modificar(){
        include_once ("conexion.php");
        $db = new Conexion();
        if ( $this->imagenProducto != "" ) {
            $sql = $db->query("UPDATE producto SET id_clasificacion = '$this->idClasificacion', id_proveedor = '$this->idProveedor', nombre_producto='$this->nombre', 
                                forma='$this->forma', peso='$this->peso', descripcion = '$this->descripcion', 
                                laboratorio='$this->laboratorio', costo_compra = '$this->costoCompra', costo_venta = '$this->costoVenta', stock = '$this->stock', 
                                fecha_vencimiento = '$this->fechaven', unidad_venta ='$this->unidad', envase='$this->envase' , imagenProducto = '$this->imagenProducto'
                                WHERE id_producto ='$this->idProducto'");
        }else{
            $sql = $db->query("UPDATE producto SET id_clasificacion = '$this->idClasificacion', id_proveedor = '$this->idProveedor', nombre_producto='$this->nombre', 
                                forma='$this->forma', peso='$this->peso', descripcion = '$this->descripcion', 
                                laboratorio='$this->laboratorio', costo_compra = '$this->costoCompra', costo_venta = '$this->costoVenta', stock = '$this->stock', 
                                fecha_vencimiento = '$this->fechaven', unidad_venta ='$this->unidad', envase='$this->envase'
                                WHERE id_producto ='$this->idProducto'");
        }
        return $sql;
	}
}