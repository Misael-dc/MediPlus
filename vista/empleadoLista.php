<?php
include("../vista/components/header.php");
?>
<div class="card card-default">
  <div class="card-header ">
    <h1>Lista de Empleados</h1>
  </div>
  <div class="card-body">   
    <table id="productsTable" class="table table-hover table-product" style="width:100%">
        <thead >
            <tr>
                <th> C. I. </th>
                <th> NOMBRE COMPLETO </th>
                <th> DIRECCION </th>
                <th> TELEFONO </th>
                <th> FECHA DE NACIMIENTO </th>
                <th> GENERO </th>
                <th> CARGO </th>
                <th> ACCCIONES </th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($fila = mysqli_fetch_array($res)) {

                echo "<tr>";
                echo " <td>" . $fila['ci'] . "</td>";
                echo " <td>" . $fila['nombreC'] . "</td>";
                echo " <td>" . $fila['direccion'] . "</td>";
                echo " <td>" . $fila['telefono'] . "</td>";
                echo " <td>" . $fila['fechanacimiento'] . "</td>";
                echo " <td>" . $fila['genero'] . "</td>";
                echo " <td>" . $fila['cargo'] . "</td>";
            ?>
            <td class="text-center">   
                <a href="modificarEmpleado.php?id=<?= $fila['id_empleado'] ?>" class="btn btn-sm btn-outline-warning"><i class="fa fa-pencil-square" aria-hidden="true">EDITAR </i> </a>
                <a onclick="return confirm('Desea eliminar este registro?');" href="eliminarempleado.php?id=<?= $fila['id_empleado'] ?>" class="btn btn-sm btn-outline-danger"><i class="fa fa-trash" aria-hidden="true"> ELIMINAR</i> </a>
            </td>
            <?php
                echo "</tr>";
            }
            ?>

        </tbody>
      </table>

  </div>
</div>



<?php
include("../vista/components/footer.php");
?>