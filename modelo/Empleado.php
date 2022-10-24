<?php
class Empleado{
    private $id;
    private $ci;
    private $nombre;
    private $paterno;
    private $materno;
    private $cargo;
    private $dir;
    private $tel;
    private $fecha;
    private $genero;
    private $aficiones;

    public function __construct($i, $ced, $nom, $pat, $mat, $c, $d, $t, $f, $g, $af){
        $this->id=$i;
        $this->ci=$ced;
        $this->nombre=$nom;
        $this->paterno=$pat;
        $this->materno=$mat;
        $this->cargo=$c;
        $this->dir=$d;
        $this->tel=$t;
        $this->fecha=$f;
        $this->genero=$g;
        $this->aficiones=$af;
    }

    public function grabarEmpleado(){
        include("../modelo/conexion.php");
        $db=new Conexion();
        $sql=$db->query("INSERT INTO empleados (ci, nombre, paterno, materno, id_cargo, direccion, telefono, fechanacimiento, genero,  aficiones, estado) 
                        VALUES ('$this->ci', '$this->nombre', '$this->paterno', 
                                '$this->materno', '$this->cargo', '$this->dir', 
                                '$this->tel', '$this->fecha', '$this->genero', '$this->aficiones', true)");
        return($sql);
    }

    public function listarEmpleado(){
        include("conexion.php");
        $db=new Conexion();
        $sql = $db->query("SELECT e.id_empleado, e.ci, concat(e.nombre, ' ', e.paterno,' ', e.materno) nombreC, 
                            c.cargo, e.direccion, e.telefono, e.fechanacimiento, e.genero, e.aficiones FROM empleados e
                            INNER JOIN cargos c ON e.id_cargo = c.id_cargo
                            WHERE e.estado = true");
        return($sql);
    }


    public function modificarEmpleado(){
		include_once ("conexion.php");
		$db = new Conexion();
		$sql = $db->query("UPDATE empleados SET  ci = '$this->ci', nombre = '$this->nombre' , paterno = '$this->paterno' , materno = '$this->materno', id_cargo = '$this->cargo' ,
                            direccion = '$this->dir', telefono = '$this->tel' , fechanacimiento = '$this->fecha' , genero = '$this->genero' , aficiones = '$this->aficiones'
                            WHERE id_empleado = '$this->id'");
		return $sql;
	}

    public function eliminarEmpleado(){
		include_once ("conexion.php");
		$db = new Conexion();
		$sql = $db->query("UPDATE empleados SET estado = false
                            WHERE id_empleado = '$this->id' ");
		return $sql;
	}

    public function buscarID($idEmp){
        include_once("conexion.php");
        $db = new Conexion();
        $sql = $db->query("SELECT e.*, c.cargo FROM empleados e
                           INNER JOIN cargos c ON c.id_cargo = e.id_cargo
                           WHERE id_empleado = '$idEmp'");
        return $sql;
    }

    public function __destruct()
    {
        echo "des";
    }

}


?>