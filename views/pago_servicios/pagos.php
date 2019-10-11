<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!--JQUERY-->
    <script type="text/javascript" src="assets/jquery/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="assets/js/js_views/js_pagos.js"></script>
    <!--Validate-->
    <script type="text/javascript" src="assets/js/validate/validate1.19.1.js"></script>
    <script type="text/javascript" src="assets/js/validate/validate_rules.js"></script>
    <!--JS ORDER MAS USADOS-->
    <script type="text/javascript" src="assets/js/order/tinysort.js"></script>
    <script type="text/javascript" src="assets/js/order/order.js"></script>
    <!--SCRIPT-->
    <script type="text/javascript" src="assets/js/util/CleanModal.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="assets/bootstrap/js/popper.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="assets/bootstrap/js/mdb.min.js"></script>

    <!--CSS-->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-4-3-1.min.css">

    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="assets/css/mdb.min.css" >
    <link rel="stylesheet" href="assets/css/css.css" >

    <link rel="stylesheet" href="assets/css/style-media.css" >


    <title></title>
  </head>
  <body>
    <center>
      <br>
      <div class="contenedor-resp">
        <div class="grid-margin stretch-card">
          <div class="card-resp">
            <div class="card-body" data-step="2" data-intro="Vista Pagos de Servicios">
              <div id="div_principal" class="row mb-5 flex-center">
                <div id="mod_pag"></div>
                <!--Zoom effect-->
                <div id="divcfe2" class="view overlay zoom col-6 col-md-4 rounded " data-step="3" data-intro="Pagar servicio <img src='ayuda/sites/statics/css/images/img/ayu-ser.png' weight='100' height='280' />">
                      <a data-toggle="modal" data-target="#modalPagos" id="pagoCFE">
                        <img src="ayuda/sites/statics/css/images/cfe.png" class="img-fluid rounded" alt="smaple image">
                      </a>
                  </div>
                <!--End Zoom effect-->
                <div id="divtelmex2" class="view overlay zoom col-6 col-md-4 rounded">
                    <center>
                      <a data-toggle="modal" data-target="#modalPagos" id="pagoTELMEX">
                          <img src="ayuda/sites/statics/css/images/telmex.png" class="img-fluid rounded" alt="smaple image">
                      </a>
                    </center>
                  </div>
                <div id="divtelcel2"class="view overlay zoom col-6 col-md-4 rounded">
                    <br>
                    <a data-toggle="modal" data-target="#modalPagos" id="pagoTELCEL">
                        <img src="ayuda/sites/statics/css/images/plan_telcel.png" class="img-fluid rounded" alt="smaple image">
                      </a>
                  </div>
                <!---->
                <div id="divmegacable2"class="view overlay zoom col-6 col-md-4 rounded">
                    <br>
                    <a data-toggle="modal" data-target="#modalPagos" id="pagoMEGACABLE">
                      <img src="ayuda/sites/statics/css/images/megacable.png" class="img-fluid rounded" alt="smaple image">
                    </a>
                  </div>
                <div id="divizzi2" class="view overlay zoom col-6 col-md-4 rounded">
                    <br>
                    <br>
                    <a data-toggle="modal" data-target="#modalPagos" id="pagoIZZI">
                      <center>
                      <img src="ayuda/sites/statics/css/images/izzi2.png"  class="img-fluid rounded" alt="smaple image">
                      </center>
                    </a>
                  </div>
                <div id="divdish" class="view overlay zoom col-6 col-md-4 rounded">
                    <br>
                    <br>
                    <a data-toggle="modal" data-target="#modalPagos" id="pagoDISH">
                      <center>
                      <img src="ayuda/sites/statics/css/images/dish.png"  class="img-fluid rounded" alt="smaple image">
                      </center>
                    </a>
                    <br>
                  </div>

                <div id="divtotalp"class="view overlay zoom col-6 col-md-4 rounded">
                  <br>
                  <br>
                  <a data-toggle="modal" data-target="#modalPagos" id="pagoTOTALP">
                    <center>
                    <img src="ayuda/sites/statics/css/images/totalplay.png"  class="img-fluid rounded" alt="smaple image">
                    </center>
                  </a>
                </div>
                <div id="divfuller"class="view overlay zoom col-6 col-md-4 rounded">
                  <br>
                  <a data-toggle="modal" data-target="#modalPagos" id="pagoFULLER">
                    <center>
                    <img src="ayuda/sites/statics/css/images/fuller.png" width="150" class="img-fluid rounded" alt="smaple image">
                    </center>
                  </a>
                  <br>
                </div>

                <div sort="0" class="view overlay zoom col-6 col-md-4 rounded" data-step="4" data-intro="Muestra mas pagos de servicios">
                  <br>
                  <a id="return_mas_pagos">
                    <center>
                      <img src="ayuda/sites/statics/css/images/boton-ms.png" class="img-fluid rounded" alt="smaple image">
                    </center>
                  </a>
                  <br>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </center>
    <!-- Modal Pagos-->
    <div class="modal fade" id="modalPagos" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <!-- Add .modal-dialog-centered to .modal-dialog to vertically center the modal -->
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header blue-gradient color-block">
          <h5 class="modal-title w-100 text-white font-weight-bold" id="exampleModalLongTitle">Pago</h5>
          <label  id="service"></label>
        </div>
        <form id="form_pago_servicios" action="#" method="post">
          <div class="modal-body">
            <div class="row justify-content-md-center">
              <div class="col-12 col-md-12">
                <label for="referencia_pago">Referencia de pago </label> <a id="info" data-toggle="modal" data-target="#modalInfo"><span aria-hidden="true"><i class="mdi mdi-information-outline"></i></span></a>
                <input class="form-control required number" type="tel" name="referencia_pago" id="referencia_pago" style="font-size:47px; text-align:center;">
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-12 col-md-12">
                <label for="monto_pago">Monto</label>
                <input class="form-control required number" type="number" step="0.01" min="1" name="monto_pago" id="monto_pago" style="font-size:35px; text-align:center;">
              </div>
              <div class="col-12 col-md-12">
                <br>
                <b><p class="text-danger">* Comisión por transaccion: $10.00</p></b>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal" id="closeApuntador">Cerrar</button>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalConfPago" id="btnApuntador" disabled>Pagar</button>
          </div>
       </form>
      </div>
    </div>
    </div>
    <!--End modal Pagos-->

    <!-- Modal Info-->
    <div class="modal fade" id="modalInfo" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <!-- Add .modal-dialog-centered to .modal-dialog to vertically center the modal -->
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle"></h5>
        </div>
        <div class="modal-body">

            <div class="row justify-content-md-center">
              <img id="img_info">
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Ok</button>
        </div>
      </div>
    </div>
    </div>
    <!--End modal Info-->

    <!-- Modal ConfirmacionPago-->
    <div class="modal fade" id="modalConfPago" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <!-- Add .modal-dialog-centered to .modal-dialog to vertically center the modal -->
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle"><p> Confirmación de pago </p></h5>
        </div>
        <div class="modal-body">
          <div class="row-justify-content-center">
            <center>
            <div class="col-12 col-md-12">
              <p>Se realizará un pago al número de referencia</p>
              <div class="table-responsive">
                <h1><label id="lblreferencia"></label></h1>
              </div>
              <p>Por la cantidad de</p>
              <h1>$<label id="lblmonto"></label></h1>
              <p><b>*Más $10.00 de comisión</b> </p>
              <h1><b><p>TOTAL:</p>$<label id="lbltotalPago"></label></b></h1>
              <p><b>¿Desea continuar?</b></p>
            </div>
          </center>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-primary" data-dismiss="modal">Confirmar</button>
        </div>
      </div>
    </div>
    </div>
    <!--End modal ConfirmacionPago-->
  </body>
</html>
