<?php
include("../vista/components/header.php");
?>
<div class="container">
    <div>
        <div>
            <div>
                <h1>MODIFICAR EMPLEADO</h1><br>
                <form method="POST" class="form-horizontal" style="margin:0,0 auto">

                    <div class="form-group">
                        <label class="col-lg-2 control-label">CARNET:</label>
                        <input type="text" name="cedula" id="cedula" value="<?= $r[1]?>">
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">NOMBRE:</label>
                        <input type="text" name="nombre" id="nombre" value="<?= $r[2]?>">
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">APELLIDO PATERNO:</label>
                        <input type="text" name="paterno" id="paterno" value="<?= $r[3]?>">
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">APELLIDO MATERNO:</label>
                        <input type="text" name="materno" id="materno" value="<?= $r[4]?>">
                    </div>

                    <div class="form-group">
                    <label class="col-lg-2 control-label">CARGO:</label>
                        <select name="cargo" id="cargo">
                            <option value="<?= $r[5]?>"><?= $r[12]?></option>
                            
                            <?php
                            while ($t = mysqli_fetch_array($ca)) {
                            ?>
                                <option value="<?php echo $t['id_cargo'] ?>"><?php echo $t['cargo'] ?></option>
                            <?php
                            }
                            ?>
                        </select>

                    </div>


                    <div class="form-group">
                        <label class="col-lg-2 control-label">FECHA DE NACIMIENTO:</label>
                        <input type="date" data-date-format="YYYY-MMMM-DD" name="fechanac" id="fechanac" placeholder="AAAA-MM-DD" value="<?= $r[8]?>">
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">DIRECCIÓN:</label>
                        <input type="text" name="direccion" id="direccion" value="<?= $r[6]?>">
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">TELÉFONO:</label>
                        <input type="text" name="telefono" id="telefono" value="<?= $r[7]?>">
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="genero" id="genero" value="F" <?php
                            if(utf8_encode($r[9]) == 'F') echo "checked";
                        ?>>FEMENINO
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="genero" id="genero" value="M" <?php
                            if(utf8_encode($r[9]) == 'M') echo "checked";
                        ?>> MASCULINO
                    </div>

                    <div class="form-group">
                        <input type="submit" value="Modificar" class="btn btn-success " name="modificarEmpleado">
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<?php
include("../vista/components/footer.php");
?>