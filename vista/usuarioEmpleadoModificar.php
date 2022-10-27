<?php
    include_once("components/header.php");
?>
<form method="POST">
    <input type="hidden" name="id" value="<?=$r['id_usuario']?>">
  <div class="form-group">
    <label for="exampleFormControlInput1">Usuario</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="usuario" value="<?=$r['usuario']?>">
  </div>
  <div class="form-group">
    <label for="exampleFormControlPassword">Correo Electronico</label>
    <input type="text" class="form-control" id="exampleFormControlPassword"  name="mail" value="<?=$r['mail']?>">
  </div>

  <div class="form-footer mt-6">
    <button type="submit" class="btn btn-primary btn-pill" name="modificar">Modificar</button>
    <button type="submit" class="btn btn-light btn-pill">Cancel</button>
  </div>
</form>    
<?php
    include_once("../components/footer.php");
?>