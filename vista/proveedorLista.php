<?php
include("../vista/components/header.php");
?>
<div class="container-fluid">
        <div >
            <button class="btn btn-success col-4 ">
                <a href="../controlador/registrarProveedor.php" class="text-white"> + REGISTRAR NUEVO PROVEEDOR</a>
            </button>
        </div>
        <div class="py-5 text-success"  align="center"><h1>LISTA DE PROVEEDORES</h1></div>
        <div class="py-2">

            <table class="table">
                    <thead class="thead-dark">
                        <td> ID </td>
                        <td> EMPRESA </td>
                        <td> CONTACTO </td>
                        <td> MAIL </td>
                        <td> TELEFONO</td>
                        <td> DIRECCION</td>
                        <td></td>
                        <td></td>
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
                            <td class="text-center">
                                    
                            <a href="../controlador/modificarProveedor.php?id=<?= $fila['id_proveedor'] ?>" class="btn btn-warning col-12 "><i class="fa fa-pencil-square" aria-hidden="true">EDITAR </i> </a>
                            </td>
                            <td class="text-center">
                                
                                <a onclick="return confirm('Desea eliminar este registro?');" href="eliminarProveedor.php?id=<?= $fila['id_proveedor'] ?>" class="btn btn-danger col-12"><i class="fa fa-trash" aria-hidden="true"> ELIMINAR</i> </a>
                            </td>
                        <?php
                            echo "</tr>";
                        }
                        ?>

                    </tbody>
                </table>
            
        </div>
    </div>
</div>
<?php
include("../vista/components/footer.php");
?>