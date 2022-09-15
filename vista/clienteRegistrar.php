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
        <label for="exampleFormControlInput1">Razon Social</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Razon Social" name="razon">
      </div>
      <div class="form-group">
        <label for="exampleFormControlPassword">Nit</label>
        <input type="text" class="form-control" id="exampleFormControlPassword" placeholder="CI" name="nit">
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