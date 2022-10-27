<?php
include_once("../modelo/Verificacion.php");
$verificar = new Verificacion();
   $id=$_GET['id'];
   include("../modelo/usuarioClienteclase.php");
       $uc=new UsuarioCli($id, "", "", "", "", "");     

       $res=$uc->activar();

       if($res){
           ?>
           <script type="text/javascript">
               alert("Se activo correctamente")
               location.href='listarUsuariosClientes.php'
           </script>
           <?php
       
           
       }else{
           ?>
           <script type="text/javascript">
               alert("No se pudo activar")
               location.href='listarUsuariosClientes.php'
           </script>
           <?php
    }
   

?>