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
            <label class="  control-label">Empleado:</label>
              <select name="id_empleado" id="empleado" class="form-control rounded-0">
                  <option value="Seleccione un Empleado">Seleccione un Empleado</option>
                  <?php
                  while ($reg = mysqli_fetch_array($resEmpleado)) {
                  ?>
                      <option value="<?php echo $reg['id_empleado'] ?>"><?php echo $reg['completo'] ?></option>
                  <?php
    
                  }
                  ?>
              </select>
    
          </div>
          <div class="form-group">
            <label class="  control-label">Rol:</label>
              <select name="id_rol" id="rol" class="form-control rounded-0">
                  <option value="Seleccione un Rol">Seleccione un Rol</option>
                  <?php
                  while ($reg2 = mysqli_fetch_array($resRol)) {
                  ?>
                      <option value="<?php echo $reg2['id_rol'] ?>"><?php echo $reg2['rol'] ?></option>
                  <?php
    
                  }
                  ?>
              </select>
    
          </div>
    
          <div class="form-group">
              <label class="  control-label">Usuario:</label>
              <input class="form-control" type="text" name="usuario" id="usuario" required>
          </div>
    
          <div class="form-group">
              <label class="  control-label">Correo:</label>
              <input class="form-control" type="mail" name="mail" id="mail" required> 
          </div>
          <div class="form-group">
              <label class="  control-label">Contraseña:</label>
              <input class="form-control" type="password" name="password" id="password" required>
          </div>
          <div class="form-group">
              <label class="  control-label"> Repita Contraseña:</label>
              <input class="form-control" type="password" name="password2" id="password2" required>
          </div>
    
          <div class="form-group">
              <input type="submit" value="Registrar" class="btn btn-success " name="registrar">
          </div>
    
      </form>  
  </div>
</div>

<?php
include("../vista/components/footer.php");
?>