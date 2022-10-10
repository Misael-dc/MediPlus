<?php include_once('components/header.php');?>

<main class="container">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h1>Listado de Productos</h1>
           
            <a href="ventaCarrito.php" class="btn btn-outline-info fs-5">
                Carrito: <span class="badge bg-primary"><?=$_SESSION['nroProductos']?></span>
            </a>
        </div>
        <div class="card-body d-flex flex-wrap">
            <?php


            while ($reg = mysqli_fetch_array($respuesta)) {  
                if ($reg['stock'] <= 0) {
                    $button = "<button type='submit' class='btn btn-outline-danger' name='agregar' disabled>Agotado</button>";
                    $on_off = 'disabled';
                }else{
                    $button = "<button type='submit' class='btn btn-outline-warning' name='agregar'>Agregar al Carrito</button>";
                    $on_off = '';
                }
                if (isset($_SESSION['carrito'])) {
                    $lista = $_SESSION['carrito'];          
                    foreach ($lista as $value) {
                        if ($reg['id_producto'] === $value['id']) {
                            $button = "<button type='submit' class='btn btn-outline-success' name='agregar' disabled>Agregado</button>";
                            $on_off = 'disabled';
                        }
                    }
                }
                
            ?>
            <div class="card border-secondary mb-3 mx-2" style="max-width: 18rem; min-width: 12rem;">
                <div class="card-header d-flex justify-content-center">
                    <img src="../imagenes_subidas/<?=$reg['imagenProducto']?>" alt="" height="100px">
                </div>
                <div class="card-header"><?php echo $reg['nombre_producto'] ?></div>
                <div class="card-body text-secondary">
                    <h5 class="card-text">Stock Actual: <span class="badge rounded-pill bg-info text-dark"><?php echo $reg['stock'] ?></span></h5>
                    <h5 class="card-text">Descripción: <?php echo $reg['descripcion'] ?></h5>
                    <p class="card-title">Precio: <?php echo $reg['costo_venta'] ?> Bs.</p>
                    <form action="ventaListaProducto.php" method="post">
                        <p class="card-text">
                            Cantidad: 
                            <input type="number" name="cantidad"  value="1" min="1" max="<?php echo $reg['stock'] ?>" style="height: 25px; width: 40px; text-align:center" <?=$on_off?>>
                        </p>
                        <p>               
                            <input type="hidden" name="costoventa" value="<?=$reg['costo_venta']?>">
                            <input type="hidden" name="id" value="<?=$reg['id_producto']?>">
                            <div class="mt-2">
                                <?= $button?>
                            </div>
                            
                        </p>
                    </form> 
                </div>
            </div>
            <?php      
            }
            ?>
        </div>
    </div>
</main>
<script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>
    
<?php include_once('components/footer.php');?>