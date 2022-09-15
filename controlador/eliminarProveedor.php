<?php
    $id=$_GET['id'];
    include("../modelo/proveedorClase.php");
        $prov=new Proveedor($id, "", "", "", "", "");     

        $res=$prov->eliminarProveedor();

        if($res){
            ?>
            <script type="text/javascript">
                alert("Se elimino correctamente")
                location.href="../controlador/proveedorLista.php";
            </script>
            <?php
        
            
        }else{
            ?>
            <script type="text/javascript">
                alert("No Se elimino el registro")
                location.href="../controlador/proveedorLista.php";
            </script>
            <?php
        }
    




?>