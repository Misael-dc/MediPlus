<?php
include_once("components/header.php");
?>
<div class="row">
  <div class="col-xl-12">
    <!-- Basic Examples -->
    <div class="card card">
      <div class="card-header">
        <h2>MODIFICACION DE CARGOS</h2>
      </div>
      <div class="card-body">
      <?php
        
        ?>
        <form  class="forms-sample" method="POST">
          <div class="form-group">
            <label for="exampleFormControlInput2">ID Cargo:</label>
            <input type="text" class="form-control" id="cod" name="cod" readonly="readonly" value="<?php echo $reg['id_cargo'];?>" />
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput2">Nombre del Cargo:</label>
            <input type="text" class="form-control" id="cargo" name="cargo" value="<?php echo $reg['cargo'];?>" />
            <span class="mt-2 d-block">Digite nombre del cargo perteneciente a la farmacia.</span>
          </div>
          <div class="form-footer mt-6">
            <button type="submit" name="modificar" value="modificar" class="btn btn-info btn-pill"><i class="mdi mdi-pencil-box"></i>Modificar</button>
            <button type="submit" class="btn btn-light btn-pill">Cancelar</button>
          </div>
        </form>
        <?php   
                
                    ?>
                    <br>
     <br>
     <br>
      <button href="../controlador/cargoBusqueda.php" type="button" class="mb-1 btn btn-icon facebook"><i class="mdi mdi-magnify"></i></button>
      <button href="../controlador/cargoLista.php" type="button" class="mb-1 btn btn-icon twitter"><i class="mdi mdi-table-large"></i></button>
      <button href="../controlador/cargoReporte.php" type="button" class="mb-1 btn btn-icon google-plus"><i class="mdi mdi-file"></i></button>
  </div> </div>
  </div>
</div>
<?php
include_once("components/footer.php");
?>

