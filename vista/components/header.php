<!DOCTYPE html>


<html lang="en" dir="ltr">
  <head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Mono - Responsive Admin & Dashboard Template</title>

  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700|Roboto" rel="stylesheet">
  <link href="../plugins/material/css/materialdesignicons.min.css" rel="stylesheet" />
  <link href="../plugins/simplebar/simplebar.css" rel="stylesheet" />

  <!-- PLUGINS CSS STYLE -->
  <link href="../plugins/nprogress/nprogress.css" rel="stylesheet" />
  <link href="../plugins/DataTables/DataTables-1.10.18/css/jquery.dataTables.min.css" rel="stylesheet" />
  
  <link href="../plugins/jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" /> 
  <link href="../plugins/daterangepicker/daterangepicker.css" rel="stylesheet" />
  <!-- <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">  -->
  <link href="../plugins/toaster/toastr.min.css" rel="stylesheet" />  

  <!-- MONO CSS -->
  <link id="main-css-href" rel="stylesheet" href="../css/style.css" />

  <!-- FAVICON -->
  <link href="../images/favicon.png" rel="shortcut icon" />

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">


  <script src="../plugins/nprogress/nprogress.js"></script>
</head>


  <body class="navbar-fixed sidebar-fixed" id="body">
    <script>
      NProgress.configure({ showSpinner: false });
      NProgress.start();
    </script>

    
    <div id="toaster"></div>
    <!-- ====================================
    ——— WRAPPER
    ===================================== -->
    <div class="wrapper">
        <!-- ====================================
          ——— LEFT SIDEBAR WITH OUT FOOTER
        ===================================== -->
        <aside class="left-sidebar sidebar-dark" id="left-sidebar">
          <div id="sidebar" class="sidebar sidebar-with-footer">
            <!-- Aplication Brand -->
            <div class="app-brand">
              <a href="ventaListaProducto.php">
                <img src="../images/logo.png" alt="Mono">
                <span class="brand-name">MediPlus+++</span>
              </a>
            </div>
            <!-- begin sidebar scrollbar -->
            <div class="sidebar-left" data-simplebar style="height: 100%;">
              <!-- sidebar menu -->
              <ul class="nav sidebar-inner" id="sidebar-menu">
                
   
                  <li class="active">
                    <a class="sidenav-item-link" href="index.html">
                      <i class="mdi mdi-briefcase-account-outline"></i>
                      <span class="nav-text">Business Dashboard</span>
                    </a>
                  </li>
                
                
                  <li>
                    <a class="sidenav-item-link" href="analytics.html">
                      <i class="mdi mdi-chart-line"></i>
                      <span class="nav-text">Analytics Dashboard</span>
                    </a>
                  </li>
                
                
                  <!-- <li class="section-title">
                    Apps
                  </li>
                
                
                  <li>
                    <a class="sidenav-item-link" href="chat.html">
                      <i class="mdi mdi-wechat"></i>
                      <span class="nav-text">Chat</span>
                    </a>
                  </li>
                
 
                  <li>
                    <a class="sidenav-item-link" href="contacts.html">
                      <i class="mdi mdi-phone"></i>
                      <span class="nav-text">Contacts</span>
                    </a>
                  </li>        -->
                
                
                  <li class="section-title">
                    UI Elements
                  </li>
                  <?php 
                  $inicio = 'No inicio'; 
                  if ($verificar->verificarInicio() != 'No Inicio') {
                    $inicio = $verificar->verificarInicio(); 
                  }
              
                  if ($inicio == 'empleado') {?>
                    <?php if ($verificar->verificarUsuarioAdmin()) {?>
                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#cargo"
                      aria-expanded="false" aria-controls="charts">
                      <i class="mdi mdi-chart-pie"></i>
                      <span class="nav-text">Cargo</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="cargo" data-parent="#sidebar-menu">
                      <div class="sub-menu">                        
                            <li >
                              <a class="sidenav-item-link" href="cargoRegistro.php">
                                <span class="nav-text">Registrar Cargo</span> 
                              </a>
                            </li>
                            <li >
                              <a class="sidenav-item-link" href="cargoLista.php">
                                <span class="nav-text">Lista Cargos</span> 
                              </a>
                            </li>
                      </div>
                    </ul>
                  </li>
                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#usemp"
                      aria-expanded="false" aria-controls="charts">
                      <i class="mdi mdi-chart-pie"></i>
                      <span class="nav-text">Usuario Empleado</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="usemp" data-parent="#sidebar-menu">
                      <div class="sub-menu">                        
                            <li >
                              <a class="sidenav-item-link" href="empleadoUsuarioRegistro.php">
                                <span class="nav-text">Registrar usuario Empleado</span> 
                              </a>
                            </li>
                            <li >
                              <a class="sidenav-item-link" href="empleadoUsuarioLista.php">
                                <span class="nav-text">Lista Usuarios Empleado</span> 
                              </a>
                            </li>
                      </div>
                    </ul>
                  </li>
                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#clasificacion"
                      aria-expanded="false" aria-controls="charts">
                      <i class="mdi mdi-chart-pie"></i>
                      <span class="nav-text">Clasificación</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="clasificacion" data-parent="#sidebar-menu">
                      <div class="sub-menu">                        
                            <li >
                              <a class="sidenav-item-link" href="clasificacionRegistrar.php">
                                <span class="nav-text">Registrar Clasificación</span> 
                              </a>
                            </li>
                            <li >
                              <a class="sidenav-item-link" href="clasificacionLista.php">
                                <span class="nav-text">Lista Clasificación</span> 
                              </a>
                            </li>
                      </div>
                    </ul>
                  </li>
                    <?php }?>
                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#proveedor"
                      aria-expanded="false" aria-controls="charts">
                      <i class="mdi mdi-chart-pie"></i>
                      <span class="nav-text">Proveedor</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="proveedor" data-parent="#sidebar-menu">
                      <div class="sub-menu">                        
                            <li >
                              <a class="sidenav-item-link" href="proveedorLista.php">
                                <span class="nav-text">Lista proveedores</span> 
                              </a>
                            </li>
                            <li >
                              <a class="sidenav-item-link" href="registrarProveedor.php">
                                <span class="nav-text">Registro proveedor</span> 
                              </a>
                            </li>
                      </div>
                    </ul>
                  </li>
                    <?php if ($verificar->verificarUsuarioAdmin()) {?>
                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#empleado"
                      aria-expanded="false" aria-controls="charts">
                      <i class="mdi mdi-chart-pie"></i>
                      <span class="nav-text">Empleado</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="empleado" data-parent="#sidebar-menu">
                      <div class="sub-menu">                        
                            <li >
                              <a class="sidenav-item-link" href="empleadoLista.php">
                                <span class="nav-text">Lista Empleados</span> 
                              </a>
                            </li>
                            <li >
                              <a class="sidenav-item-link" href="empleadoRegistro.php">
                                <span class="nav-text">Registro Empleado</span> 
                              </a>
                            </li>
                      </div>
                    </ul>
                  </li>
                    <?php }?> 
                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#producto"
                      aria-expanded="false" aria-controls="charts">
                      <i class="mdi mdi-chart-pie"></i>
                      <span class="nav-text">Producto</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="producto" data-parent="#sidebar-menu">
                      <div class="sub-menu">                        
                            <li >
                              <a class="sidenav-item-link" href="productoListar.php">
                                <span class="nav-text">Lista Producto</span> 
                              </a>
                            </li>
                            <li >
                              <a class="sidenav-item-link" href="productoRegistrar.php">
                                <span class="nav-text">Registro Producto</span> 
                              </a>
                            </li>
                      </div>
                    </ul>
                  </li>
                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#venta"
                      aria-expanded="false" aria-controls="charts">
                      <i class="mdi mdi-chart-pie"></i>
                      <span class="nav-text">Venta</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="venta" data-parent="#sidebar-menu">
                      <div class="sub-menu">                        
                            <li >
                              <a class="sidenav-item-link" href="ventaLista.php">
                                <span class="nav-text">Lista Ventas</span> 
                              </a>
                            </li>

                      </div>
                    </ul>
                  </li>
                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#cliente"
                      aria-expanded="false" aria-controls="charts">
                      <i class="mdi mdi-chart-pie"></i>
                      <span class="nav-text">Cliente</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="cliente" data-parent="#sidebar-menu">
                      <div class="sub-menu">                        
                            <li >
                              <a class="sidenav-item-link" href="clienteListar.php">
                                <span class="nav-text">Lista Cliente</span> 
                              </a>
                            </li>
                            <li >
                              <a class="sidenav-item-link" href="clienteRegistrar.php">
                                <span class="nav-text">Registro Cliente</span> 
                              </a>
                            </li>
                      </div>
                    </ul>
                  </li>
                  <?php }?>
                  <!-- para el cliente  -->
                  <?php if ($inicio == 'cliente') {?>

                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#detalle_compra"
                      aria-expanded="false" aria-controls="charts">
                      <i class="mdi mdi-chart-pie"></i>
                      <span class="nav-text">Menu Usuario</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="detalle_compra" data-parent="#sidebar-menu">
                      <div class="sub-menu">                        
                            <li >
                              <a class="sidenav-item-link" href="ventaListaDetalleVenta.php">
                                <span class="nav-text">Historial de Compras</span> 
                              </a>
                            </li>
                      </div>
                    </ul>
                  </li>
                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#producto"
                      aria-expanded="false" aria-controls="charts">
                      <i class="mdi mdi-chart-pie"></i>
                      <span class="nav-text">Producto</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="producto" data-parent="#sidebar-menu">
                      <div class="sub-menu">                        
                            <li >
                              <a class="sidenav-item-link" href="ventaListaProducto.php">
                                <span class="nav-text">Lista Producto</span> 
                              </a>
                            </li>
                      </div>
                    </ul>
                  </li>
                  <?php }?>

                  <li class="section-title">
                    Pages
                  </li>   
                
                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#users"
                      aria-expanded="false" aria-controls="users">
                      <i class="mdi mdi-image-filter-none"></i>
                      <span class="nav-text">User</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="users"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">
                              
                          
                            <li >
                              <a class="sidenav-item-link" href="user-profile.html">
                                <span class="nav-text">User Profile</span>
                                
                              </a>
                            </li>
                          

                            <li >
                              <a class="sidenav-item-link" href="user-activities.html">
                                <span class="nav-text">User Activities</span>
                                
                              </a>
                            </li>
                          
         
                            <li >
                              <a class="sidenav-item-link" href="user-profile-settings.html">
                                <span class="nav-text">User Profile Settings</span>
                                
                              </a>
                            </li>
                          
                        
     
                            <li >
                              <a class="sidenav-item-link" href="user-account-settings.html">
                                <span class="nav-text">User Account Settings</span>
                                
                              </a>
                            </li>
                          
             
                          
                            <li >
                              <a class="sidenav-item-link" href="user-planing-settings.html">
                                <span class="nav-text">User Planing Settings</span>
                                
                              </a>
                            </li>
                          
                        
                   
                            <li >
                              <a class="sidenav-item-link" href="user-billing.html">
                                <span class="nav-text">User billing</span>
                                
                              </a>
                            </li>
                          
            
                            <li >
                              <a class="sidenav-item-link" href="user-notify-settings.html">
                                <span class="nav-text">User Notify Settings</span>
                                
                              </a>
                            </li>

                        
                      </div>
                    </ul>
                  </li>
                
 
                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#authentication"
                      aria-expanded="false" aria-controls="authentication">
                      <i class="mdi mdi-account"></i>
                      <span class="nav-text">Authentication</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="authentication"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">
                        
             
                            <li >
                              <a class="sidenav-item-link" href="sign-in.html">
                                <span class="nav-text">Sign In</span>
                                
                              </a>
                            </li>
                          
       
                          
                            <li >
                              <a class="sidenav-item-link" href="sign-up.html">
                                <span class="nav-text">Sign Up</span>
                                
                              </a>
                            </li>
                          

                            <li >
                              <a class="sidenav-item-link" href="reset-password.html">
                                <span class="nav-text">Reset Password</span>
                                
                              </a>
                            </li>
    
                      </div>
                    </ul>
                  </li>
                


              </ul>

            </div>

            
          </div>
        </aside>
    

      <!-- ====================================
      ——— PAGE WRAPPER
      ===================================== -->
      <div class="page-wrapper">
        
          <!-- Header -->
          <header class="main-header" id="header">
            <nav class="navbar navbar-expand-lg navbar-light" id="navbar">
              <!-- Sidebar toggle button -->
              <button id="sidebar-toggler" class="sidebar-toggle">
                <span class="sr-only">Toggle navigation</span>
              </button>

              <span class="page-title">dashboard</span>

              <div class="navbar-right ">

                <!-- search form -->
                <div class="search-form">
                  <form action="index.html" method="get">
                    <div class="input-group input-group-sm" id="input-group-search">
                      <input type="text" autocomplete="off" name="query" id="search-input" class="form-control" placeholder="Search..." />
                      <div class="input-group-append">
                        <button class="btn" type="button">/</button>
                      </div>
                    </div>
                  </form>
                  <ul class="dropdown-menu dropdown-menu-search">

                    <li class="nav-item">
                      <a class="nav-link" href="index.html">Morbi leo risus</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="index.html">Dapibus ac facilisis in</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="index.html">Porta ac consectetur ac</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="index.html">Vestibulum at eros</a>
                    </li>

                  </ul>

                </div>

                <ul class="nav navbar-nav">

                  
                  <li class="dropdown user-menu">
                    <?php if($inicio != 'No inicio') {?>
                    <button class="dropdown-toggle nav-link" data-toggle="dropdown">
                      <img src="../images/user/user-xs-01.jpg" class="user-image rounded-circle" alt="User Image" />
                      <span class="d-none d-lg-inline-block">
                        <?=$_SESSION['usuario']?> 
                      </span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <li>
                        <a class="dropdown-link-item" href="#">
                          <i class="mdi mdi-account-outline"></i>
                          <span class="nav-text"><?=$_SESSION['nombre_completo']?></span>
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-link-item" href="email-inbox.html">
                          <i class="mdi mdi-diamond-outline"></i>
                          <span class="nav-text"><?php if(isset($_SESSION['id_rol'])) echo $_SESSION['id_rol']; else echo 'Cliente' ?></span>
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-link-item" href="user-activities.html">
                          <i class="mdi mdi-diamond-stone"></i>
                          <span class="nav-text">Activitise</span></a>
                      </li>
                      <li>
                        <a class="dropdown-link-item" href="user-account-settings.html">
                          <i class="mdi mdi-settings"></i>
                          <span class="nav-text">Account Setting</span>
                        </a>
                      </li>

                      <li class="dropdown-footer">
                        <a class="dropdown-link-item" href="zCerrarSesion.php"> <i class="mdi mdi-logout"></i> Salir </a>
                      </li>
                    </ul>

                    <?php }else{?>
                      <div class="d-flex aling-item-center">
                       <a class="btn btn-primary btn-pill" href="login.php" >Iniciar Sesión</a>
                      </div>
                      
                    <?php }?>


                  </li>
                </ul>
              </div>
            </nav>

          </header>

        <!-- ====================================
        ——— CONTENT WRAPPER
        ===================================== -->
        <div class="content-wrapper">
          <div class="content">                
          

