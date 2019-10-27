<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!--JQUERY-->
    <script type="text/javascript" src="assets/jquery/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="assets/js/js_views/js_depositos.js"></script>
    <!--Validate-->
    <script type="text/javascript" src="assets/js/validate/validate1.19.1.js"></script>
    <script type="text/javascript" src="assets/js/validate/validate_rules.js"></script>
    <!--SCRIPT-->
    <script type="text/javascript" src="assets/js/util/CleanModal.js"></script>
    <script type="text/javascript" src="assets/js/util/alertify.min.js"></script>
    <script type="text/javascript" src="assets/bootstrap/js/bootstrap-clockpicker.min.js"></script>
    <script type="text/javascript" src="assets/bootstrap/js/bootstrap-datetimepicker.js"></script>
    <script type="text/javascript" src="assets/js/util/bootstrap-filestyle.js"></script>
    <script type="text/javascript" src="assets/js/js_views/js_estados_municipios.js"></script>
    <script type="text/javascript" src="assets/js/util/data.js"></script>
    <script type="text/javascript" src="assets/js/util/jlinq.js"></script>
    <script type="text/javascript" src="assets/js/util/stacktable.js"></script>
    <script type="text/javascript" src="assets/js/js_views/js_home.js"></script>
    <!--CSS-->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-4-3-1.min.css">

    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap-clockpicker.min.css" >
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap-datetimepicker.min.css" >
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="assets/css/mdb.min.css" >
    <link rel="stylesheet" href="assets/css/css.css">
    <link rel="stylesheet" href="assets/css/mystyle.css">
    <link rel="stylesheet" href="assets/css/style-media.css">
    <link rel="stylesheet" href="assets/css/util/fontawesome.css">
    <link rel="stylesheet" href="assets/css/stacktable.css">
    <title></title>
  </head>
  <body>
  <center>
    <div class="contenedor-resp" style="text-align: left;" data-step="2" data-intro="Vista de depositos">
      <br>
      <div class="row">
        <div class="col-md-12 grid-margin stretch-card justify-content-center">
          <div class="card-resp">
            <div class="card-body w-100 p-2" style="height: 3rem;">
              <div class="col-12" style="text-align:center">
                <h4><b>&emsp;&emsp;Depositos&emsp;&emsp;</b></h4>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="row ">
        <div class="col-12 col-md-6 grid-margin stretch-card column">
          <div class="card-bord">
            <div class="card-body" >
              <div class="col-12 col-md-12">
                <div class="list-group"  id="list-tab" role="tablist">
                  </p>
                  </p>
                  </p>
                  <a class="list-group-item list-group-item-action active" id="list-CBancarias-list" data-toggle="list" href="#list-CBancarias"
                      role="tab" aria-controls="CBancarias" data-step="3" data-intro="Muestra las Cuentas bancarias para Depositos Recargalos TAE y Depositos Pago de Servicios <img src='ayuda/sites/statics/css/images/img/ayu-cban.png' width='100%' />">
                      <i class=" mdi mdi-bank mr-lg-4 mr-xl-4 "></i>Cuentas Bancarias
                  </a>
                  <a class="list-group-item list-group-item-action" id="list-CTarjeta-list" data-toggle="list" href="#list-CTarjeta"
                      role="tab" aria-controls="CTarjeta" data-step="4" data-intro="Compra con tarjeta <img src='ayuda/sites/statics/css/images/img/ayu-ctar.png' width='100%' />">
                      <i class="mdi mdi-credit-card mr-lg-4 mr-xl-4 "></i>Compra con tarjeta
                  </a>
                  <a class="list-group-item list-group-item-action" id="list-CFiscales-list" data-toggle="list" href="#list-CFiscales"
                      role="tab" aria-controls="CFiscales" data-step="5" data-intro="Puede ver las cuentas fiscales agregadas o crear una nueva. <div id='carousel-example-1z' class='carousel slide carousel-fade' data-ride='carousel'><ol class='carousel-indicators'><li data-target='#carousel-example-1z' data-slide-to='0' class='active'></li><li data-target='#carousel-example-1z' data-slide-to='1'></li></ol><div class='carousel-inner' role='listbox'><div class='carousel-item active'><img class='d-block w-100' src='ayuda/sites/statics/css/images/img/ayu-cfis.png' alt='First slide'></div><div class='carousel-item'><img class='d-block w-100' src='ayuda/sites/statics/css/images/img/ayu-cfiss.png' alt='Second slide'></div></div><a class='carousel-control-prev' href='#carousel-example-1z' role='button' data-slide='prev'><span class='fas fa-angle-left blue' aria-hidden='true'></span><span class='sr-only'>Previous</span></a><a class='carousel-control-next' href='#carousel-example-1z' role='button' data-slide='next'><span class='fas fa-angle-right blue' aria-hidden='true'></span><span class='sr-only'>Next</span></a></div>">
                      <i class="mdi mdi-clipboard-outline mr-lg-4 mr-xl-4 "></i>Cuentas Fiscales
                  </a>
                  <a class="list-group-item list-group-item-action" id="list-CRealizadas-list" data-toggle="list" href="#list-CRealizadas"
                      role="tab" aria-controls="CRealizadas" data-step="6" data-intro="Se puede buscar las compras realizadas ingresando la fecha. <div id='carousel-example-1z' class='carousel slide carousel-fade' data-ride='carousel'><ol class='carousel-indicators'><li data-target='#carousel-example-1z' data-slide-to='0' class='active'></li><li data-target='#carousel-example-1z' data-slide-to='1'></li></ol><div class='carousel-inner' role='listbox'><div class='carousel-item active'><img class='d-block w-100' src='ayuda/sites/statics/css/images/img/ayu-crea.png' alt='First slide'></div><div class='carousel-item'><img class='d-block w-100' src='ayuda/sites/statics/css/images/img/ayu-fi.png' alt='Second slide'></div><div class='carousel-item'><img class='d-block w-100' src='ayuda/sites/statics/css/images/img/ayu-ff.png' alt='Third slide'></div></div><a class='carousel-control-prev' href='#carousel-example-1z' role='button' data-slide='prev'><span class='fas fa-angle-left blue' aria-hidden='true'></span><span class='sr-only'>Previous</span></a><a class='carousel-control-next' href='#carousel-example-1z' role='button' data-slide='next'><span class='fas fa-angle-right blue' aria-hidden='true'></span><span class='sr-only'>Next</span></a></div>">
                      <i class="mdi mdi-cart-outline mr-lg-4 mr-xl-4 "></i>Compras Realizadas
                  </a>
                  </p>
                  </p>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 grid-margin stretch-card">
          <div class="card-bord">
            <div class="card-body">
              <div class="col-12">
                <div class="tab-content" id="nav-tabContent">
                  <div class="tab-pane fade show active" id="list-CBancarias" role="tabpanel" aria-labelledby="list-CBancarias-list">
                    <h4><b>Cuentas Bancarias</b></h4>

                      <div id="radioGroup" class="row justify-content-between">
                        <!-- Group of default radios - option 1 -->
                        <div class="custom-control custom-radio" class="col-12 col-md-6">
                          <input type="radio" class="custom-control-input" id="rbtnTAE" name="groupOfDefaultRadios">
                          <label class="custom-control-label" for="rbtnTAE">Depositos - TAE</label>
                        </div>

                        <!-- Group of default radios - option 2 -->
                        <div class="custom-control custom-radio " class="col-12 col-md-6">
                          <input type="radio" class="custom-control-input" id="rbtnPS" name="groupOfDefaultRadios" >
                          <label class="custom-control-label" for="rbtnPS">Depositos - PAGO DE SERVICIOS </label>
                        </div>
                      </div>
                    <!--***-->
                    <!--***-->
                    <div class="" id="div_DepositosTAE" style="display: none">
                      <div>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item col-12 col-md-4">
                          <a class="nav-link active" id="Cbancomer-tab" data-toggle="tab" href="#CBBancomer" role="tab" aria-controls="CBBancomer"
                            aria-selected="true">Bancomer</a>
                        </li>
                        <li class="nav-item col-12 col-md-4">
                          <a class="nav-link" id="Csantander-tab" data-toggle="tab" href="#CBSantander" role="tab" aria-controls="CBSantander"
                            aria-selected="false">Santander</a>
                        </li>
                        <li class="nav-item col-12 col-md-4">
                          <a class="nav-link" id="COxxo-tab" data-toggle="tab" href="#COxxo" role="tab" aria-controls="COxxo"
                            aria-selected="false">Oxxo</a>
                        </li>
                        <li class="nav-item col-12 col-md-4">
                          <a class="nav-link" id="CHSBC-tab" data-toggle="tab" href="#CHSBC" role="tab" aria-controls="CHSBC"
                            aria-selected="false">HSBC</a>
                        </li>
                        <li class="nav-item col-12 col-md-4">
                          <a class="nav-link" id="CBanorte-tab" data-toggle="tab" href="#CBanorte" role="tab" aria-controls="CBanorte"
                            aria-selected="false">Banorte</a>
                        </li>
                        <li class="nav-item col-12 col-md-4">
                          <a class="nav-link" id="CAzteca-tab" data-toggle="tab" href="#CAzteca" role="tab" aria-controls="CAzteca"
                            aria-selected="false">Banco Azteca</a>
                        </li>
                      </ul>
                      </div>
                      <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="CBBancomer" role="tabpanel" aria-labelledby="CBBancomer-tab">
                          <div class="row">
                            <div class="col-12 col-md-6 tel">
                              <a id="btnbancomer" data-toggle="modal" data-target="#modalBank" >
                                <img src="ayuda/sites/statics/css/images/bancomer2.png"  class="img-fluid" alt="Responsive image">
                              </a>
                            </div>
                            <div class="col-12 col-md-6">
                              <br>
                              <p><b>Titular: </b>Recargalos TAE S.A de C.V <br>
                              <b>Cuenta: 0110791008</b> <br>
                              <b>Clabe Interbancaria: </b>012670001107910083</p>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane fade" id="CBSantander" role="tabpanel" aria-labelledby="CBSantander-tab">
                          <div class="row">
                            <div class="col-12 col-md-6 tel">
                              <a id="btnsantander" data-toggle="modal" data-target="#modalBank" >
                                <img src="ayuda/sites/statics/css/images/santander3.png"  class="img-fluid" alt="Responsive image">
                              </a>
                            </div>
                            <div class="col-12 col-md-6">
                              <br>
                              <p><b>Titular: </b>Recargalos TAE S.A de C.V <br>
                              <b>Cuenta: 65506761790</b></p>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane fade" id="COxxo" role="tabpanel" aria-labelledby="COxxo-tab">
                          <div class="row">
                            <div class="col-12 col-md-6 tel">
                              <a id="btnoxxo" data-toggle="modal" data-target="#modalBank" >
                                <img src="ayuda/sites/statics/css/images/oxxo2.png"  class="img-fluid" alt="Responsive image">
                              </a>
                            </div>
                            <div class="col-12 col-md-6">
                              <br>
                              <p><b>Tarjeta de Debito Santander</b><br>
                              <b>Cuenta: 5579-0890-0029-3913</b></p>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane fade" id="CHSBC" role="tabpanel" aria-labelledby="CHSBC-tab">
                          <div class="row">
                            <div class="col-12 col-md-6 tel">
                              <br>
                              <a id="btnhsbc" data-toggle="modal" data-target="#modalBank">
                                <img src="ayuda/sites/statics/css/images/hsbc2.png"  class="img-fluid" alt="Responsive image">
                              </a>
                            </div>
                            <div class="col-12 col-md-6">
                              <br>
                              <p><b>Titular: </b>Tecnología Multitransaccional Aplicada al Comercio S.A de C.V <br>
                              <b>Cuenta: 4060559408</b></p>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane fade" id="CBanorte" role="tabpanel" aria-labelledby="CBanorte-tab">
                          <div class="row">
                            <div class="col-12 col-md-6 tel">
                              <br>
                              <a id="btnbanorte" data-toggle="modal" data-target="#modalBank">
                                <img src="ayuda/sites/statics/css/images/banorte2.png"  class="img-fluid" alt="Responsive image">
                              </a>
                            </div>
                            <div class="col-12 col-md-6">
                              <br>
                              <p><b>Titular: </b>Tecnología Multitransaccional Aplicada al Comercio S.A de C.V <br>
                              <b>Cuenta: 0286783240</b></p>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane fade" id="CAzteca" role="tabpanel" aria-labelledby="CAzteca-tab">
                          <div class="row">
                            <div class="col-12 col-md-6 tel">
                              <br>
                              <a id="btnazteca" data-toggle="modal" data-target="#modalBank">
                                <img src="ayuda/sites/statics/css/images/azteca2.png"  class="img-fluid " alt="Responsive image">
                              </a>
                              <br>
                            </div>
                            <div class="col-12 col-md-6">
                              <br>
                              <p><b>Titular: </b>Tecnología Multitransaccional Aplicada al Comercio S.A de C.V <br>
                              <b>Cuenta: 15620198393901</b></p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--****-->
                    <div class="" id="div_DepositosPS" style="display: none">
                      <div>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item col-12 col-md-6">
                          <a class="nav-link active" id="CBBancomerPS-tab" data-toggle="tab" href="#CBBancomerPS" role="tab" aria-controls="CBBancomerPS"
                            aria-selected="true">Bancomer</a>
                        </li>
                        <li class="nav-item col-12 col-md-6">
                          <a class="nav-link" id="CAztecaPS-tab" data-toggle="tab" href="#CAztecaPS" role="tab" aria-controls="CAztecaPS"
                            aria-selected="false">Banco Azteca</a>
                        </li>
                      </ul>
                      </div>
                      <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="CBBancomerPS" role="tabpanel" aria-labelledby="CBBancomerPS-tab">
                          <div class="row">
                            <div class="col-12 col-md-6 tel">
                              <a id="btnDespositoBancomer" data-toggle="modal" data-target="#modalBankDeposito">
                                <img src="ayuda/sites/statics/css/images/bancomer2.png"  class="img-fluid" alt="Responsive image">
                              </a>
                            </div>
                            <div class="col-12 col-md-6">
                              <br>
                              <p><b>Titular: </b>Recargalos TAE S.A de C.V <br>
                              <b>Cuenta: 0110791008</b> <br>
                              <b>Clabe Interbancaria: </b>012670001107910083</p>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane fade" id="CAztecaPS" role="tabpanel" aria-labelledby="CAztecaPS-tab">
                          <div class="row">
                            <div class="col-12 col-md-6 tel">
                              <br>
                              <a id="btnDespositoAzteca" data-toggle="modal" data-target="#modalBankDeposito">
                                <img src="ayuda/sites/statics/css/images/azteca2.png"  class="img-fluid" alt="Responsive image">
                              </a>
                              <br>
                            </div>
                            <div class="col-12 col-md-6">
                              <br>
                              <p><b>Titular: </b>Tecnología Multitransaccional Aplicada al Comercio S.A de C.V <br>
                              <b>Cuenta: 15620198393901</b></p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--****-->
                  </div>
                  <div class="tab-pane fade" id="list-CTarjeta" role="tabpanel" aria-labelledby="list-CTarjeta-list">
                    <h4><b>Compra con tarjeta</b></h4>
                    <div class="container">
                      <div class="row justify-content-start">
                        <div class="col-12 col-md-12">
                          <div class="card-header w-100 p-2" style="height: 3em;">
                            <h6><b>Los campos con (*) son obligatorios</b></h6>
                          </div>
                        </div>
                      </div>
                      <br>
                      <div class="row justify-content-start">
                        <div class="col-12 col-md-6">
                            <label for="producto">Producto</label>
                            <input type="text" name="producto" id="producto" class="form-control" value="Recarga Electronica TAE">
                        </div>
                        <div class="col-12 col-md-6">
                          <div class="custom-control custom-checkbox">
                            <label for="solicitar_facturaCT"></label>
                            <input type="checkbox" class="custom-control-input" id="solicitar_facturaCT" name="solicitar_facturaCT">
                            <label class="custom-control-label" for="solicitar_facturaCT">Solicitar Factura</label>
                          </div>
                        </div>
                      </div>
                      <br>
                      <div class="row justify-content-between">
                        <div class="col-12 col-md-5">
                          <label for="topay">* Cantidad a pagar</label>
                          <input class="form-control" type="number" min="1" name="topay" id="topay" placeholder="$">
                        </div>
                        <div class="col-12 col-md-5">
                          <button type="button" name="btnPayNow" id="btnPayNow" class="btn btn-primary" data-toggle="modal" data-target="#modalConfirmarPCT">Pagar ahora</button>
                        </div>
                      </div>

                      <div class="row justify-content-start">
                        <div class="col-12 col-md-12">
                          <div >
                            <figcaption class="figure-caption">
                            (*)Los datos de tu tarjeta de credito o debito<br>
                            serán recopilados directamente por Santander<br>
                            3DSecure de Visa Verified y MasterCard SecureCode (Habilidatos)</figcaption>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="list-CFiscales" role="tabpanel" aria-labelledby="list-CFiscales-list">
                    <h4><b>Cuentas Fiscales</b></h4>
                    <div class="row justify-content-end">
                      <div class="col-4 col-md-3">
                        <a class="redimen2"id="btnAddCF" data-toggle="modal" data-target="#modalCF">
                            <i class="mdi mdi-plus-circle-outline fa-3x text-info"></i>
                        </a>
                        <div class="redimen">
                          <a class="btn btn-primary" id="btnAddCF" data-toggle="modal" data-target="#modalCF">
                              Agregar
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="row justify-content-center">
                      <div class="col-12 col-md-12">
                        <table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
                          <thead align="center">
                            <tr>
                              <th class="th-sm">RFC
                              </th>
                              <th class="th-sm">Razon Social
                              </th>
                              <th class="th-sm">Email
                              </th>
                            </tr>
                          </thead>
                          <tbody align="center">
                            <tr>
                              <td>VECJ880326XXX</td>
                              <td>Pago</td>
                              <td>ejemplo@mail.com</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="list-CRealizadas" role="tabpanel" aria-labelledby="list-CRealizadas-list">
                    <h4><b>Compras Realizadas</b></h4>
                    <div class="container">
                      <div class="row justify-content-start">
                          <div class="col-12 col-md-4">
                            <center><b><label for="btnfechai">Fecha inicial</label></b></center>
                            <input data-toggle="modal" data-target="#modalfechai" type="button" id="btnfechai" name="btnfechai" class="form-control resaltado" >
                          </div>
                          <div class="col-12 col-md-4">
                            <center><b><label for="btnfechaf">Fecha final</label></b></center>
                            <input data-toggle="modal" data-target="#modalfechaf" type="button" id="btnfechaf" name="btnfechaf" class="form-control resaltado"  >
                          </div>
                          <div class="col-12 col-md-4">
                              <center>
                                <label for="btnBuscar"><i class="mdi mdi-account-search "></i> </label>
                              </center>
                              <input data-toggle="modal" data-target="#modalSearch" type="button" name="btnBuscar" id="btnBuscar" value="Buscar" class="form-control btn-block text-white" style="background: #33b5e5;">
                          </div>
                        </div>
                      </div>
                    </div>


                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row justify-content-start tab-pane fade show" id="info" style="display: none">
        <div class="col-12 col-md-6" id="div_horario">
          <div class="card-resp">
            <div class="card-body">
              <div class="card-footer">
                <h6><b>Horario de abono</b></h6>
                <br>
                <p>Lunes a Viernes 9:00 am A 8:30 pm.<br>
                Sabados y Domingos 9:00 am A 8:30 pm <b>Solo al 5.0%.</b><br>
                Días festivos 10:00 am A 8:30 pm <b>Solo al 5.0%.</b></p>
              </div>
            </div>
          </div></br>
        </div>
        <div class="col-12 col-md-6" id="div_restricciones" >
          <div class="card-resp">
            <div class="card-body">
              <div class="card-footer">
                <h6><b>Restricciones</b></h6>
                <p class="text-danger">(*) Monto MINIMO para estas cuentas es de $400.00<br>
                (*) Monto MAXIMO para estas cuentas es de $40,000.00<br>
                Si depositas o transfieres más de $40,000.00 (EN UNA SOLA EXHIBICION)<br>
                Deberás enviar datos fiscales para facturación.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </center>
  <!--MODALES-->
  <!-- Modal Bank-->
  <div class="modal fade" id="modalBank" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
  aria-hidden="true">
  <!-- Add .modal-dialog-centered to .modal-dialog to vertically center the modal -->
  <div class="modal-dialog modal-dialog-centered" role="document">
  <div class="modal-content">
      <div class="modal-header">
        <div class="col 12 col-md-12">
          <div class="row justify-content-center">
            <img id="imgBanco">
          </div>
        </div>
      </div>
      <form id="form_rep_depositos" action="#" method="post">
        <div class="modal-body">
          <div class="container">
            <div class="row justify-content-md-center">
              <div class="col-12 col-md-6">
                <label for="movimiento">Movimiento</label>
                <input class="form-control required" type="text" name="movimiento" id="movimiento" placeholder="Movimiento " style="font-size:22px;">
              </div>
              <div class="col-12 col-md-6">
                <label for="monto_dep">Monto depositado</label>
                <input class="form-control required number" type="number" min="1"  name="monto_dep" id="monto_dep" placeholder="Cantidad " style="font-size:22px;">
              </div>
            </div>
          </div>
          <br>
          <div class="container">
            <div class="row justify-content-md-center">
              <div class="col-6 col-md-6">
                <div class="input-group date fechas" data-date="" data-date-format="yyyy-mm-dd"  data-link-format="yyyy-mm-dd">
                  <input type="text" onfocus="blur();" name="fechad" id="fechad" class="form-control " placeholder="Fecha" style="font-size:22px;">
                  <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                  <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
              </div>
              <div class="col-6 col-md.4">
                <div class="timed" data-placement="left" data-align="top" data-autoclose="true">
                   <input type="text" onfocus="blur();" id="timed" name="timed" class="form-control required" size="3" placeholder="Hora" style="font-size:22px;">
                 </div>
              </div>
            </div>
            <br>
            <div class="row justify-content-md-between">
              <div class="col-6 col-md-6">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="solicitar_factura" name="solicitar_factura">
                  <label class="custom-control-label" for="solicitar_factura">Solicitar Factura</label>
                </div>
              </div>
              <div class="col-6 col-md-6">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="adjuntar_imagen">
                  <label class="custom-control-label" for="adjuntar_imagen">Adjuntar imágen</label>
                </div>
              </div>
            </div>
            <div class="row justify-content-center">
                <div id="indicator" style="display: none; text-align: center;" class="loading_img">
                  <img src="assets/images/indicator.gif"/>
                </div>
              </div>
            <br>
            <div class="row justify-content-md-center" style="display: none;" id="div_browse">
              <div class="col-12 col-md-10">
                <div class="custom-file">
                    <input type="file" id="input02" accept="image/jpeg,image/png">
                </div>
              </div>
              <br>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal" id="CancelReportar">Cerrar</button>
          <button type="button" class="btn btn-default" id="btnReportar" data-dismiss="modal">Reportar</button>
        </div>
      </form>
    </div>
  </div>
  </div>
  <!--MODALES-->
  <!-- Modal CF-->
  <div class="modal fade" id="modalCF" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
  aria-hidden="true">
  <!-- Add .modal-dialog-centered to .modal-dialog to vertically center the modal -->
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
  <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Nueva cuenta fiscal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </div>
      <form id="form_Add_CuentaF" method="post">
      <div class="modal-body">
        <div class="container">
            <div class="row justify-content-md-center">
              <div class="col-6 col-md-4">
                <label for="rfc">RFC</label>
                <input class="form-control required" type="text" name="rfc" id="rfc" maxlength="13">
              </div>
              <div class="col-6 col-md-4">
                <label for="razon_social">Razon social</label>
                <input class="form-control required" type="text" name="razon_social" id="razon_social">
              </div>
              <div class="col-6 col-md-4">
                <label for="email">Email</label>
                <input class="form-control  required email" type="email" name="email" id="email" >
              </div>
            </div>
            <div id="indicator" style="display: none; text-align: center;" class="loading_img">
              <img src="assets/images/indicator.gif"/>
            </div>
            <div class="row justify-content-md-center">
              <div class="col-6 col-md-4">
                  <label for="codigo_postal">Codigo postal</label>
                  <input type="tel" onKeyPress="if(this.value.length==5) return false;" id="codigo_postal" name="codigo_postal" class="form-control required number">
              </div>
              <div class="col-6 col-md-4">
                  <label for="SelEstados">Estado</label>
                  <input type="text" id="SelEstados" name="SelEstados" class="form-control" disabled>
              </div>
              <div class="col-6 col-md-4">
                  <label for="SelMunicipios">Municipio</label>
                  <input type="text" id="SelMunicipios" name="SelMunicipios" disabled class="form-control">
              </div>
            </div>
            <div class="row justify-content-md-center">
              <div class="col-6 col-md-4">
                  <label for="colonia">Colonia</label>
                  <select class="select-css required" id="colonia" name="colonia" style="text-align-last:center">
                    <option value="" disabled selected >--Seleccione--</option>
                  </select>
              </div>
              <div class="col-6 col-md-4">
                <label for="calle">Calle</label>
                <input class="form-control required" type="text" name="calle" id="calle">
              </div>
              <div class="col-6 col-md-2">
                  <label for="num_exterior">Num. exterior</label>
                  <input type="text" id="num_exterior" name="num_exterior" class="form-control required">
              </div>
              <div class="col-6 col-md-2">
                  <label for="num_interior">Num. interior</label>
                  <input type="text" id="num_interior" name="num_interior" class="form-control">
              </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal" id="CancelAddCuentaFiscal">Cerrar</button>
        <button type="button" class="btn btn-primary" id="btnAddCuentaFiscal" data-dismiss="modal">Guardar</button>
      </div>
      </form>
    </div>
  </div>
  </div>
  <!--End modal CF-->
  <!--First Modal -->
  <div class="modal fade" id="modalfechai" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
  aria-hidden="true">
      <!-- Add .modal-dialog-centered to .modal-dialog to vertically center the modal -->
  <div class="modal-dialog modal-dialog-centered" role="document">
  <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Fecha inicio</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="container">
                <div class="row justify-content-md-center">
                  <div class="col-6 col-md-6">
                    <div class="input-group date fechas" data-date="" data-date-format="yyyy-mm-dd"  data-link-format="yyyy-mm-dd">
                      <input type="text" onfocus="blur();" name="fechai" id="fechai" class="form-control" placeholder="Fecha">
                      <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                      <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                    </div>
                  </div>
                  <div class="col-6 col-md-4">
                     <div class="timei" data-placement="left" data-align="top" data-autoclose="true">
                        <input type="text" onfocus="blur();" id="timei" name="timei" class="form-control" size="3" placeholder="Hora">
                      </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-default" data-dismiss="modal" id="btnfechainicial" name="btnfechainicial">OK</button>
            </div>
          </div>
        </div>
  </div>
  <!--End first modal-->

  <!-- Second Modal -->
  <div class="modal fade" id="modalfechaf" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
  aria-hidden="true">
        <!-- Add .modal-dialog-centered to .modal-dialog to vertically center the modal -->
  <div class="modal-dialog modal-dialog-centered" role="document">
  <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Fecha termino</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="container">
                <div class="row justify-content-md-center">
                  <div class="col-6 col-md-6">
                    <div class="input-group date fechas" data-date="" data-date-format="yyyy-mm-dd"  data-link-format="yyyy-mm-dd">
                      <input type="text" onfocus="blur();" name="fechaf" id="fechaf" class="form-control" placeholder="Fecha">
                      <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                      <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                    </div>
                  </div>
                  <div class="col-6 col-md-4">
                    <div class="timef" data-placement="left" data-align="top" data-autoclose="true">
                      <input type="text" onfocus="blur();" id="timef" name="timef" class="form-control" size="3" placeholder="Hora">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-default" data-dismiss="modal" id="btnfechafinal" name="btnfechafinal">OK</button>
            </div>
          </div>
        </div>
  </div>
  <!--End second modal-->

  <!-- Modal BankDepositosPagodeServicios-->
  <div class="modal fade" id="modalBankDeposito" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
  aria-hidden="true">
  <!-- Add .modal-dialog-centered to .modal-dialog to vertically center the modal -->
  <div class="modal-dialog modal-dialog-centered" role="document">
  <div class="modal-content">
      <div class="modal-header">
        <div class="col-12 col-md-12">
          <div class="row justify-content-center">
            <img id="imgBancoDepositosPS">
          </div>
        </div>
      </div>
      <form id="form_Depositar" action="#" method="post">
        <div class="modal-body">

            <div class="row justify-content-md-center">
              <div class="col-12 col-md-10">
                <div class="custom-file">
                      <input type="file" class="form-control" id="input03" accept="image/jpeg,image/png">
                </div>
              </div>
              <br>
            </div>
            <br>
            <div class="row justify-content-md-center">
              <div class="col-6 col-md-6">
                <label for="movimiento">Movimiento</label>
                <input class="form-control required" type="text" name="movimiento" id="movimiento" placeholder="Movimiento" style="font-size:22px;">
              </div>
              <div class="col-6 col-md-6">
                <label for="monto_dep">Monto depositado</label>
                <input class="form-control required number" type="number" min="1" name="monto_dep" id="monto_dep" placeholder="Cantidad" style="font-size:22px;">
              </div>
            </div>
            <br>
            <div class="row justify-content-md-center">
              <div class="col-6 col-md-6">
                <div class="input-group date fechas" data-date="" data-date-format="yyyy-mm-dd"  data-link-format="yyyy-mm-dd">
                  <input type="text" onfocus="blur();" name="fechad" id="fechad" class="form-control" placeholder="Fecha" style="font-size:22px;">
                  <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                  <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
              </div>
              <div class="col-6 col-md.4">
                <div class="timed" data-placement="left" data-align="top" data-autoclose="true">
                   <input type="text" onfocus="blur();" id="timed" name="timed" class="form-control required" size="3" placeholder="Hora" style="font-size:22px;">
                 </div>
              </div>
            </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal" id="CancelDepositar">Cerrar</button>
          <button type="button" class="btn btn-primary" data-dismiss="modal" id="btnDepositar">Depositar</button>
        </div>
      </form>
    </div>
  </div>
  </div>
  <!--End modal bankDepositosPagodeServicios-->
  <!-- Modal EndSearch-->
  <div class="modal fade" id="modalSearch" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <!-- Add .modal-dialog-centered to .modal-dialog to vertically center the modal -->
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
  <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Compras realizadas en el periodo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </div>
      <div class="modal-body">
        <div class="container">
            <div class="row justify-content-md-center">
              <div class="col-12 col-md-12">

              </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
      </div>
    </div>
  </div>
  </div>
  <!-- Central Modal Confirmación Abono -->
  <!-- Central Modal Small -->
  <div class="modal fade" id="modalConfirmarPCT" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">

    <!-- Change class .modal-sm to change the size of the modal -->
    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">


      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title w-100" id="myModalLabel">Confirmar Pago</h4>
        </div>
        <div class="modal-body">
          <div class="row justify-content-md-center">
            <h2><b><label id="getTopay"></label></b></h2>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Corregir</button>
          <button type="button" class="btn btn-primary btn-sm" id="confirmarPagarAhora" data-dismiss="modal">Pagar Ahora</button>
        </div>
      </div>
    </div>
  </div>

  <script type="text/javascript">
    $('table').stacktable();
  </script>
  <!--End modal EndSearch-->
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="assets/bootstrap/js/popper.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="assets/bootstrap/js/mdb.min.js"></script>

  </body>
</html>
