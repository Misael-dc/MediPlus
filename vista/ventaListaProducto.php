<?php include_once('components/header.php');?>

<main>
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h1>Listado de Productos</h1>
           
            <a href="ventaCarrito.php" class="btn btn-outline-info fs-5">
                Carrito: <span class="badge bg-primary text-white"><?=$_SESSION['nroProductos']?></span>
            </a>
        </div>
        <div class="card-header d-flex justify-content-center ">
           
            <form class="d-flex" action="ventaListaProducto.php" method="post">
                <input class="form-control h-auto" type="search" placeholder="Search" aria-label="Search" name="palabra">
                <button class="btn btn-outline-success text-center" type="submit" name="buscar">
                    <i class="fab fa-searchengin" style="font-size: 32px; display:flex;"></i>
                </button>
            </form>
            
        </div>
        <div class="card-body d-flex justify-content-around flex-wrap">
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
            <div class="card mb-6 mx-2 shadow" style="max-width: 20rem; min-width: 12rem;">
                <div class="card-header d-flex justify-content-center">
                    <img src="../imagenes_subidas/<?=$reg['imagenProducto']?>" alt="image" height="100px">
                </div>
                <div class="card-header">
                    <strong>Nombre: </strong>
                    <?php echo $reg['nombre_producto'] ?>
                </div>
                <div class="card-body d-flex flex-column justify-content-between">

                    <h5 class="card-text">
                        <strong>Stock: </strong> 
                        <span class="badge rounded-pill bg-info text-dark"><?php echo $reg['stock'] ?></span>
                    </h5>
                    <h5 class="card-text">
                        <strong>Forma: </strong> 
                        <?php echo $reg['forma'] ?>
                    </h5>
                    <h5 class="card-text">
                        <strong>peso: </strong> 
                        <?php echo $reg['peso'] ?>
                    </h5>
                    <h5 class="card-text">
                        <strong>Laboratorio: </strong> 
                        <?php echo $reg['laboratorio'] ?>
                    </h5>
                    <p class="card-text">
                        <strong>Precio: </strong> 
                        <?php echo $reg['costo_venta'] ?> Bs.
                    </p>
                    <form action="ventaListaProducto.php" method="post">
                        <p class="card-text d-flex justify-content-between">
                            <strong>Cantidad: </strong> 
                            <input class="form-control" type="number" name="cantidad"  value="1" min="1" max="<?php echo $reg['stock'] ?>" style="height: 25px; width: 80px; text-align:center; padding-right: 5px" <?=$on_off?>>
                        </p>
                        <p>               
                            <input type="hidden" name="costoventa" value="<?=$reg['costo_venta']?>">
                            <input type="hidden" name="id" value="<?=$reg['id_producto']?>" class="self-end">
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