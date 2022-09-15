<?php
include("../vista/components/header.php");
?>
<div class="card card-default">
  <div class="card-header ">
    <h1>Registro de Empleados</h1>
  </div>
  <div class="card-body">
      <form method="POST" class="forms-sample" style="margin:0,0 auto">
    
          <div class="form-group">
            <label class="  control-label">CARGO:</label>
              <select name="idCargo" id="cargo" class="form-control rounded-0">
                  <option value="Seleccione un cargo">Seleccione un cargo</option>
                  <?php
                  while ($reg = mysqli_fetch_array($sql)) {
                  ?>
                      <option value="<?php echo $reg['id_cargo'] ?>"><?php echo $reg['cargo'] ?></option>
                  <?php
    
                  }
                  ?>
              </select>
    
          </div>
    
          <div class="form-group">
              <label class="  control-label">CARNET:</label>
              <input class="form-control" type="text" name="cedula" id="cedula">
          </div>
    
          <div class="form-group">
              <label class="  control-label">NOMBRE:</label>
              <input class="form-control" type="text" name="nombre" id="nombre">
          </div>
    
          <div class="form-group">
              <label class="  control-label">APELLIDO PATERNO:</label>
              <input class="form-control" class="form-control" type="text" name="paterno" id="paterno">
          </div>
    
          <div class="form-group">
              <label class="  control-label">APELLIDO MATERNO:</label>
              <input class="form-control" type="text" name="materno" id="materno">
          </div>
    
          <div class="form-group">
              <label class="  control-label">FECHA DE NACIMIENTO:</label>
              <input class="form-control" type="date" data-date-format="YYYY-MMMM-DD" name="fechanac" id="fechanac" placeholder="AAAA-MM-DD">
          </div>
    
          <div class="form-group">
              <label class="  control-label">DIRECCIÓN:</label>
              <input class="form-control" type="text" name="direccion" id="direccion">
          </div>
    
          <div class="form-group">
              <label class=" control-label">TELÉFONO:</label>
              <input class="form-control" type="text" name="telefono" id="telefono">
          </div>
          <div class="mb-3">
            <label class="control-label">GENERO:</label>
              <div class="custom-control custom-radio  mr-3 mb-3">
                  <input class="custom-control-input" type="radio" name="genero" id="f" value="F">
                  <label  class="custom-control-label" for="f">
                      FEMENINO
                  </label>
              </div>
              <div class="custom-control custom-radio  mr-3 mb-3">
                  <input class="custom-control-input" type="radio" name="genero" id="m" value="M">
                  <label  class="custom-control-label" for="m">
                      MASCULINO
                  </label>
              </div>
          </div>
    
    
    
          <div class="mb-3">
            <label class="input-group" for="inputGroupSelect01">Aficiones:</label>
            <div class="custom-control custom-checkbox checkbox-outline-primary   mr-3 mb-3">
                <input class="custom-control-input" type="checkbox" id="flexSwitchCheckChecked1" name="aficiones[]" value="Lectura">
                <label class="custom-control-label" for="flexSwitchCheckChecked1">Lectura</label>
            </div>
            <div class="custom-control custom-checkbox checkbox-outline-secondary   mr-3 mb-3">
                <input class="custom-control-input" type="checkbox" id="flexSwitchCheckChecked2" name="aficiones[]" value="Negocios">
                <label class="custom-control-label" for="flexSwitchCheckChecked2">Negocios</label>
            </div>
            <div class="custom-control custom-checkbox checkbox-outline-warning   mr-3 mb-3">
                <input class="custom-control-input" type="checkbox" id="flexSwitchCheckChecked3" name="aficiones[]" value="Deportes">
                <label class="custom-control-label" for="flexSwitchCheckChecked3">Deportes</label>
            </div>
            <div class="custom-control custom-checkbox checkbox-outline-dark  mr-3 mb-3">
                <input class="custom-control-input" type="checkbox" id="flexSwitchCheckDefault4" name="aficiones[]" value="Videojuegos">
                <label class="custom-control-label" for="flexSwitchCheckDefault4">Video juegos</label>
            </div>
          </div>
    
          <div class="form-group">
              <input type="submit" value="Registrar" class="btn btn-success " name="registrarEmpleado">
          </div>
    
      </form>  
  </div>
</div>

<?php
include("../vista/components/footer.php");
?>