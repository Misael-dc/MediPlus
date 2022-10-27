<?php
   $id=$_GET['id'];
   include("../modelo/usuarioEmpleadoclase.php");
       $ue=new UsuarioEmp($id, "", "", "", "", "", "");     

       $res=$ue->inactivar($id);

       if($res){
           ?>
           <script type="text/javascript">
               alert("Usuario inactivado correctamente")
               location.href='listarUsuariosEmpleados.php'
           </script>
           <?php
       
           
       }else{
           ?>
           <script type="text/javascript">
               alert("No se pudo inactivar al usuario")
               location.href='listarUsuariosEmpleados.php'
           </script>
           <?php
    }
   

?>