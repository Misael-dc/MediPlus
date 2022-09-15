<?php
    $id=$_GET['id'];

    include("../modelo/cargoClase.php");
    $cargo= new Cargo("", "");
    $ca=$cargo->listarCargo();

    include("../modelo/empleadoClase.php");
        $emp=new Empleado($id, "", "", "", "", "", "", "", "", "", "", "");     
        $co=$emp->buscarID($id);
        $r=mysqli_fetch_array($co);
    
    include("../vista/empleadoModificar.php");

    if(isset($_POST['modificarEmpleado'])){


        $ced = $_POST['cedula'];
        $nom = $_POST['nombre'];
        $pat = $_POST['paterno'];
        $mat = $_POST['materno'];
        $c = $_POST['cargo'];
        $d = $_POST['direccion'];
        $t = $_POST['telefono'];
        $f = $_POST['fechanac'];
        $g = $_POST['genero'];
        $es="Activo";
        $af = " ";
    
        $emp=new Empleado($id, $ced, $nom, $pat, $mat, $c, $d, $t, $f, $g, $es, $af);
        
        $res=$emp->modificarEmpleado();
        
        if($res){
            ?>
            <script type="text/javascript">
                alert("Se modifico correctamente")
                location.href="../controlador/empleadoLista.php";
            </script>
            <?php
        
            
        }else{
            ?>
            <script type="text/javascript">
                alert("No Se modifico")
                location.href="../controlador/empleadoLista.php";
            </script>
            <?php
        }
    }




?>