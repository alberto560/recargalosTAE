<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Inicio</title>

  <script type="text/javascript" src="assets/jquery/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="assets/js/js_views/js_consultas.js"></script>
  <script type="text/javascript" src="assets/js/js_views/js_home.js"></script>
  <script type="text/javascript" src="assets/js/js_views/js_recargas.js"></script>
  <script type="text/javascript" src="assets/js/js_views/js_env-rec.js"></script>
  <script type="text/javascript" src="assets/js/util/alertify.min.js"></script>
  <script type="text/javascript" src="assets/js/util/intro.js"></script>
  <script type="text/javascript" src="assets/js/validate/validate1.19.1.js"></script>
  <script type="text/javascript" src="assets/js/validate/validate_rules.js"></script>

  <!-- plugins:css -->
  <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
  <!-- plugin css for this page -->
  <link rel="shortcut icon" href="assets/images/recargalos.png" />

  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-4-3-1.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/mdb.min.css" >
  <link rel="stylesheet" type="text/css" href="assets/css/css.css">
  <link rel="stylesheet" type="text/css" href="assets/css/style-media.css">
  <link rel="stylesheet" type="text/css" href="assets/css/util/alertify.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/util/introjs.css">
  <link rel="stylesheet" type="text/css" href="assets/css/util/introjs-modern.css">
  <!-- End plugin css for this page -->
  <link rel="stylesheet" href="assets/css/util/fontawesome.css">
  <link rel="manifest" href="manifest.json">
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0  fixed-top d-flex flex-row ">
        <div class="navbar-brand-wrapper d-flex justify-content-center info-color-dark z-depth-1" style="border-color:#0099CC">
          <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">
              <a id="logoAdd" class="navbar-brand brand-logo imagearea" href="home.php"><img id="logoHome" /></a>
              <a id="logoAdd_resp" class="navbar-brand brand-logo-mini imagearea" href="home.php"><img id="logoHome_resp" /></a>
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
               <span class="mdi mdi-sort-variant text-white"></span>
            </button>
          </div>
        </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end info-color-dark " style="border-color:#0099CC; box-shadow: 0 8px 6px -5px rgba(0, 0, 0, 0.2)">
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown mr-1">
            <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center" id="messageDropdown" data-toggle="dropdown">
              <i class="mdi mdi-message mx-0 text-white"></i>
              <!--span class="count"></span-->
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="messageDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Messages</p>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                    <img src="assets/images/face5.jpg" alt="image" class="profile-pic">
                </div>
                <div class="item-content flex-grow" id="messa">
                  <h6 class="ellipsis font-weight-normal">David Grey
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    <label id="labelTXT"></label></br>
                    <label id="labelMSG"></label>
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item nav-profile dropdown">
            <div class="nav-link  imagearea2 "  id="profileDropdown">
              <img id="profile_logo" />
            </div>
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" id="profileDropdown">
              <span class="nav-profile-name text-white">Louis Barnett</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a id="sett" class="dropdown-item" data-toggle="modal" data-target="#modalSettingsHome">
                <i class="mdi mdi-settings text-primary "></i>
                Ajustes
              </a>
              <a class="dropdown-item" href="index.php">
                <i class="mdi mdi-logout text-primary"></i>
                Cerrar Sesión
              </a>
            </div>
          </li>
        </ul>

        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu text-white"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav" data-step="1" data-intro="Menú de categorias">
          <li class="nav-item active">
            <a class="nav-link" href="home.php">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Inicio</span>
            </a>
          </li>
          <li class="nav-item" id="li_recargas">
            <a class="nav-link" data-toggle="collapse" href="#ui-recargas" aria-expanded="false" aria-controls="ui-recargas">
              <i class="mdi mdi-cellphone-android menu-icon"></i>
              <span class="menu-title">RECARGAS</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse mc" id="ui-recargas">
              <ul class="nav flex-column sub-menu">
                <div class="ocultar">
                <li class="nav-item"> <a class="nav-link fl" id="return_paquete">Paquetes</a></li>
                <li class="nav-item"> <a class="nav-link fl" id="return_recarga">Recargas</a></li>
                <li class="nav-item"> <a class="nav-link fl" id="return_consultas" >Consulta Procesados</a></li>
                <li class="nav-item"> <a class="nav-link fl" id="return_edocuenta">Estado de cuenta</a></li>
                <li class="nav-item"> <a class="nav-link fl" id="return_micuenta">Mi cuenta</a></li>
                </div>
              </ul>
            </div>
          </li>
          <li class="nav-item" id="li_pagos">
            <a class="nav-link" data-toggle="collapse" href="#ui-pago_serv" aria-expanded="false" aria-controls="ui-basic" >
              <i class="mdi mdi-credit-card-multiple menu-icon"></i>
              <span class="menu-title">PAGO DE SERVICIOS</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse mc" id="ui-pago_serv">
              <ul class="nav flex-column sub-menu">
                <div class="ocultar">
                <li class="nav-item"> <a class="nav-link fl" id="return_ps_pagos">Pagos</a></li>
                <li class="nav-item"> <a class="nav-link fl" id="return_reportes">Reportes</a></li>
                <!--li class="nav-item"> <a class="nav-link" href=# id="return_ps_usuarios">Usuarios</a></li-->
                </div>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="modal" data-target="#modalmisaldo" id="misaldo">
              <i class="mdi mdi-square-inc-cash menu-icon"></i>
              <div class="ocultar">
              <span class="menu-title">SALDO</span>
              </div>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#" id="return_depositos" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-cart menu-icon"></i>
              <div class="ocultar">
              <span class="menu-title">COMPRAS</span>
              </div>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" id="return_cli_us" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-account "></i>
              <div class="ocultar">
              <span class="menu-title">CLIENTES/USUARIOS</span>
              </div>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-admon" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-chart-pie menu-icon"></i>
              <span class="menu-title">ADMINISTRACION</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse mc" id="ui-admon">
              <ul class="nav flex-column sub-menu">
                <div class="ocultar">
                <li class="nav-item"> <a class="nav-link fl" data-toggle="modal" data-target="#modal_mensajes">Mensajes</a></li>
                <!--li class="nav-item"> <a class="nav-link" href=# id="return_mclientes">Mis clientes</a></li-->
                </div>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <div>
              <div class="redimen2 ">
                <a  class="nav-link" id="btnHelp" data-toggle="modal" data-target="#modal_banner" aria-expanded="false" aria-controls="ui-basic">
                    <i class="mdi mdi-comment-question-outline menu-icon"></i>
                    <div class="ocultar">
                    <span class="menu-title">AYUDA</span>
                    </div>
                </a>
              </div>
              <div class="redimen">
                  <a class="nav-link" data-toggle="collapse" aria-expanded="false" aria-controls="ui-basic" href="javascript:void(0);" onclick="javascript:introJs().setOption('showProgress',true).setOption('showBullets', false).start();">
                    <i class="mdi mdi-comment-question-outline menu-icon"></i>
                    <span class="menu-title">AYUDA</span>
                  </a>
              </div>
            </div>
            <!--a class="nav-link" data-toggle="collapse" aria-expanded="false" aria-controls="ui-basic" href="javascript:void(0);" onclick="javascript:introJs().setOption('showProgress',true).setOption('showBullets', false).start();">
              <i class="mdi mdi-comment-question-outline menu-icon"></i>
              <span class="menu-title">AYUDA</span>
            </a-->
          </li>
          <li>
            <div >
              <div class="row justify-content-start">
                <div class="col-2 col-md-2">
                  <a class="nav-link  justify-content-center align-items-center" href="#" >
                    <i class=" mdi mdi-whatsapp fa-2x text-success"></i>
                    <span class="count"></span>
                  </a>
                </div>
                <div class="col-2 col-md-2">
                  <a class="nav-link  align-items-center justify-content-center" href="#">
                    <i class=" mdi mdi-telegram fa-2x text-info"></i>
                    <span class="count"></span>
                  </a>
                </div>
                <div class="col-2 col-md-2">
                  <a class="nav-link  align-items-center justify-content-center" href="https://www.facebook.com/Recargalos/" target="blank">
                    <i class="mdi mdi-facebook-box fa-2x text-blue"></i>
                    <span class="count"></span>
                  </a>
                </div>
              </div>
            </div>
          </li>
        </ul>

      </nav>
      <!-- partial -->
      <div class="main-panel table-responsive" id="result">
        <center>
        <div class="contenedor-resp">
          <br>
          <div class="row" data-step="2" data-intro="Vista de inicio">
            <div class="col-12 col-md-6 grid-margin stretch-card">
              <div class="card-resp" data-step="3" data-intro="Recargas mas solicitadas">
                <div class="card-body">
                  <h4 class=""><b>Recárgalos TAE</b></h4>
                  <div id="rec">
                  </div>
                </div>
              </div>
            </div>

            <div class="col-12 col-md-6 grid-margin stretch-card">
              <div class="card-resp" data-step="6" data-intro="Pagos mas solicitados">
                <div class="card-body">
                  <h4 class=""><b>Pago de Servicios</b></h4>
                  <div id="payments">

                  </div>
                </div>
              </div>
            </div>
            <label id="today_start" style="display:none" disabled></label>
            <label id="today_end" style="display:none" disabled></label>
            <div class="col-md-12 stretch-card">
              <div class="card" data-step="9" data-intro="Recargas realizadas">
                <div class="card-body">
                  <p class="card-title">Compras recientes</p>
                  <div class="row justify-content-md-center">
                    <div id="contenedorConsulta" class="table-responsive col-12 col-md-10 ">

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </center>
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2018 <a href="https://www.tmac.mx/" target="_blank">TMAC</a>. All rights reserved.</span>
          </div>
        </footer>
        <!-- partial -->
      </div>

      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>

  <!-- Modal Comfiguracíon Perfil -->
  <div class="modal fade" id="modalSettingsHome" tabindex="-1" role="dialog" aria-labelledby="settings-profile" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header blue-gradient">
          <h3 class="modal-title w-100 font-weight-bold text-center text-white" id="settings-profile"><b>Configuración Perfil</b></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="custom-file col-md-10">
            <h5><b>Cambiar Logo</b></h5>
            <div class="custom-file">
              <input class="classhere" type="file" id="logo" name="logo" accept=".png">
            </div></br></br>
            <h5><b>Cambiar foto de Perfil</b></h5>
            <div class="custom-file">
              <input class="classhere2" type="file" name="logo2" id="logo2" accept=".png, .jpg, .jpeg">
            </div>
          </div>
          </br></br></br>
          <div class="col-md-10">
            <form id="pass">
              <h5><b>Cambiar Contraseña</b></h5>
              <input type="password" class="form-control" name="newpsw" id="newpsw" placeholder="Nueva Contraseña"></br>
              <input type="password" class="form-control" name="confnewpwd" id="confnewpwd" placeholder="Confirme Contraseña">
            </form>
          </div>
          <br>
          <!-- Default switch -->
          <div class=" col-md-10">
            <b><label id="lblNotif">Noficaciones </label></b>
          </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-primary btn-sm" id="btnPWD" name="btnPWD" data-dismiss="modal">Guardar Cambios</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Termina Modal -->

  <!-- Modal mi_saldo-->
  <div class="modal fade" id="modalmisaldo" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <!-- Add .modal-dialog-centered to .modal-dialog to vertically center the modal -->
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
          <div class="modal-header blue-gradient color-block">
            <h5 class="modal-title w-100 text-white font-weight-bold" id="exampleModalLongTitle">Mi Saldo</h5>
          </div>
          <div class="modal-body">
            <div class="row justify-content-center">
              <div class="col-7 col-md-6">
                <center>
                <label for="fechaH">Fecha y hora de consulta</label>
                <b><label name="fechaH" id="fechaH"></label></b>
                </center>
              </div>
            </div>
            <br>
            <div class="row justify-content-start">
              <div class="col-12 col-md-6">
                <center>
                <label for="saldoTA">Saldo Disponible</label>
                <h1><b><label id="saldo_disp" class="resaltado">$9999</label></b></h1>
                </center>
              </div>
              <div class="col-12 col-md-6">
                <center>
                <label for="saldoDist">Saldo actual del distribuidor</label>
                <h1><b><label id="saldo_distribuidor" class="resaltado">$99990</label></b></h1>
                </center>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
          </div>
      </div>
    </div>
  </div>
  <!--End modal mi_saldo-->

  <!-- Modal apartado mensajes-->
  <div class="modal fade" id="modal_mensajes" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title w-100 text-center">Mensajes</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body mx-3">
          <div class="d-flex justify-content-end">
            <a href="" title="Nuevo mensaje" data-toggle="modal" data-target="#new">
              <!--i class="fas fa-plus-circle fa-2x text-info pr-3"></i-->
              <i class="mdi mdi-message-plus fa-2x text-info pr-3"></i>
            </a>
            <a href="" title="Mensajes enviados" data-toggle="modal" data-target="#new2">
              <!--i class="fas fa-inbox fa-2x text-info pr-3"></i-->
              <i class="mdi mdi-inbox fa-2x text-info pr-3"></i>
            </a>
            <a>
              <i class="mdi mdi-help-circle fa-2x text-info pr-3"></i>
            </a>
          </div>
          <!-- Inicia list group -->
            <div class="row">
                <div class="col-md-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="col-12">
                        <div class="list-group" id="list-tab" role="tablist">
                           <a class="list-group-item list-group-item-action" id="list-mtelcel-list" data-toggle="list" href="#list-mtelcel" role="tab" aria-controls="mtelcel">Mensajes telcel</a>
                           <a class="list-group-item list-group-item-action" id="list-multimarca-list" data-toggle="list" href="#list-multimarca" role="tab" aria-controls="multimarca">Mensajes multimarca</a>
                           <a class="list-group-item list-group-item-action" id="list-administracion-list" data-toggle="list" href="#list-administracion" role="tab" aria-controls="administracion">Mensajes administración</a>
                           <a class="list-group-item list-group-item-action" id="list-tmac-list" data-toggle="list" href="#list-tmac" role="tab" aria-controls="tmac">Cuentas bancarias TMAC</a>
                        </div>
                      </div>
                     </div>
                  </div>
                </div>

            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                      <div class="col-12">
                          <div class="tab-content" id="nav-tabContent">
                             <div class="tab-pane fade" id="list-mtelcel" role="tabpanel" aria-labelledby="list-mtelcel-list">
                                1
                             </div>
                             <div class="tab-pane fade" id="list-multimarca" role="tabpanel" aria-labelledby="list-multimarca-list">
                                2
                             </div>
                             <div class="tab-pane fade" id="list-administracion" role="tabpanel" aria-labelledby="list-administracion-list">
                                3
                             </div>
                             <div class="tab-pane fade" id="list-tmac" role="tabpanel" aria-labelledby="list-tmac-list">
                                4
                             </div>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
          <!-- termina list group -->
        </div>
        <div class="modal-footer d-flex justify-content-center">
          <!--button class="btn btn-indigo">Send <i class="fas fa-paper-plane-o ml-1"></i></button-->
          <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>
    <!-- Modal nuevo mensaje -->
      <div class="modal fade" id="new" tabindex="-1" role="dialog" aria-labelledby="list-settings2-list" aria-hidden="true">
        <!-- Change class .modal-sm to change the size of the modal -->
        <div class="modal-dialog modal-md" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title w-100" id="myModalLabel">Nuevo mensaje</h4>
                <button type="button" id="newmessage" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
              <div class="col-12">
                <label for="titulo">Titulo:</label>
                <input type="text" name="titulo_mensaje" id="titulo_mensaje" class="form-control">
              </div>
              <!--div class="col-12">
                <p></p>
                <label for="contenido">Mensaje:</label>
                <input type="text" name="linea_mensaje" id="linea_mensaje" class="form-control">
              </div-->
            </div>
            <div class="col-12">
              <div class="field_wrapper">
                  <div class="col-12" id="TextBoxesGroup"><!-- se borra el id si se cambia el metodo agrergar lineas -->
                    <label for="contenido">Mensaje:</label>
                    <!--input type='button' value='Add Button' id='addButton'-->
                    <!--input type='button' value='Remove Button' id='removeButton'-->
                      <label style="display:block; width:x; height:y; text-align:right;">
                      <a id='addButton'><i class="fas fa-plus-circle fa-1x text-info pr-3"></i></a>
                      <a id='removeButton'><i class="far fa-times-circle fa-1x red-text pr-3"></i></a>
                      </label>
                      <div class="" id="TextBoxDiv1"><!--todos este div se puede borrar -->
                          <input type="text" id="textbox1" name="textbox1" class="form-control" value="">
                      </div>
                  </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cerrar</button>
              <button type="button" class="btn btn-primary btn-sm">Enviar</button>
            </div>
          </div>
        </div>
      </div>
    <!-- Termina modal nuevo mensaje -->
    <!-- Modal de mensajes enviados -->
    <div class="modal fade" id="new2" tabindex="-1" role="dialog" aria-labelledby="list-settings2-list" aria-hidden="true">
      <!-- Change class .modal-sm to change the size of the modal -->
      <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title w-100" id="myModalLabel">Mensajes enviados</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
            <div class="col-12">
              <table class="table text-center table-striped table-bordered">
                <thead>
                  <tr>
                    <th class="text-center">Mensajes</th>
                    <th class="text-center">Opción</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="pt-3-half">Aurelia Vega</td>
                    <td class="pt-3-half justify-content-end"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0">Eliminar</button></td>
                  </tr>
                  <tr>
                    <td class="pt-3-half">pepe pecas</td>
                    <td class="pt-3-half justify-content-end"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0">Eliminar</button></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Termina modal de mensajes enviados -->
  <!-- Termina modal apartado mensajes -->

  <!-- Modal banner -->
    <div class="modal fade" id="modal_banner" tabindex="-1" role="dialog" aria-labelledby="list-settings-list" aria-hidden="true">
      <!-- Change class .modal-sm to change the size of the modal -->
      <div class="modal-dialog modal-md" role="document" >
        <div class="modal-content">
          <div class="modal-header blue-gradient"><h4 class="modal-title w-100 font-weight-bold text-center text-white" id="myModalLabel" style="text-align:center;">Demo de la página web</h4></div>
          <div class="modal-body">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class='carousel-item active'><img class='d-block w-100' src='assets/images/banner/1-1.png' alt='Second slide'></div>
                <div class='carousel-item'><img class='d-block w-100' src='assets/images/banner/2.png' alt='Third slide'></div>
                <div class='carousel-item'><img class='d-block w-100' src='assets/images/banner/2-1.png' alt='Fourth slide'></div>
                <div class='carousel-item'><img class='d-block w-100' src='assets/images/banner/3.png' alt='Fifth slide'></div>
                <div class='carousel-item'><img class='d-block w-100' src='assets/images/banner/4.png' alt='Sixth slide'></div>
                <div class='carousel-item'><img class='d-block w-100' src='assets/images/banner/5.png' alt='Seveenth slide'></div>
                <div class='carousel-item'><img class='d-block w-100' src='assets/images/banner/6.png' alt='Eighth slide'></div>
                <div class='carousel-item'><img class='d-block w-100' src='assets/images/banner/7.png' alt='Ninth slide'></div>
                <div class='carousel-item'><img class='d-block w-100' src='assets/images/banner/8.png' alt='Tenth slide'></div>
                <div class='carousel-item'><img class='d-block w-100' src='assets/images/banner/9.png' alt='Eleventh slide'></div>
                <div class='carousel-item'><img class='d-block w-100' src='assets/images/banner/10.png' alt='Twelfth slide'></div>
                <div class='carousel-item'><img class='d-block w-100' src='assets/images/banner/11.png' alt='Thirteenth slide'></div>
                <div class='carousel-item'><img class='d-block w-100' src='assets/images/banner/12.png' alt='Fourteenth slide'></div>
                <div class='carousel-item'><img class='d-block w-100' src='assets/images/banner/13.png' alt='Fifteenth slide'></div>
                <div class='carousel-item'><img class='d-block w-100' src='assets/images/banner/14.png' alt='Sixteenth slide'></div>
                <div class='carousel-item'><img class='d-block w-100' src='assets/images/banner/15.png' alt=' Seventeenth slide'></div>
                <div class='carousel-item'><img class='d-block w-100' src='assets/images/banner/16.png' alt='Eighteenth slide'></div>
                <div class='carousel-item'><img class='d-block w-100' src='assets/images/banner/17.png' alt='Nineteenth slide'></div>
                <div class='carousel-item'><img class='d-block w-100' src='assets/images/banner/18.png' alt=' Twentieth slide'></div>
                <div class='carousel-item'><img class='d-block w-100' src='assets/images/banner/19.png' alt='Twenty-first slide'></div>
                <div class='carousel-item'><img class='d-block w-100' src='assets/images/banner/20.png' alt='Twenty-second slide'></div>
                <div class='carousel-item'><img class='d-block w-100' src='assets/images/banner/21.png' alt='Twenty-third slide'></div>
                <div class='carousel-item'><img class='d-block w-100' src='assets/images/banner/22.png' alt='Twenty-fourth slide'></div>
                <div class='carousel-item'><img class='d-block w-100' src='assets/images/banner/23.png' alt='Twenty-fifth slide'></div>
                <div class='carousel-item'><img class='d-block w-100' src='assets/images/banner/24.png' alt='Twenty-sixth slide'></div>
                <div class='carousel-item'><img class='d-block w-100' src='assets/images/banner/25.png' alt='Twenty-seventh slide'></div>
                <div class='carousel-item'><img class='d-block w-100' src='assets/images/banner/25-1.png' alt='Twenty-eighth slide'></div>
                <div class='carousel-item'><img class='d-block w-100' src='assets/images/banner/26.png' alt='Twenty-ninth slide'></div>
                <div class='carousel-item'><img class='d-block w-100' src='assets/images/banner/27.png' alt='Thirtieth slide'></div>
                <div class='carousel-item'><img class='d-block w-100' src='assets/images/banner/28.png' alt='Thirty-first slide'></div>
                <div class='carousel-item'><img class='d-block w-100' src='assets/images/banner/29.png' alt='Thirty-second slide'></div>
                <div class='carousel-item'><img class='d-block w-100' src='assets/images/banner/30.png' alt='Thirty-third slide'></div>
                <div class='carousel-item'><img class='d-block w-100' src='assets/images/banner/31.png' alt='Thirty-fourth slide'></div>
                <div class='carousel-item'><img class='d-block w-100' src='assets/images/banner/31-0.png' alt='Thirty-fifth slide'></div>
                <div class='carousel-item'><img class='d-block w-100' src='assets/images/banner/31-1.png' alt='Thirty-sixth slide'></div>
                <div class='carousel-item'><img class='d-block w-100' src='assets/images/banner/31-2.png' alt='Thirty-seventh slide'></div>
                <div class='carousel-item'><img class='d-block w-100' src='assets/images/banner/32.png' alt='Thirty-eighth slide'></div>
                <div class='carousel-item'><img class='d-block w-100' src='assets/images/banner/32-1.png' alt='Thirty-ninth slide'></div>
                <div class='carousel-item'><img class='d-block w-100' src='assets/images/banner/32-2.png' alt='Fortieth slide'></div>
                <div class='carousel-item'><img class='d-block w-100' src='assets/images/banner/33.png' alt='Forty-first slide'></div>
                <div class='carousel-item'><img class='d-block w-100' src='assets/images/banner/34.png' alt='Forty-second slide'></div>
                <div class='carousel-item'><img class='d-block w-100' src='assets/images/banner/35.png' alt='Forty-third slide'></div>
                <div class='carousel-item'><img class='d-block w-100' src='assets/images/banner/35-1.png' alt='Forty-fourth slide'></div>
                <div class='carousel-item'><img class='d-block w-100' src='assets/images/banner/35-2.png' alt='Forty-fifth slide'></div>
                <div class='carousel-item'><img class='d-block w-100' src='assets/images/banner/36.png' alt='Forty-sixth slide'></div>
                <div class='carousel-item'><img class='d-block w-100' src='assets/images/banner/37.png' alt='Forty-seventh slide'></div>
                <div class='carousel-item'><img class='d-block w-100' src='assets/images/banner/37-1.png' alt='Forty-eighth slide'></div>
                <div class='carousel-item'><img class='d-block w-100' src='assets/images/banner/37-2.png' alt='Forty-ninth slide'></div>
                <div class='carousel-item'><img class='d-block w-100' src='assets/images/banner/37-3.png' alt='Fiftieth slide'></div>
                <div class='carousel-item'><img class='d-block w-100' src='assets/images/banner/38.png' alt='Fifty-first slide'></div>
                <div class='carousel-item'><img class='d-block w-100' src='assets/images/banner/38-1.png' alt='Fifty-second slide'></div>
                <div class='carousel-item'><img class='d-block w-100' src='assets/images/banner/38-2.png' alt='Fifty-third slide'></div>
                <div class='carousel-item'><img class='d-block w-100' src='assets/images/banner/38-3.png' alt='Fifty-fourth slide'></div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"><span class="mdi mdi-arrow-left-bold text-info fa-3x" aria-hidden="true"></span><span class="sr-only">Previous</span></a>
              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next"><span class="mdi mdi-arrow-right-bold text-info fa-3x" aria-hidden="true"></span><span class="sr-only">Next</span></a>
            </div>
          <div class="modal-footer d-flex justify-content-center"><a data-dismiss="modal" id="btnCancelar"><i class="mdi mdi-close fa-3x text-danger"></i></a></div>
        </div>
      </div>
    </div>
  <!-- Termina modal banner -->
  <style media="screen">
  input[type='file']::-webkit-file-upload-button { padding: 20 30; color: #fff; background-color: #34495e; border: none; font-family: 'Montserrat', sans-serif; font-size: 20; border-radius: 5px;}
  input[type='file']::-moz-file-upload-button { padding: 20 30; color: #fff; background-color: #34495e; border: none; font-family: 'Montserrat', sans-serif; font-size: 20; border-radius: 5px;}
  </style>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="assets/bootstrap/js/popper.min.js"></script>
  <!-- plugins:js -->
  <!-- endinject -->

  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="assets/js/off-canvas.js"></script>
  <script src="assets/js/hoverable-collapse.js"></script>
  <script src="assets/js/template.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="assets/js/dashboard.js"></script>
  <script src="assets/js/data-table.js"></script>
  <script src="assets/js/jquery.dataTables.js"></script>
  <script src="assets/js/dataTables.bootstrap4.js"></script>
  <!-- End custom js for this page-->
  <!--Firebase-->
  <script src="https://www.gstatic.com/firebasejs/6.2.4/firebase-app.js"></script>
  <script src="https://www.gstatic.com/firebasejs/6.2.4/firebase-messaging.js"></script>
  <script type="text/javascript" src="assets/js/firebase/init.js"></script>
  <script type="text/javascript" src="app.js"></script>

</body>

</html>
