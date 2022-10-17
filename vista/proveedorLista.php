<?php
include("../vista/components/header.php");
?>


<div class="card card-default">
  <div class="card-header ">
    <h1>Lista de Proveedores</h1>
    <a href="../vista/reportes/reporteproveedor.php"class="btn btn-sm btn-outline-primary" ><i class="mdi mdi-pencil-box"></i></a>
  </div>
  <div class="card-body">   
      <table id="productsTable" class="table table-hover table-product" style="width:100%">
        <thead>
            <td> ID </td>
            <td> EMPRESA </td>
            <td> CONTACTO </td>
            <td> MAIL </td>
            <td> TELEFONO </td>
            <td> DIRECCION </td>
            <td> ACCIONES </td>
        </thead>
        <tbody>
            <?php
            while ($fila = mysqli_fetch_array($r)) {

              echo "<tr>";
              echo " <td>" . $fila['id_proveedor'] . "</td>";
              echo " <td>" . $fila['empresa'] . "</td>";
              echo " <td>" . $fila['contacto'] . "</td>";
              echo " <td>" . $fila['mail'] . "</td>";
              echo " <td>" . $fila['telefono'] . "</td>";
              echo " <td>" . $fila['direccion'] . "</td>";
            ?>
              <td>
                        
              <a href="../controlador/modificarProveedor.php?id=<?= $fila['id_proveedor'] ?>" class="btn btn-sm btn-outline-warning"><i class="fa fa-pencil-square" aria-hidden="true">EDITAR </i> </a> 
                <a onclick="return confirm('Desea eliminar este registro?');" href="eliminarProveedor.php?id=<?= $fila['id_proveedor'] ?>" class="btn btn-sm btn-outline-danger"><i class="fa fa-trash" aria-hidden="true"> ELIMINAR</i> </a>
              </td>
            <?php
              echo "</tr>";
            }
            ?>

        </tbody>
    </table>
  </div>
</div>

        <!-- <div >
            <button class="btn btn-success col-4 ">
                <a href="../controlador/registrarProveedor.php" class="text-white"> + REGISTRAR NUEVO PROVEEDOR</a>
            </button>
        </div> -->

<?php
include("../vista/components/footer.php");
?>