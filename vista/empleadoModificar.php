<?php
include("../vista/components/header.php");
?>
<div class="card card-default">
  <div class="card-header ">
    <h1>Modificar Empleado</h1>
  </div>
  <div class="card-body">
      <form method="POST" class="forms-sample" style="margin:0,0 auto">
            <input type="hidden" value="<?= $r['id_empleado'] ?>" name="idEmpleado">
         <div class="form-group">
            <label class="control-label">CARGO:</label>
              <select name="idCargo" id="cargo" class="form-control rounded-0">
                  <option value="Seleccione un cargo">Seleccione un cargo</option>
                  <?php
                  while ($reg = mysqli_fetch_array($sql)) {
                    if ($reg['id_cargo'] == $r['id_cargo'] ) {
                    ?>
                         <option value="<?= $reg['id_cargo'] ?>" selected><?php echo $reg['cargo'] ?></option>
                    <?php
                        
                    }else{

                  ?>
                      <option value="<?= $reg['id_cargo'] ?>"><?php echo $reg['cargo'] ?></option>
                  <?php
                    }
                  }
                  ?>
              </select>
          </div>
      
          <div class="form-group">
              <label class="control-label">CARNET:</label>
              <input class="form-control" type="text" name="cedula" id="cedula" value="<?= $r['ci']?>">
          </div>
      
          <div class="form-group">
              <label class="control-label">NOMBRE:</label>
              <input class="form-control" type="text" name="nombre" id="nombre" value="<?= $r['nombre']?>">
          </div>
      
          <div class="form-group">
              <label class="control-label">APELLIDO PATERNO:</label>
              <input class="form-control" type="text" name="paterno" id="paterno" value="<?= $r['paterno']?>">
          </div>
      
          <div class="form-group">
              <label class="control-label">APELLIDO MATERNO:</label>
              <input class="form-control" type="text" name="materno" id="materno" value="<?= $r['materno']?>">
          </div>
      
      
          <div class="form-group">
              <label class="control-label">FECHA DE NACIMIENTO:</label>
              <input class="form-control" type="date" data-date-format="YYYY-MMMM-DD" name="fechanac" id="fechanac" placeholder="AAAA-MM-DD" value="<?= $r['fechanacimiento']?>">
          </div>
      
          <div class="form-group">
              <label class="control-label">DIRECCIÓN:</label>
              <input class="form-control" type="text" name="direccion" id="direccion" value="<?= $r['direccion']?>">
          </div>
      
          <div class="form-group">
              <label class="control-label">TELÉFONO:</label>
              <input class="form-control" type="text" name="telefono" id="telefono" value="<?= $r['telefono']?>">
          </div>
      
          <div class="mb-3">
            <label class="control-label">GENERO:</label>
              <div class="custom-control custom-radio  mr-3 mb-3">
                  <input class="custom-control-input" type="radio" name="genero" id="f" value="F" <?= $r['genero'] == "F" ? "checked" : "" ?>>
                  <label  class="custom-control-label" for="f">
                      FEMENINO
                  </label>
              </div>
              <div class="custom-control custom-radio  mr-3 mb-3">
                  <input class="custom-control-input" type="radio" name="genero" id="m" value="M" <?= $r['genero'] == "M" ? "checked" : "" ?>>
                  <label  class="custom-control-label" for="m">
                      MASCULINO
                  </label>
              </div>
          </div>

          <div class="mb-3">
            <label class="input-group" for="inputGroupSelect01">Aficiones:</label>
            <div class="custom-control custom-checkbox checkbox-outline-primary   mr-3 mb-3">
                <input class="custom-control-input" type="checkbox" id="flexSwitchCheckChecked1" name="aficiones[]" value="Lectura" <?=$aficionesArr['Lectura'] ? 'checked' : ''?>>
                <label class="custom-control-label" for="flexSwitchCheckChecked1">Lectura</label>
            </div>
            <div class="custom-control custom-checkbox checkbox-outline-secondary   mr-3 mb-3">
                <input class="custom-control-input" type="checkbox" id="flexSwitchCheckChecked2" name="aficiones[]" value="Negocios" <?=$aficionesArr['Negocios'] ? 'checked' : ''?>>
                <label class="custom-control-label" for="flexSwitchCheckChecked2">Negocios</label>
            </div>
            <div class="custom-control custom-checkbox checkbox-outline-warning   mr-3 mb-3">
                <input class="custom-control-input" type="checkbox" id="flexSwitchCheckChecked3" name="aficiones[]" value="Deportes" <?=$aficionesArr['Deportes'] ? 'checked' : ''?>>
                <label class="custom-control-label" for="flexSwitchCheckChecked3">Deportes</label>
            </div>
            <div class="custom-control custom-checkbox checkbox-outline-dark  mr-3 mb-3">
                <input class="custom-control-input" type="checkbox" id="flexSwitchCheckDefault4" name="aficiones[]" value="Videojuegos" <?=$aficionesArr['Videojuegos'] ? 'checked' : ''?>>
                <label class="custom-control-label" for="flexSwitchCheckDefault4">Video juegos</label>
            </div>
          </div>
      
          <div class="form-group">
              <input type="submit" value="Modificar" class="btn btn-success " name="modificarEmpleado">
          </div>
      
      </form>
  </div>
</div>






<?php
include("../vista/components/footer.php");
?>