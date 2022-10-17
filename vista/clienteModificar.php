<?php
    include_once("components/header.php");
?>
<form action="clienteModificar.php" method="POST">
    <input type="hidden" name="id" value="<?=$datos['id_cliente']?>">

    <div class="form-group">
          <label for="exampleFormControlInput1">Nombre</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nombre" name="nombre" value="<?=$datos['nombre']?>">
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Paterno</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Paterno" name="paterno" value="<?=$datos['paterno']?>">
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Materno</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Materno" name="materno" value="<?=$datos['materno']?>">
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Ciudad</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Ciudad" name="ciudad" value="<?=$datos['ciudad']?>">
        </div>
        <div class="form-group">
          <label for="exampleFormControlPassword">Cedula</label>
          <input type="text" class="form-control" id="exampleFormControlPassword" placeholder="CI" name="cedula" value="<?=$datos['cedula']?>">
        </div>
    <div class="form-footer mt-6">
      <button type="submit" class="btn btn-primary btn-pill" name="modificar">Modificar</button>
      <button type="submit" class="btn btn-light btn-pill">Cancel</button>
    </div>
</form>    
<?php
    include_once("components/footer.php");
?>