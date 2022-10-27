<?php
   $id=$_GET['id'];
   include("../modelo/usuarioClienteclase.php");
       $uc=new UsuarioCli($id, "", "", "", "", "");     

       $res=$uc->inactivar($id);

       if($res){
           ?>
           <script type="text/javascript">
               alert("Usuario inactivado correctamente")
               location.href='listarUsuariosClientes.php'
           </script>
           <?php
       
           
       }else{
           ?>
           <script type="text/javascript">
               alert("No se pudo inactivar al usuario")
               location.href='listarUsuariosClientes.php'
           </script>
           <?php
    }
   

?>