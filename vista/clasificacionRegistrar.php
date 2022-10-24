<?php
include_once("components/header.php");
?>
<div class="card card-default">
  <div class="card-header ">
    <h1>Registro de Clasificaciones</h1>
  </div>
  <div class="card-body">
    <form  class="forms-sample" method="POST">
      <div class="form-group">
        <label for="exampleFormControlInput2">Nombre de la clasificación:</label>
        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Clasificación" required>
        <span class="mt-2 d-block">Digite nombre del clasificación perteneciente a algun medicamento.</span>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput2">Descripción:</label>
        <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Descripción" required>

      </div>
      <div class="form-footer mt-6">
        <button type="submit" name="registrar" class="btn btn-primary btn-pill">Registrar</button>
        <button type="submit" class="btn btn-light btn-pill">Cancelar</button>
      </div>
    </form>
  </div>
</div>

<?php
include_once("components/footer.php");
?>