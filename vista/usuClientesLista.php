<?php
    include_once("components/header.php");
?>
    <h1>Bienvenido Admin</h1>
    <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Listado de Usuarios</h4>

                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">ID </th>
                            <th scope="col">Razón Social</th>
                            <th scope="col">Usuario</th>
                            <th scope="col">Correo</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php
                            
                            while($reg = mysqli_fetch_array($res)){
                                echo "<tr>";
                                echo "<td>".$reg['id_usuario']."</td>";
                                echo "<td>".$reg['nombre']."</td>";
                                echo "<td>".$reg['usuario']."</td>";
                                echo "<td>".$reg['mail']."</td>";
                                echo "<td><a href='../controlador/usuclienteModifica.php?id=".$reg['id_usuario']."' class='btn btn-warning'>Modificar</a></td>";
                                echo "<td><a href='../controlador/inactivarusuarioCliente.php?id=".$reg['id_usuario']."' class='btn btn-danger'>Inactivar</a></td>";
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                      </table>
                      <br>
                    <a type="button" class="btn btn-inverse-info btn-fw" href="../controlador/registrarUsuarioCliente"><i class="mdi mdi-table-large menu-ico"></i>Registrar Usuario</a>
                    <a type="button" class="btn btn-inverse-info btn-fw" href="../controlador/listarUsuariosClientesInac.php"><i class="mdi mdi-table-large menu-ico"></i>Usuarios Inactivos</a>
                    <a type="button" class="btn btn-inverse-info btn-fw" href="index.php"><i class="mdi mdi-table-large menu-ico"></i>Salir</a>
                    <a type="button" class="btn btn-inverse-info btn-fw" href="Cliente/registroCliente.php"><i class="mdi mdi-table-large menu-ico"></i>Registro</a>
                    </div>
                  </div>
                </div>
<?php
    include_once("components/footer.php");
?>