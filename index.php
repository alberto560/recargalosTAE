<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Inicio de Sesión</title>
  <!-- plugins:css -->
  <script type="text/javascript" src="assets/jquery/jquery-3.4.1.min.js"></script>
  <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <script type="text/javascript" src="assets/js/js_views/js_index.js"></script>
<!--  <link rel="shortcut icon" href="../../images/favicon.png" />-->
</head>

<body>
  <div id="toHome">
    <div class="container-scroller" >
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
        <div class="row flex-grow">
          <div class="col-lg-6 d-flex align-items-center justify-content-center">
            <div class="auth-form-transparent text-left p-3">
              <center>
                <div class="brand-logo">
                    <img src="assets/images/recargalos.png" alt="logo">
                </div>
              </center>
              <h4>¡Bienvenido!</h4>
              <form class="pt-3">
                <div class="form-group">
                  <label for="exampleInputEmail">Usuario:</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0 ">
                        <i class="mdi mdi-account-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control form-control-lg border-left-0" id="inputUser" placeholder="Usuario" required>
                  </div>
                </div>
                <div class="form-group ">
                  <label for="exampleInputPassword">Contraseña:</label>
                  <div class="input-group ">
                    <div class="input-group-prepend bg-transparent ">
                      <span class="input-group-text bg-transparent border-right-0  ">
                        <i class="mdi mdi-lock-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="password" class="form-control form-control-lg border-left-0" id="inputPwd" placeholder="Contraseña" required>
                  </div>
                </div>                
                <div class="my-3">
                  <input type="button" id="btnLogin" name="btnLogin" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" value="INICIAR SESION">
                </div>
              </form>
            </div>
          </div>
          <div id="indicator" style="display: none; text-align: center;" class="loading_img">
          <img src="assets/images/indicator.gif"/>
          </div>
          <div class="col-lg-6 login-half-bg d-flex flex-row">
            <p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright &copy; 2019  All rights reserved. TMAC</p>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>  
  </div>
  
  <!-- container-scroller -->
  <!-- plugins:js -->
  <!-- endinject -->
  <!-- inject:js -->
  <script src="assets/js/off-canvas.js"></script>
  <script src="assets/js/hoverable-collapse.js"></script>
  <script src="assets/js/template.js"></script>
  <!-- endinject -->
  <script type="text/javascript" src="assets/js/js_views/js_index.js"></script>

</body>

</html>
