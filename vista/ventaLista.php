<?php include_once('components/header.php');?>

<main class="container">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h1>Historial de Ventas Realizadas</h1>
            <!-- <a href="reportedetalleventa.php" class="btn btn-outline-info fs-5">Reporte</a> -->
        </div>
        <!-- <div class="mb-3 ms-3 me-3">
                <form class="d-flex" action="listadetalleventa.php" method="post">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="palabra">
                    <button class="btn btn-outline-success text-center" type="submit" name="buscar">
                        <i class="fab fa-searchengin" style="font-size: 32px; display:flex;"></i>
                    </button>
                </form>
            </div> -->
        <div class="card-body">
            
            <table id="productsTable" class="table table-hover table-product" style="width:100%">
                <thead>
                    <tr>
                        <th> ID </th>
                        <th> EMPLEADO </th>
                        <th> CLIENTE </th>
                        <th> Fecha </th>                 
                    </tr>
                </thead>
                
                <?php


                while($reg = mysqli_fetch_array($respuesta)) {
                    
                ?>
                <tbody>
                    <tr>
                        <td><?= $reg['id_venta'] ?></td>    
                        <td><?= $reg['completo_emp'] ?></td>    
                        <td><?= $reg['completo_cli'] ?></td>     
                        <td><?= $reg['fecha'] ?></td>       
                    </tr>
                </tbody>
                <?php
                    
                    }
                ?> 
            </table>
        </div>
    </div>
</main>
    
<?php include_once('components/footer.php');?>