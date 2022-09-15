<?php
    $id = $_GET['id'];

    include("../modelo/Cargo.php");
    $cargo = new Cargo("", "");
    $sql = $cargo->listarCargo();

    include("../modelo/Empleado.php");
    $emp=new Empleado($id, "", "", "", "", "", "", "", "", "", "", "");     
    $co=$emp->buscarID($id);
    $r=mysqli_fetch_array($co);

    $aficionesArr = array('Lectura' => false, 'Negocios' => false, 'Deportes' => false, 'Videojuegos' => false );
                
    foreach($aficionesArr as $key => $value){
        if (strpos($r['aficiones'], $key) !== false) {
            $aficionesArr[$key] = true;
        }
    }
    
    include("../vista/empleadoModificar.php");

    if(isset($_POST['modificarEmpleado'])){

        $id = $_POST['idEmpleado'];
        $cedula = $_POST['cedula'];
        $nombre = $_POST['nombre'];
        $paterno = $_POST['paterno'];
        $materno = $_POST['materno'];
        $idCargo = $_POST['idCargo'];
        $direccion = $_POST['direccion'];
        $telefono = $_POST['telefono'];
        $fechanac = $_POST['fechanac'];
        $genero = $_POST['genero'];
        $aficiones = "";
        
        foreach($_POST['aficiones'] as $key => $value){
            if ($key == (count($_POST['aficiones']) - 1)) {
                $aficiones .= $value;
            }else{
                $aficiones = $aficiones.$value.', ';
            }
        }

        $emp = new Empleado($id, $cedula, $nombre, $paterno, $materno, $idCargo, $direccion, 
                            $telefono, $fechanac, $genero, $aficiones);
        
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