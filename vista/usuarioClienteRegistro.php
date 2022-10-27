<?php
include("../vista/components/header.php");
?>
<div class="container">
    <div>
        <div>
            <div>
                <h1>REGISTRO DE USUARIO </h1><br>
                <form method="POST" class="form-horizontal" style="margin:0,0 auto">



                    <div class="form-group">
                        <label class="col-lg-2 control-label">CLIENTE:</label>
                        <select name="idcliente" id="idcliente">
                            <option value= "">Seleccione una opcion</option>
                            <?php
                            while ($t = mysqli_fetch_array($ca)) {
                            ?>
                                <option value="<?php echo $t['id_cliente'] ?>"><?php echo $t['razon_social'] ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">USUARIO:</label>
                        <input type="text" name="usuario" id="usuario">
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">CONTRASEÑA</label>
                        <input type="password" name="password" id="pas">
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">MAIL:</label>
                        <input type="text" name="mail" id="mail">
                    </div>


                    <div class="form-group">
                        <input type="submit" value="Registrar" class="btn btn-success " name="registrarUsuario">
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>
<?php
include("../vista/components/footer.php");
?>