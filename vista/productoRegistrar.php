<?php
    include_once("components/header.php");
?>
<form action="productoRegistrar.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label  for="inputGroupSelect01">Clasificación: </label>
        <select class="form-control rounded-0" id="inputGroupSelect01" name="idClasificacion">
            <?php
                while ($listaClasificacion = mysqli_fetch_array($datosClasificacion)) {   
            ?>
                <option value="<?= $listaClasificacion['id_clasificacion']?>"><?= $listaClasificacion['nombre']?></option>
            <?php
                }
            ?>
        </select>
    </div>
    <div class="form-group">
        <label for="inputGroupSelect01">Proveedor: </label>
        <select class="form-control rounded-0 " id="inputGroupSelect01" name="idProveedor">
            <?php
                while ($listaProveedor = mysqli_fetch_array($datosProveedor)) {   
            ?>
                <option value="<?= $listaProveedor['id_proveedor']?>"><?= $listaProveedor['empresa']?></option>
            <?php
                }
            ?>
        </select>
    </div>
    <div class="form-group">
        <label for="">Nombre Producto:</label>
        <input class="form-control" type="text" name="nombre">
    </div>
    
    <div class="form-group">
        <label for="">Descripción:</label>
        <input class="form-control" type="text" name="descripcion">
    </div>
    
    <div class="form-group">
        <label for="">Costo Compra:</label>
        <input class="form-control" type="text" name="costoCompra">
    </div>
    <div class="form-group">
        <label for="">Costo Venta:</label>
        <input class="form-control" type="text" name="costoVenta">
    </div>
    <div class="form-group">
        <label for="">Stock:</label>
        <input class="form-control" type="number" name="stock">
    </div>
    <div class="form-group">
        <label for="formFile" class="form-label">Imagen Producto:</label>
        <input class="form-control-file" type="file" id="formFile" name="imagen">
    </div>

  <div class="form-footer mt-6">
    <button type="submit" class="btn btn-primary btn-pill" name="registrar">Registrar</button>
    <button type="submit" class="btn btn-light btn-pill">Cancel</button>
  </div>

</form>    
<?php
    include_once("components/footer.php");
?>