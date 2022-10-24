<?php
class Clasificacion{
    private $id;
    private $nombre;
    private $descripcion;

    public function __construct($id, $nombre, $descripcion)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
    }
    public function registrar()
    {
        include_once("conexion.php");
        $db = new Conexion();
        $sql=$db->query("INSERT INTO clasificacion(nombre, descripcion) values ('$this->nombre', '$this->descripcion')");
        return($sql);
    }
    public function listar()
    {
        include_once("conexion.php");
        $db=new Conexion();
        $sql=$db->query("SELECT * FROM clasificacion");
        return($sql);
    }
    public function listarId()
    {
        include_once("conexion.php");
        $db=new Conexion();
        $sql=$db->query("SELECT * FROM clasificacion WHERE id_clasificacion='$this->id'");
        return($sql);
    }
    public function buscar($busqueda)
    {
        include("conexion.php");
        $db=new Conexion();
        $sql=$db->query("SELECT * FROM clasificacion WHERE nombre LIKE'%$busqueda%'");
        return($sql);
    }
    public function eliminar()
    {
        include("conexion.php");
        $db=new Conexion();
        $sql=$db->query("DELETE FROM clasificacion WHERE id_clasificacion = '$this->id'");
        return($sql);
    }
    
    public function modificar()
    {
        include_once("conexion.php");
        $db = new Conexion();
        $sql = $db->query("UPDATE clasificacion SET nombre = '$this->nombre', descripcion = '$this->descripcion' WHERE id_clasificacion = '$this->id'");
        return($sql);
    }
    public function reporte()
    {
        include("conexion.php");
        $db=new Conexion();
        $sql=$db->query("SELECT * FROM cargos");
        return($sql);
    }
    #getter and setter

}
?>