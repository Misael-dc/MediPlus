<?php
    $id=$_GET['id'];
    include("../modelo/Empleado.php");
        $emp=new Empleado($id, "", "", "", "", "", "", "", "", "", "", "");     

        $res=$emp->eliminarEmpleado();

        if($res){
            ?>
            <script type="text/javascript">
                alert("Se elimino correctamente")
                location.href="../controlador/empleadoLista.php";
            </script>
            <?php
        
            
        }else{
            ?>
            <script type="text/javascript">
                alert("No Se elimino el registro")
                location.href="../controlador/empleadoLista.php";
            </script>
            <?php
        }
    




?>