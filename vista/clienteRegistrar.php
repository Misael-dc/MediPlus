<?php
    include_once("components/header.php");
?>
<div class="card card-default">
  <div class="card-header">
    <h1>Registrar Cliente</h1>
  </div>
  <div class="card-body">
    <form action="clienteRegistrar.php" method="POST">
      <div class="form-group">
        <label for="exampleFormControlInput1">Nombre</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nombre" name="nombre">
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Paterno</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Paterno" name="paterno">
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Materno</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Materno" name="materno">
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Ciudad</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Ciudad" name="ciudad">
      </div>
      <div class="form-group">
        <label for="exampleFormControlPassword">Cedula</label>
        <input type="text" class="form-control" id="exampleFormControlPassword" placeholder="CI" name="cedula">
      </div>
    
      <div class="form-footer mt-6">
        <button type="submit" class="btn btn-primary btn-pill" name="registrar">registrar</button>
        <button type="submit" class="btn btn-light btn-pill">Cancel</button>
      </div>
    </form>    
  </div>
</div>


<?php
    include_once("components/footer.php");
?>