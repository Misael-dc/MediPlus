<?php include_once('components/header.php');?>

<main class="container">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h1>Productos Agregados al Carrito</h1>  
            <div>
            Carrito: <span class="badge bg-success"><?=$_SESSION['nroProductos']?></span>
            </div> 
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <tr>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Costo Unidad</th>
                    <th>Cantidad</th>
                    <th>Sub Total</th>
                    <th>Acciones</th>
                </tr>
                
                <?php
                
                if (isset($_POST['btnVenta'])) {
                    
                }
                
                if (isset($_SESSION['carrito'])) {
                    $total = 0;
                    $lista = $_SESSION['carrito'];
                    foreach ($lista as $value) {
                        $id = $value['id'];
                        $respuesta = $producto->listar("");
                        
                        $reg = mysqli_fetch_array($respuesta);
                        // $subtotal = $value['cantidad'] * $reg['costo_venta'] ;
                        $subtotal = $value['subtotal']  ;
                        $total += $subtotal
                ?>
                    <tr>
                        <td><?php echo $reg['nombre_producto'] ?></td>    
                        <td><?php echo $reg['descripcion'] ?></td>    
                        <td><?php echo $reg['costo_venta'] ?> Bs.</td>    
                        <td><?php echo $value['cantidad'] ?></td>    
                        <td><?php echo $subtotal?></td>    
                        <td class="d-flex justify-content-center">
                            <form action="ventaEliminaCarrito.php" method="POST">
                                <input name= "idProducto" type="hidden" value="<?=$id?>" >
                                <button type="submit" class="btn btn-danger" name="btnEliminar" ><i class="far fa-trash-alt"></i></button>
                            </form>
                        </td>
                    </tr>
       
                <?php
                    }
                }
                if(count($_SESSION['carrito']) == 0){
                ?>        
                    <tfoot>
                        <tr><td colspan='6'><center> No Se Agregó Ningún Producto!</center></td></tr>
                    </tfoot>
                </table>
            
                    
            <?php
                }else{
                $recepcion = $cliente->listar("");
            ?>
            </table>
            <div >
                <form action="ventaRealizar.php" method="POST" >
                    <div class="d-flex justify-content-around">
                        <input name="total" type="hidden" value="<?=$total?>">
                        <div class="col-auto">
                            <label for="" style="display: inline-block;">Cliente:</label>
                            <select class="form-select" name="idCliente" style="display: inline-block; width: auto;">   
                            <?php
                                while($fila = mysqli_fetch_array($recepcion)){
                                    echo "<option value=".$fila['id_cliente'].">".$fila['razon_social']."</option>";
                                }
                            ?>
                            </select>
                        </div>
                        <div class="col-auto">
                            <label for="">Total:</label>
                            <input name= "total" type="text" value="<?=$total?>" disabled style="text-align: center; border:none; width: 50px;">
                            <p style="display: inline-block;">Bs</p>
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn btn-warning" name="btnVenta">Realizar venta</button>
                        </div>
                    </div>
                </form>
                
                
            </div>
            <?php
                }
            ?>
</div>
    </div>
</main>
    
<?php include_once('components/footer.php');?>