<?php
    include_once("components/header.php");
?>


<div class="card card-default">
  <div class="card-header ">
    <h1>Lista de Usuarios Empleados</h1>
  </div>
  <div class="card-body">   
    <table id="productsTable" class="table table-hover table-product" style="width:100%">
      <thead>
        <tr>
          <th> Id </th>
          <th> Empleado </th>
          <th> Rol </th>
          <th> Usuario </th>
          <th> Correo</th>

          <th> ACCIONES </th>
        </tr>
      </thead>
      <tbody>
        <?php while($datos = mysqli_fetch_array($res)) { ?>
        <tr>
          <td><?=$datos['id_usuario']?></td>
          <td><?=$datos['completo']?></td>
          <td><?=$datos['rol']?></td>
          <td><?=$datos['usuario']?></td>
          <td><?=$datos['mail']?></td>
          <td style="display: flex; justify-content: center;">
            <a type="button" class="btn btn-sm btn-outline-warning" href="productoModificar.php?id=<?=$datos['id_producto']?>"> 
                <i class="mdi mdi-account-edit"></i>
            </a>
            <form action="productoListar.php" method="POST">
              <input type="hidden" name="id" value="<?=$datos['id_producto']?>">
              <button type="submit" class="btn btn-sm btn-outline-danger" name="eliminar"><i class="mdi mdi-delete-variant"></i></button>
            </form>
          </td>
        </tr>
        <?php
          }
        ?>
      </tbody>
    </table>
  </div>



  

<script src="plugins/prism/prism.js"></script>
<script src="plugins/DataTables/DataTables-1.10.18/js/jquery.dataTables.min.js"></script>
<?php
    include_once("components/footer.php");
?>