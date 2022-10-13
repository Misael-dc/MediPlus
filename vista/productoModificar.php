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

    <div>
        <label for="">Forma: </label>
        <select name="forma" id="forma" class="form-control" value="<?=$datoProducto['forma']?>" >
            <option value="Comprimidos">Comprimidos</option>
            <option value="Via Oral">Via Oral</option>
            <option value="Capsulas">Capsulas</option>
            <option value="Inyeccion">Inyeccion</option>
            <option value="Ungüento">Ungüento</option>
            <option value="Gel">Gel</option>
        </select>
    </div><br>

    <label for="">Peso: </label>
    <div class="row form-group">
        
        <div class="col-2">
            <input type="text" name="peso" class="form-control" value="<?=filter_var($datoProducto['peso'], FILTER_SANITIZE_NUMBER_INT)?>">
        </div>
        <div class="col-3">
        <select name="pesoS" id="pesoS" class="form-control">
            <option value="mg">mg</option>
            <option value="mg/ml">mg/ml</option>
            <option value="gr">gr</option>
            <option value="ml">ml</option>
        </select>
        </div>
    </div>

    <div class="form-group">
        <label for="">Laboratorio: </label>
        <input type="text" name="lab" class="form-control" value="<?=$datoProducto['laboratorio']?>">
    </div>

    <div class="form-group">
        <label for="">Fecha Vencimiento: </label>
        <input type="date" name="fechaV" class="form-control" value="<?=date("Y-m-d",strtotime($datoProducto['fecha_vencimiento']))?>" >
    </div>

    <div class="form-group">
        <label for="">Unidad de Venta</label>
        <select name="unidadV" id="unidadV" class="form-control" value="<?=$datoProducto['unidad_venta']?>" >
            <option value="tabletas">Tabletas</option>
            <option value="capsulas">Capsulas</option>
            <option value="ampollas">Ampollas</option>
            <option value="frasco">Frasco</option>
            <option value="lata">Lata</option>
            <option value="sobre">Sobre</option>
        </select>
    </div>

    <div class="form-group">
        <label for="">Tipo de Envase: </label>
        <select name="envase" id="envase" class="form-control" value="<?=$datoProducto['envase']?>" >
            <option value="aluminio">Aluminio</option>
            <option value="vidrio">Vidrio</option>
            <option value="metalico">Metalico</option>
            <option value="blister">Blister</option>
            <option value="plastico">Plastico</option>
        </select>
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