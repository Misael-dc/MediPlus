<?php
    $id=$_GET['id'];
    include("../modelo/proveedorClase.php");
        $prov=new Proveedor($id, "", "", "", "", "");     
        $co=$prov->buscarID($id);
        $r=mysqli_fetch_array($co);
    
    include("../vista/proveedorModificar.php");

    if(isset($_POST['modificarProveedor'])){
        
        $emp = $_POST['empresa'];
        $cont = $_POST['contacto'];
        $mail = $_POST['mail'];
        $tel = $_POST['telefono'];
        $dir = $_POST['direccion'];
        
        $prove=new Proveedor($id, $emp, $cont, $mail, $tel, $dir);
        
        $res=$prove->modificarProveedor();
        if($res){
            ?>
            <script type="text/javascript">
                alert("Se modifico correctamente")
                location.href="../controlador/proveedorLista.php";
            </script>
            <?php
        
            
        }else{
            ?>
            <script type="text/javascript">
                alert("No Se modifico")
                location.href="../controlador/proveedorLista.php";
            </script>
            <?php

        }
    }




?>