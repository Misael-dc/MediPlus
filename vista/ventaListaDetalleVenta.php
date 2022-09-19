<?php include_once('../componentes/header.php');?>

<main class="container">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h1>Listado de Productos Vendidos</h1>
            <a href="reportedetalleventa.php" class="btn btn-outline-info fs-5">Reporte</a>
        </div>
        <div class="card-body">
            <div class="mb-3 ms-3 me-3">
                <form class="d-flex" action="listadetalleventa.php" method="post">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="palabra">
                    <button class="btn btn-outline-success text-center" type="submit" name="buscar">
                        <i class="fab fa-searchengin" style="font-size: 32px; display:flex;"></i>
                    </button>
                </form>
            </div>
            <table class="table table-striped">
                <tr>
                    <th>Id</th>
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th>Costo</th>
                    <th>Fecha</th>
                    
                </tr>
                
                <?php
                require("../conexion.php");

                $palabra = '';
                if (isset($_POST['buscar'])) $palabra = $_POST['palabra']; 

                $consulta = "SELECT dv.id_venta, p.nombreproducto, dv.cantidad, dv.costo, v.fecha 
                            FROM detalle_venta dv 
                            INNER JOIN producto p ON p.id_producto = dv.id_producto
                            INNER JOIN venta v ON dv.id_venta = v.id_venta
                            WHERE p.nombreproducto LIKE '$palabra%'
                            ORDER BY dv.id_venta ASC";
                $respuesta = mysqli_query($conection, $consulta);

                while($reg = mysqli_fetch_array($respuesta)) {
                    
                ?>
                <tr>
                    <td><?php echo $reg['id_venta'] ?></td> 
                    <td><?php echo $reg['nombreproducto'] ?></td>    
                    <td><?php echo $reg['cantidad'] ?></td>    
                    <td><?php echo $reg['costo'] ?></td>    
                    <td><?php echo $reg['fecha'] ?></td>       
                </tr>
                <?php
                    
                    }
                ?> 
            </table>
        </div>
    </div>
</main>
    
<?php include_once('../componentes/footer.php');?>