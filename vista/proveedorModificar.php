<?php
include("../vista/components/header.php");
?>
<div class="container">
    <div>
        <div>
            <div>
                <h1>MODIFICAR PROVEEDOR</h1><br>
                <form method="POST" class="form-horizontal" style="margin:0,0 auto">
                    <div class="form-group">
                        <label class="col-lg-2 control-label">NOMBRE DE LA EMPRESA:</label>
                        <input type="text" name="empresa" id="empresa" value="<?= $r[1]?>">
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">CONTACTO:</label>
                        <input type="text" name="contacto" id="contacto" value="<?= $r[2]?>">
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">CORREO ELECTRONICO:</label>
                        <input type="text" name="mail" id="mail" value="<?= $r[3]?>">
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">TELEFONO:</label>
                        <input type="text" name="telefono" id="telefono" value="<?= $r[4]?>">
                    </div>


                    <div class="form-group">
                        <label class="col-lg-2 control-label">DIRECCIÓN:</label>
                        <input type="text" name="direccion" id="direccion" value="<?= $r[5]?>">
                    </div>

                    <div class="form-group">
                        <input type="submit" value="Modificar" class="btn btn-success " name="modificarProveedor">
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>
<?php
include("../vista/components/footer.php");
?>