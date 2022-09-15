<?php
class Cargo{
    private $id;
    private $cargo;
    public function __construct($i, $c)
    {
        $this->id = $i;
        $this->cargo = $c;
    }
    public function grabarCargo()
    {
        include_once("conexion.php");
        $db=new Conexion();
        $sql=$db->query("INSERT INTO cargos(cargo) values('$this->cargo'); ");
        return($sql);
    }
    public function listarCargo()
    {
        include_once("conexion.php");
        $db=new Conexion();
        $sql=$db->query("SELECT * FROM cargos");
        return($sql);
    }
    public function listarCargoId()
    {
        include_once("conexion.php");
        $db=new Conexion();
        $sql=$db->query("SELECT * FROM cargos WHERE id_cargo='$this->id'");
        return($sql);
    }
    public function buscarCargo($busqueda)
    {
        include("conexion.php");
        $db=new Conexion();
        $sql=$db->query("SELECT * FROM cargos WHERE cargo LIKE'%$busqueda%'");
        return($sql);
    }
    public function eliminarCargo()
    {
        include("conexion.php");
        $db=new Conexion();
        $sql=$db->query("DELETE FROM cargos WHERE id_cargo = '$this->id'");
        return($sql);
    }
    public function editarCargo()
    {
        include_once("conexion.php");
        $db = new Conexion();
        $sql = $db->query("UPDATE cargos SET cargo = '$this->cargo' WHERE id_cargo = '$this->id'");
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