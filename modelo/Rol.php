<?php
class Rol{
    private $id;
    private $rol;
    public function __construct($i, $r)
    {
        $this->id = $i;
        $this->rol = $r;
    }
    public function registrar()
    {
        include_once("conexion.php");
        $db=new Conexion();
        $sql=$db->query("INSERT INTO roles(rol) values('$this->rol'); ");
        return($sql);
    }
    public function listar()
    {
        include_once("conexion.php");
        $db=new Conexion();
        $sql=$db->query("SELECT * FROM roles");
        return($sql);
    }
    public function listarRolId()
    {
        include_once("conexion.php");
        $db=new Conexion();
        $sql=$db->query("SELECT * FROM roles WHERE id_rol='$this->id'");
        return($sql);
    }
    public function buscarRol($busqueda)
    {
        include_once("conexion.php");
        $db=new Conexion();
        $sql=$db->query("SELECT * FROM roles WHERE rol LIKE'%$busqueda%'");
        return($sql);
    }
    public function eliminar()
    {
        include_once("conexion.php");
        $db=new Conexion();
        $sql=$db->query("DELETE FROM roles WHERE id_rol = '$this->id'");
        return($sql);
    }
    public function modificar()
    {
        include_once("conexion.php");
        $db = new Conexion();
        $sql = $db->query("UPDATE roles SET rol = '$this->rol' WHERE id_rol = '$this->id'");
        return($sql);
    }
    public function reporte()
    {
        include_once("conexion.php");
        $db=new Conexion();
        $sql=$db->query("SELECT * FROM roles");
        return($sql);
    }

    public function __destruct()
    {
        echo "des";
    }
}
?>