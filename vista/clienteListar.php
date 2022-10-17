<?php
include_once("../vista/components/header.php");
?>

<div class="card card-default">

  <div class="card-header ">
    <h1>Lista de Clientes</h1>
  </div>

  <div class="card-body">
    <table id="productsTable" class="table table-hover table-product" style="width:100%">
      <thead>
        <tr>

          <th> ID </th>
          <th> NOMBRE </th>
          <th> CIUDAD </th>
          <th> CEDULA </th>
          <th> ACCIONES </th>

        </tr>
      </thead>

      <tbody>
        <?php while ($datos = mysqli_fetch_array($listaClientes)) { ?>
          <tr>

            <td><?= $datos['id_cliente'] ?></td>
            <td><?= $datos['nombre_completo'] ?></td>
            <td><?= $datos['ciudad'] ?></td>
            <td><?= $datos['cedula'] ?></td>
            <td style="display: flex; justify-content: center;">

              <a type="button" class="btn btn-sm btn-outline-warning" href="clienteModificar.php?id=<?= $datos['id_cliente'] ?>">
                <i class="mdi mdi-account-edit"></i>
              </a>
              <form action="clienteListar.php" method="POST">
                <input type="hidden" name="id" value="<?= $datos['id_cliente'] ?>">
                <button type="submit" class="btn btn-sm btn-outline-danger" name="eliminar"> <i class="mdi mdi-delete-variant"></i> </button>
              </form>

            </td>

          </tr>
        <?php
        }
        ?>
      
    </table>
  </div>

</div>

<?php
include_once("../vista/components/footer.php");
?>