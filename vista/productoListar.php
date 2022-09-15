<?php
    include_once("components/header.php");
?>


<div class="card card-default">
  <div class="card-header ">
    <h1>Lista de Productos</h1>
  </div>
  <div class="card-body">   
    <table id="productsTable" class="table table-hover table-product" style="width:100%">
        <thead>
        <tr>
          <th> Id </th>
          <th> Clasificación </th>
          <td> PROVEEDOR </td>
          <th> Nombre </th>
          <th> Descripción </th>
          <th> Costo Compra </th>
          <th> Costo Venta </th>
          <th> Stock </th>
          <th> Imagen </th>
          <th> ACCIONES </th>
        </tr>
      </thead>
      <tbody>
        <?php while($datos = mysqli_fetch_array($listaProductos)) { ?>
        <tr>
          <td><?=$datos['id_producto']?></td>
          <td><?=$datos['nombre']?></td>
          <td><?=$datos['empresa']?></td>
          <td><?=$datos['nombre_producto']?></td>
          <td><?=$datos['descripcion']?></td>
          <td><?=$datos['costo_compra']?></td>
          <td><?=$datos['costo_venta']?></td>
          <td><?=$datos['stock']?></td>
          <td> <img src="../imagenes_subidas/<?=$datos['imagenProducto']?>" alt="imagen" height="50px"></td>
          <td style="display: flex; justify-content: center;">
            <a type="button" class="btn btn-sm btn-outline-warning" href="productoModificar.php?id=<?=$datos['id_producto']?>"> 
                <i class="mdi mdi-account-edit"></i>
            </a>
            <form action="productoListar.php" method="POST">
              <input type="hidden" name="id" value="<?=$datos['id_producto']?>">
              <button type="submit" class="btn btn-sm btn-outline-danger" name="eliminar"><i class="mdi mdi-delete-variant"></i></button>
            </form>
          </td>
        </tr>
        <?php
          }
        ?>
    </table>
  </div>



  

<script src="plugins/prism/prism.js"></script>
<script src="plugins/DataTables/DataTables-1.10.18/js/jquery.dataTables.min.js"></script>
<?php
    include_once("components/footer.php");
?>