<?php
include_once("components/header.php");
?>
<div class="row">
  <div class="col-xl-12">
    <div class="card card">
      <div class="card-header">
        <h2>LISTADO DE CARGOS</h2>
      </div>
      <div class="card-body">
<table id="productsTable" class="table table-hover table-product" style="width:100%">
      <thead>
        <tr>
          <th>Id Cargo</th>
          <th>Cargo</th>
          <th colspan="2">Operacion</th>
        </tr>
      </thead>
      <tbody>
      <?php
        while($reg = mysqli_fetch_array($res)){
          echo "<tr>";
          echo "<td>".$reg['id_cargo']."</td>";
          echo "<td>".$reg['cargo']."</td>";
          echo "<td><a href='../controlador/cargoModifica.php?cod=".$reg['id_cargo']."' class='mb-1 btn btn-icon vimeo'><i class='mdi mdi-pencil-box'></i></a>";
          echo "&nbsp<a href='../controlador/cargoElimina.php?cod=".$reg['id_cargo']."' class='mb-1 btn btn-icon google-plus'><i class='mdi mdi-delete'></i></a></td>";
          echo "</tr>";
        }
      ?>
      </tbody>
    </table><br><br>
    <a href="../controlador/cargoBusqueda.php" class="mb-1 btn btn-icon facebook"><i class="mdi mdi-magnify"></i></a>
     <a href="../controlador/cargoRegistro.php" class="mb-1 btn btn-icon twitter"><i class="mdi mdi-format-page-break"></i></a>
     <a href="../controlador/cargoReporte.php" class="mb-1 btn btn-icon google-plus"><i class="mdi mdi-file"></i></a>
    </div>
  </div>
  </div>
</div>
<?php
include_once("components/footer.php");
?>