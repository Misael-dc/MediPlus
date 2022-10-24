<?php
include_once("components/header.php");
?>
<div class="row">
  <div class="col-xl-12">
    <!-- Basic Examples -->
    <div class="card card">
      <div class="card-header">
        <h2>MODIFICACION DE CLASIFICACIONES</h2>
      </div>
      <div class="card-body">
        <form  class="forms-sample" method="POST">
            <div class="form-group">
                <label for="exampleFormControlInput2">Nombre de la clasificación:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Clasificación" value="<?=$reg['nombre']?>">
                <span class="mt-2 d-block">Digite nombre del clasificación perteneciente a algun medicamento.</span>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput2">Descripción:</label>
                <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Descripción" value="<?=$reg['descripcion']?>">

            </div>
            <div class="form-footer mt-6">
                <button type="submit" name="modificar" value="modificar" class="btn btn-info btn-pill"><i class="mdi mdi-pencil-box"></i>Modificar</button>
                <button type="submit" class="btn btn-light btn-pill">Cancelar</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?php
include_once("components/footer.php");
?>