<?php
    include_once("components/header.php");
?>


<div class="card card-default">
  <div class="card-header ">
    <h1>Lista de Clasificaciones</h1>
  </div>
  <div class="card-body">   
    <table id="productsTable" class="table table-hover table-product" style="width:100%">
      <thead>
        <tr>
          <th> Id </th>
          <th> Nombre Clasificacion </th>
          <th> Descripcion </th>
        </tr>
      </thead>
      <tbody>
        <?php while($datos = mysqli_fetch_array($res)) { ?>
        <tr>
          <td><?=$datos['id_clasificacion']?></td>
          <td><?=$datos['nombre']?></td>
          <td><?=$datos['descripcion']?></td>

          <td style="display: flex; justify-content: center;">
            <a type="button" class="btn btn-sm btn-outline-warning" href="clasificacionModificar.php?id=<?=$datos['id_clasificacion']?>"> 
                <i class="mdi mdi-account-edit"></i>
            </a>
            <form action="clasificacionLista.php" method="POST">
              <input type="hidden" name="id" value="<?=$datos['id_clasificacion']?>">
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
</div>


<?php
include_once("components/footer.php");
?>