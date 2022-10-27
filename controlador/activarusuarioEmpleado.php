<?php
   $id=$_GET['id'];
   include("../modelo/usuarioEmpleadoclase.php");
       $ue=new UsuarioEmp($id, "", "", "", "", "", "");     

       $res=$ue->activar();

       if($res){
           ?>
           <script type="text/javascript">
               alert("Se activo correctamente")
               location.href='listarUsuariosEmpleadoss.php'
           </script>
           <?php
       
           
       }else{
           ?>
           <script type="text/javascript">
               alert("No se pudo activar")
               location.href='listarUsuariosEmpleados.php'
           </script>
           <?php
    }
   

?>