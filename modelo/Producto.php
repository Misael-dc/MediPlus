<?php
class Producto{
	private $idProducto;
	private $idClasificacion;
	private $idProveedor;
	private $nombre;
	private $descripcion;
	private $costoCompra;
	private $costoVenta;
	private $stock;
    private $imagenProducto;
	
	public function __construct($idProducto, $idClasificacion, $idProveedor, $nombre, $descripcion, $costoCompra, $costoVenta, $stock, $imagenProducto){
		 $this->idProducto = $idProducto;
		 $this->idProveedor = $idProveedor;
		 $this->idClasificacion = $idClasificacion;
         $this->nombre = $nombre;
         $this->descripcion= $descripcion;
         $this->costoCompra = $costoCompra; 
         $this->costoVenta = $costoVenta;
         $this->stock = $stock;
         $this->imagenProducto = $imagenProducto;
	}

	

	public function listar($palabra){
		include_once ("conexion.php");
		$db = new Conexion();
		$sql = $db->query("SELECT p.*, c.nombre, pr.empresa FROM producto p 
                            INNER JOIN clasificacion c
                            ON p.id_clasificacion = c.id_clasificacion
                            INNER JOIN proveedor pr
                            ON p.id_proveedor = pr.id_proveedor
                            WHERE p.nombre_producto like '$palabra%' AND p.estado = true");
		return $sql;
	}
	public function listaClasificacion(){
		include_once ("conexion.php");
		$db = new Conexion();
		$sql = $db->query("SELECT * FROM clasificacion ");
		return $sql;
	}

	public function registrar(){
		include_once ("conexion.php");
		$db = new Conexion();
		$sql = $db->query("INSERT INTO producto(id_clasificacion, id_proveedor, nombre_producto, descripcion, costo_compra, costo_venta, stock, imagenProducto, estado) 
                            VALUES ('$this->idClasificacion', '$this->idProveedor', '$this->nombre', '$this->descripcion', '$this->costoCompra', '$this->costoVenta', '$this->stock', '$this->imagenProducto', true)");
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
	
    public function modificar(){
        include_once ("conexion.php");
        $db = new Conexion();
        $sql = $db->query("UPDATE producto SET id_clasificacion = '$this->idClasificacion', id_proveedor = '$this->idProveedor', nombre_producto='$this->nombre', 
                                descripcion = '$this->descripcion', costo_compra = '$this->costoCompra', costo_venta = '$this->costoVenta', 
                                stock = '$this->stock', imagenProducto = '$this->imagenProducto'
                                WHERE id_producto ='$this->idProducto'");
        return $sql;
	}
   
    public function getIdProducto() {
        return $this->idProducto;
    }

    public function getIdClasificacion() {
        return $this->idClasificacion;
    }

    public function getIdProveedor() {
        return $this->idProveedor;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function getCostoCompra() {
        return $this->costoCompra;
    }

    public function getCostoVenta() {
        return $this->costoVenta;
    }

    public function getStock() {
        return $this->stock;
    }

    public function getImagenProducto() {
        return $this->imagenProducto;
    }

    public function setIdProducto($idProducto): void {
        $this->idProducto = $idProducto;
    }

    public function setIdClasificacion($idClasificacion): void {
        $this->idClasificacion = $idClasificacion;
    }

    public function setIdProveedor($idProveedor): void {
        $this->idProveedor = $idProveedor;
    }

    public function setNombre($nombre): void {
        $this->nombre = $nombre;
    }

    public function setDescripcion($descripcion): void {
        $this->descripcion = $descripcion;
    }

    public function setCostoCompra($costoCompra): void {
        $this->costoCompra = $costoCompra;
    }

    public function setCostoVenta($costoVenta): void {
        $this->costoVenta = $costoVenta;
    }

    public function setStock($stock): void {
        $this->stock = $stock;
    }

    public function setImagenProducto($imagenProducto): void {
        $this->imagenProducto = $imagenProducto;
    }


}
?>