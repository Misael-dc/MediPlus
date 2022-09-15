<?php
include_once("components/header.php");
?>
<div class="card card-default">
  <div class="card-header ">
    <h1>Registro de Cargos</h1>
  </div>
  <div class="card-body">
    <form  class="forms-sample" method="POST">
      <div class="form-group">
        <label for="exampleFormControlInput2">Nombre del Cargo:</label>
        <input type="text" class="form-control" id="cargo" name="cargo" placeholder="Digite el cargo">
        <span class="mt-2 d-block">Digite nombre del cargo perteneciente a la farmacia.</span>
      </div>
      <div class="form-footer mt-6">
        <button type="submit" name="registrarCargo" value="registrarCargo" class="btn btn-primary btn-pill">Registrar</button>
        <button type="submit" class="btn btn-light btn-pill">Cancelar</button>
      </div>
    </form>
  </div>
</div>

<?php
include_once("components/footer.php");
?>