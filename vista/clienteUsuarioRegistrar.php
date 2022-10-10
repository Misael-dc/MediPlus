<!DOCTYPE html>


<html lang="en">
<head>
  <head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>MediPlus+++</title>

  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700|Roboto" rel="stylesheet">
  <link href="../plugins/material/css/materialdesignicons.min.css" rel="stylesheet" />
  <link href="../plugins/simplebar/simplebar.css" rel="stylesheet" />

  <!-- PLUGINS CSS STYLE -->
  <link href="../plugins/nprogress/nprogress.css" rel="stylesheet" />
  
  <!-- MONO CSS -->
  <link id="main-css-href" rel="stylesheet" href="../css/style.css" />

  

  <link href="../images/favicon.png" rel="shortcut icon" />


  <script src="../plugins/nprogress/nprogress.js"></script>
</head>

</head>
  <body class="bg-light-gray" id="body">
          <div class="container d-flex align-items-center justify-content-center" style="min-height: 100vh">
          <div class="d-flex flex-column justify-content-between">
            <div class="row justify-content-center">
              <div class="col-lg-6 col-xl-5 col-md-10 ">
                <div class="card card-default mb-0">
                  <div class="card-header pb-0">
                    <div class="app-brand w-100 d-flex justify-content-center border-bottom-0">
                      <a class="w-auto pl-0" href="#">
                        <img src="../images/logo.png" alt="Mono">
                        <span class="brand-name text-dark">MediPlus+++</span>
                      </a>
                    </div>
                  </div>

                  <div class="card-body px-5 pb-5 pt-0">
                    <h4 class="text-dark text-center mb-5">Registrarse</h4>

                    <form action="clienteUsuarioRegistrar.php" method="POST">
                      <div class="row">
                        <div class="form-group col-md-12 mb-4">
                          <input type="text" class="form-control input-lg" id="usuario" aria-describedby="emailHelp" placeholder="Usuario" name="usuario">
                        </div>
                        <div class="form-group col-md-12 mb-4">
                          <input type="email" class="form-control input-lg" id="email" aria-describedby="emailHelp" placeholder="Correo" name="correo">
                        </div>
                        <div class="form-group col-md-12 ">
                          <input type="password" class="form-control input-lg" id="password" placeholder="Contraseña" name="password">
                        </div>
                        <div class="form-group col-md-12 ">
                          <input type="password" class="form-control input-lg" id="cpassword" placeholder="Confirmar Contraseña" name="cpassword">
                        </div>
                        <div class="form-group col-md-12 mb-4">
                          <input type="text" class="form-control input-lg" id="nombre" aria-describedby="nameHelp" placeholder="Nombre" name="nombre">
                        </div>
                        <div class="form-group col-md-12 mb-4">
                          <input type="text" class="form-control input-lg" id="paterno" aria-describedby="nameHelp" placeholder="Paterno" name="paterno">
                        </div>
                        <div class="form-group col-md-12 mb-4">
                          <input type="text" class="form-control input-lg" id="materno" aria-describedby="nameHelp" placeholder="Materno" name="materno">
                        </div>
                        <div class="form-group col-md-12 mb-4">
                          <input type="text" class="form-control input-lg" id="ciudad" aria-describedby="nameHelp" placeholder="Ciudad" name="ciudad">
                        </div>
                        <div class="form-group col-md-12 mb-4">
                          <input type="text" class="form-control input-lg" id="cedula" aria-describedby="nameHelp" placeholder="Cedula" name="cedula">
                        </div>
                        <div class="col-md-12">
                          <div class="d-flex justify-content-between mb-3">

                            <div class="custom-control custom-checkbox mr-3 mb-3">
                              <input type="checkbox" class="custom-control-input" id="customCheck2">
                              <label class="custom-control-label" for="customCheck2">Acepta los terminos y condiciones.</label>
                            </div>

                          </div>

                          <button type="submit" class="btn btn-primary btn-pill mb-4" name="registrar">Registrarse</button>

                          <p>¿Ya tienes una cuenta?
                            <a class="text-blue" href="login.php">Iniciar Sesion</a>
                          </p>
                        </div>
                      </div>
                    </form>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
</body>
</html>
