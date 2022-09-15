<?php
    include_once("components/header.php");
?>
<form action="clienteModificar.php" method="POST">
    <input type="hidden" name="id" value="<?=$datos['id_cliente']?>">
  <div class="form-group">
    <label for="exampleFormControlInput1">Razon Social</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Razon Social" name="razon" value="<?=$datos['razon_social']?>">
  </div>
  <div class="form-group">
    <label for="exampleFormControlPassword">Nit</label>
    <input type="text" class="form-control" id="exampleFormControlPassword" placeholder="CI" name="nit" value="<?=$datos['nit_ci']?>">
  </div>

  <div class="form-footer mt-6">
    <button type="submit" class="btn btn-primary btn-pill" name="modificar">Modificar</button>
    <button type="submit" class="btn btn-light btn-pill">Cancel</button>
  </div>
</form>    
<?php
    include_once("components/footer.php");
?>