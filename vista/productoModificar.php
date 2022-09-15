<?php
    include_once("components/header.php");
?>
<form action="productoModificar.php" method="POST" enctype="multipart/form-data">
    <input type="hidden" value="<?= $datoProducto['id_producto']?> " name="id">
    <div class="form-group">
        <label  for="inputGroupSelect01">Clasificación: </label>
        <select class="form-control rounded-0" id="inputGroupSelect01" name="idClasificacion">
            <?php
            while ($datoClasificacion = mysqli_fetch_array($listaClasificacion)) {   
                if ($datoClasificacion['id_clasificacion'] == $datoProducto['id_clasificacion']) {
            ?>
                <option selected value="<?= $datoClasificacion['id_clasificacion']?>"><?= $datoClasificacion['nombre']?></option>
            <?php
            }else{

            ?>
                <option value="<?= $datoClasificacion['id_clasificacion']?>"><?= $datoClasificacion['nombre']?></option>
            <?php
                    }
                }
            ?>
        </select>
    </div>
    <div class="form-group">
        <label for="inputGroupSelect01">Proveedor: </label>
        <select class="form-control rounded-0 " id="inputGroupSelect01" name="idProveedor">
            <?php
            while ($datoProveedor = mysqli_fetch_array($listaProveedor)) {   
                if ($datoProveedor['id_proveedor'] == $datoProducto['id_proveedor']) {
            ?>
                <option selected value="<?= $datoProveedor['id_proveedor']?>"><?= $datoProveedor['empresa']?></option>
            <?php

            }else{

            ?>
                <option value="<?= $datoProveedor['id_proveedor']?>"><?= $datoProveedor['empresa']?></option>
            <?php
                }
            }
            ?>
        </select>
    </div>
    <div class="form-group">
        <label for="">Nombre Producto:</label>
        <input class="form-control" type="text" name="nombre" value="<?=$datoProducto['nombre_producto']?>">
    </div>
    
    <div class="form-group">
        <label for="">Descripción:</label>
        <input class="form-control" type="text" name="descripcion" value="<?=$datoProducto['descripcion']?>">
    </div>
    
    <div class="form-group">
        <label for="">Costo Compra:</label>
        <input class="form-control" type="text" name="costoCompra"  value="<?=$datoProducto['costo_compra']?>">
    </div>
    <div class="form-group">
        <label for="">Costo Venta:</label>
        <input class="form-control" type="text" name="costoVenta" value="<?=$datoProducto['costo_venta']?>">
    </div>
    <div class="form-group">
        <label for="">Stock:</label>
        <input class="form-control" type="number" name="stock" value="<?=$datoProducto['stock']?>">
    </div>
    <div class="form-group">
        <label for="formFile" class="form-label">Imagen Producto:</label>
        <input class="form-control-file" type="file" id="formFile" name="imagen">
    </div>

  <div class="form-footer mt-6">
    <button type="submit" class="btn btn-primary btn-pill" name="modificar">Modificar</button>
    <button type="submit" class="btn btn-light btn-pill">Cancel</button>
  </div>

</form>    
<?php
    include_once("components/footer.php");
?>