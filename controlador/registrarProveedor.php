<?php
include_once("../modelo/Verificacion.php");
$verificar = new Verificacion();
if(isset($_POST['registrarProveedor'])){
    
        $emp = $_POST['empresa'];
        $cont = $_POST['contacto'];
        $mail = $_POST['mail'];
        $tel = $_POST['telefono'];
        $dir = $_POST['direccion'];
        
        include("../modelo/proveedorClase.php");
        $prov=new Proveedor('', $emp, $cont, $mail, $tel, $dir);
        
        $r=$prov->registrarProveedor();
        if($r){
            ?>
            <script type="text/javascript">
                alert("Se registro correctamente")
                </script>
            <?php
            
        }else{
            ?>
            <script type="text/javascript">
                alert("No Se Registro")
                </script>
            <?php
        }
    }
    
    
include("../vista/proveedorRegistro.php");


?>