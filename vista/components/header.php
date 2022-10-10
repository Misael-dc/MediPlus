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
                  <!-- Offcanvas -->
                  
                  <!-- <li class="custom-dropdown">
                    <a class="offcanvas-toggler active custom-dropdown-toggler" data-offcanvas="contact-off" href="javascript:" >
                      <i class="mdi mdi-contacts icon"></i>
                    </a>
                  </li> -->
                  <!-- <li class="custom-dropdown">
                    <button class="notify-toggler custom-dropdown-toggler">
                      <i class="mdi mdi-bell-outline icon"></i>
                      <span class="badge badge-xs rounded-circle">21</span>
                    </button>
                    <div class="dropdown-notify">

                      <header>
                        <div class="nav nav-underline" id="nav-tab" role="tablist">
                          <a class="nav-item nav-link active" id="all-tabs" data-toggle="tab" href="#all" role="tab" aria-controls="nav-home"
                            aria-selected="true">All (5)</a>
                          <a class="nav-item nav-link" id="message-tab" data-toggle="tab" href="#message" role="tab" aria-controls="nav-profile"
                            aria-selected="false">Msgs (4)</a>
                          <a class="nav-item nav-link" id="other-tab" data-toggle="tab" href="#other" role="tab" aria-controls="nav-contact"
                            aria-selected="false">Others (3)</a>
                        </div>
                      </header>

                      <div class="" data-simplebar style="height: 325px;">
                        <div class="tab-content" id="myTabContent">

                          <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tabs">

                            <div class="media media-sm bg-warning-10 p-4 mb-0">
                              <div class="media-sm-wrapper">
                                <a href="user-profile.html">
                                  <img src="images/user/user-sm-02.jpg" alt="User Image">
                                </a>
                              </div>
                              <div class="media-body">
                                <a href="user-profile.html">
                                  <span class="title mb-0">John Doe</span>
                                  <span class="discribe">Extremity sweetness difficult behaviour he of. On disposal of as landlord horrible. Afraid at highly months do things on at.</span>
                                  <span class="time">
                                    <time>Just now</time>...
                                  </span>
                                </a>
                              </div>
                            </div>

                            <div class="media media-sm p-4 bg-light mb-0">
                              <div class="media-sm-wrapper bg-primary">
                                <a href="user-profile.html">
                                  <i class="mdi mdi-calendar-check-outline"></i>
                                </a>
                              </div>
                              <div class="media-body">
                                <a href="user-profile.html">
                                  <span class="title mb-0">New event added</span>
                                  <span class="discribe">1/3/2014 (1pm - 2pm)</span>
                                  <span class="time">
                                    <time>10 min ago...</time>...
                                  </span>
                                </a>
                              </div>
                            </div>

                            <div class="media media-sm p-4 mb-0">
                              <div class="media-sm-wrapper">
                                <a href="user-profile.html">
                                  <img src="images/user/user-sm-03.jpg" alt="User Image">
                                </a>
                              </div>
                              <div class="media-body">
                                <a href="user-profile.html">
                                  <span class="title mb-0">Sagge Hudson</span>
                                  <span class="discribe">On disposal of as landlord Afraid at highly months do things on at.</span>
                                  <span class="time">
                                    <time>1 hrs ago</time>...
                                  </span>
                                </a>
                              </div>
                            </div>

                            <div class="media media-sm p-4 mb-0">
                              <div class="media-sm-wrapper bg-info-dark">
                                <a href="user-profile.html">
                                  <i class="mdi mdi-account-multiple-check"></i>
                                </a>
                              </div>
                              <div class="media-body">
                                <a href="user-profile.html">
                                  <span class="title mb-0">Add request</span>
                                  <span class="discribe">Add Dany Jones as your contact.</span>
                                  <div class="buttons">
                                    <a href="#" class="btn btn-sm btn-success shadow-none text-white">accept</a>
                                    <a href="#" class="btn btn-sm shadow-none">delete</a>
                                  </div>
                                  <span class="time">
                                    <time>6 hrs ago</time>...
                                  </span>
                                </a>
                              </div>
                            </div>

                            <div class="media media-sm p-4 mb-0">
                              <div class="media-sm-wrapper bg-info">
                                <a href="user-profile.html">
                                  <i class="mdi mdi-playlist-check"></i>
                                </a>
                              </div>
                              <div class="media-body">
                                <a href="user-profile.html">
                                  <span class="title mb-0">Task complete</span>
                                  <span class="discribe">Afraid at highly months do things on at.</span>
                                  <span class="time">
                                    <time>1 hrs ago</time>...
                                  </span>
                                </a>
                              </div>
                            </div>

                          </div>

                          <div class="tab-pane fade" id="message" role="tabpanel" aria-labelledby="message-tab">

                            <div class="media media-sm p-4 mb-0">
                              <div class="media-sm-wrapper">
                                <a href="user-profile.html">
                                  <img src="images/user/user-sm-01.jpg" alt="User Image">
                                </a>
                              </div>
                              <div class="media-body">
                                <a href="user-profile.html">
                                  <span class="title mb-0">Selena Wagner</span>
                                  <span class="discribe">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
                                  <span class="time">
                                    <time>15 min ago</time>...
                                  </span>
                                </a>
                              </div>
                            </div>

                            <div class="media media-sm p-4 mb-0">
                              <div class="media-sm-wrapper">
                                <a href="user-profile.html">
                                  <img src="images/user/user-sm-03.jpg" alt="User Image">
                                </a>
                              </div>
                              <div class="media-body">
                                <a href="user-profile.html">
                                  <span class="title mb-0">Sagge Hudson</span>
                                  <span class="discribe">On disposal of as landlord Afraid at highly months do things on at.</span>
                                  <span class="time">
                                    <time>1 hrs ago</time>...
                                  </span>
                                </a>
                              </div>
                            </div>

                            <div class="media media-sm bg-warning-10 p-4 mb-0">
                              <div class="media-sm-wrapper">
                                <a href="user-profile.html">
                                  <img src="images/user/user-sm-02.jpg" alt="User Image">
                                </a>
                              </div>
                              <div class="media-body">
                                <a href="user-profile.html">
                                  <span class="title mb-0">John Doe</span>
                                  <span class="discribe">Extremity sweetness difficult behaviour he of. On disposal of as landlord horrible. Afraid
                                    at highly months do things on at.</span>
                                  <span class="time">
                                    <time>Just now</time>...
                                  </span>
                                </a>
                              </div>
                            </div>

                            <div class="media media-sm p-4 mb-0">
                              <div class="media-sm-wrapper">
                                <a href="user-profile.html">
                                  <img src="images/user/user-sm-04.jpg" alt="User Image">
                                </a>
                              </div>
                              <div class="media-body">
                                <a href="user-profile.html">
                                  <span class="title mb-0">Albrecht Straub</span>
                                  <span class="discribe"> Beatae quia natus assumenda laboriosam, nisi perferendis aliquid consectetur expedita non tenetur.</span>
                                  <span class="time">
                                    <time>Just now</time>...
                                  </span>
                                </a>
                              </div>
                            </div>

                          </div>
                          <div class="tab-pane fade" id="other" role="tabpanel" aria-labelledby="contact-tab">

                            <div class="media media-sm p-4 bg-light mb-0">
                              <div class="media-sm-wrapper bg-primary">
                                <a href="user-profile.html">
                                  <i class="mdi mdi-calendar-check-outline"></i>
                                </a>
                              </div>
                              <div class="media-body">
                                <a href="user-profile.html">
                                  <span class="title mb-0">New event added</span>
                                  <span class="discribe">1/3/2014 (1pm - 2pm)</span>
                                  <span class="time">
                                    <time>10 min ago...</time>...
                                  </span>
                                </a>
                              </div>
                            </div>

                            <div class="media media-sm p-4 mb-0">
                              <div class="media-sm-wrapper bg-info-dark">
                                <a href="user-profile.html">
                                  <i class="mdi mdi-account-multiple-check"></i>
                                </a>
                              </div>
                              <div class="media-body">
                                <a href="user-profile.html">
                                  <span class="title mb-0">Add request</span>
                                  <span class="discribe">Add Dany Jones as your contact.</span>
                                  <div class="buttons">
                                    <a href="#" class="btn btn-sm btn-success shadow-none text-white">accept</a>
                                    <a href="#" class="btn btn-sm shadow-none">delete</a>
                                  </div>
                                  <span class="time">
                                    <time>6 hrs ago</time>...
                                  </span>
                                </a>
                              </div>
                            </div>

                            <div class="media media-sm p-4 mb-0">
                              <div class="media-sm-wrapper bg-info">
                                <a href="user-profile.html">
                                  <i class="mdi mdi-playlist-check"></i>
                                </a>
                              </div>
                              <div class="media-body">
                                <a href="user-profile.html">
                                  <span class="title mb-0">Task complete</span>
                                  <span class="discribe">Afraid at highly months do things on at.</span>
                                  <span class="time">
                                    <time>1 hrs ago</time>...
                                  </span>
                                </a>
                              </div>
                            </div>

                          </div>
                        </div>
                      </div>

                      <footer class="border-top dropdown-notify-footer">
                        <div class="d-flex justify-content-between align-items-center py-2 px-4">
                          <span>Last updated 3 min ago</span>
                          <a id="refress-button" href="javascript:" class="btn mdi mdi-cached btn-refress"></a>
                        </div>
                      </footer>
                    </div>
                  </li> -->
                  <!-- User Account -->
                  
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
                          <i class="mdi mdi-email-outline"></i>
                          <span class="nav-text">Message</span>
                          <span class="badge badge-pill badge-primary">24</span>
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
          

