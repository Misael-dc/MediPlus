<?php
include_once("components/header.php");
?>

<div class="card card-default">
  <div class="card-header">
    <h2>LISTADO DE CARGOS</h2>
  </div>
  <div class="card-body">
    <table id="productsTable" class="table table-hover table-product" style="width:100%">
      <thead>
        <tr>
          <th> ID </th>
          <th> CARGO </th>
          <th> ACCIONES </th>
        </tr>
      </thead>
      <tbody>
      <?php
        while($reg = mysqli_fetch_array($res)){
      ?>
          <tr>
            <td><?=$reg['id_cargo']?></td>
            <td><?=$reg['cargo']?></td>
            <td>
              <a href='../controlador/cargoModifica.php?cod=<?=$reg['id_cargo']?>' class='mb-1 btn btn-icon vimeo'><i class='mdi mdi-pencil-box'></i></a>
              <a href='../controlador/cargoElimina.php?cod=<?=$reg['id_cargo']?>' class='mb-1 btn btn-icon google-plus'><i class='mdi mdi-delete'></i></a>
            </td>
          </tr>

      <?php
        }
      ?>
      </tbody>
    </table>
  </div>
</div>

<script src="plugins/prism/prism.js"></script>
<script src="plugins/DataTables/DataTables-1.10.18/js/jquery.dataTables.min.js"></script>

<?php
include_once("components/footer.php");
?>